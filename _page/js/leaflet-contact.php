<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="crossorigin=""></script>

	<script src="assets/js/leaflet.ajax.js"></script>

	<script type="text/javascript">

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

		// marker

		L.marker([-7.5694869, 110.8298173]).addTo(map)
			.bindPopup("Hello world! <b>I am a popup").openPopup();

			// <b>BalaiKota Surakarta</b><br>Jl. Jend. Sudirman No.2 Kp. Baru, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57133
	</script>
