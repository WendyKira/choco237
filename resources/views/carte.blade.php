<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Carte de Yaoundé 6 avec OpenStreetMap et pharmacies</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
      #map {
        width:1500px;
        height: 1500px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
      // Initialisation de la carte
      var map = L.map('map').setView([3.8398, 11.4773], 15); // Yaoundé 6

      // Ajout de la couche OpenStreetMap
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
        subdomains: ['a', 'b', 'c']
      }).addTo(map);

      // Marquage de la position
      var marker = L.marker([3.8667, 11.5167]).addTo(map); // Yaoundé 6
      marker.bindPopup('Yaoundé 6');

      // Ajout des pharmacies
      var pharmacies = [
        {
          name: 'Pharmacie des 7 collines',
          lat: 3.8662,
          lon: 11.4960
        },
        {
          name: 'Pharmacie de la foi',
          lat: 3.8675,
          lon: 11.4795
        },
        {
          name: 'Pharmacie de la vie',
          lat: 3.8714,
          lon: 11.5043
        },
        {
          name: 'Pharmacie etoile',
          lat: 3.8722,
          lon: 11.5000
        },
        {
          name: 'Pharmacie Well',
          lat: 3.8375,
          lon: 11.4852
        },
        {
          name: 'Pharmacie Principale ',
          lat: 3.8562,
          lon: 11.4919
        },
        {
          name: 'Pharmacie Lla jouvence',
          lat: 3.8353,
          lon: 11.4847
        },
        {
          name: 'Pharmacie blue',
          lat: 3.8480,
          lon: 11.5020
        },
      ];

      pharmacies.forEach(function(pharmacy) {
        var greenIcon = L.icon({
          iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
          iconSize: [25, 41],
          iconAnchor: [12, 41],
          popupAnchor: [1, -34],
          shadowSize: [41, 41]
        });
        var marker = L.marker([pharmacy.lat, pharmacy.lon], {icon: greenIcon}).addTo(map);
        marker.bindPopup(pharmacy.name);
      });
    </script>
  </body>
</html>