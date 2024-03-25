/****************** LEAFLET MAP ******************/

//Initialize Leaflet Map
var map = L.map('search-map').setView([51.505, -0.09], 13.5);

// Leaflet Map Layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

