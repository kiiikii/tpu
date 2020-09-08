<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="crossorigin=""></script>

	<script src="assets/js/leaflet.ajax.js"></script>

	<script type="text/javascript">

		//navigator
		navigator.geolocation.getCurrentPosition(function(location) {
			var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

		// initialize map
		var map = L.map('mapid').setView([-7.559209, 110.7837924], 10);

		var LayerKita = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			maxZoom: 18,
			tileSize:512,
			zoomOffset:-1,
			id: 'mapbox/streets-v11',
			accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
		});
		map.addLayer(LayerKita);

		var myStyle2 = {
			"color": "#ffff00",
			"weight": 1,
			"opacity": 0.9
		};

		// popup
		function popUp(f,l){
			var out = [];
			if (f.properties) {
				// for(key in f.properties){
	        	// 	console.log(key);

	        	// }
	        	out.push("Provinsi: " + f.properties['PROVINSI']);
	        	out.push("Kecamatan: " + f.properties['KECAMATAN']);
	        	l.bindPopup(out.join("<br />"));
			}
		}

		// marker
		var myIcon = L.Icon.extend({
    		options: {
		        iconSize: [38, 45]
    		}
		});
		<?php

			// mencari berdasarkan inputan yang diberi
			if($namakub != '') {

				$db->where('namakub', '%'.$namakubur.'%', 'LIKE');
			}

			// mencari berdasarkan kecamatan
			#code...

			$db->join('kecamatan b', 'a.idkec = b.idkec', 'LEFT');
			$getdata = $db->ObjectBuilder()->get('kuburan a');
			foreach ($getdata as $row) {
				?>
				L.marker([<?= $row->lat ?>, <?= $row->lng ?>], {icon: new myIcon({iconUrl:'<?= ($row->marker=='')?assets('icons/marker.png'):assets('unggah/marker/'.$row->marker) ?>'})}).addTo(map)
					.bindPopup("Nama : <?= $row->namakub ?><br>Kec. <?= $row->nama?><br>Alamat : <?= $row->alamat ?>");
				<?php
			}
		?>
		});
	</script>