/****************** MENU ******************/
// var menu = document.querySelector('#menu-item');
// var searchHeader = document.querySelector('#search-header');

// // Search header
// menu.addEventListener('click', function() {
//     console.log('Menu clicked');
//     var nav = document.querySelector('.main-nav');
//     nav.classList.toggle('show');

//     // Adjust search header margin-top based on nav visibility
//     if (nav.classList.contains('show')) {
//         searchHeader.style.marginTop = '20rem'; // Adjust as needed
//     } else {
//         searchHeader.style.marginTop = '12rem'; // Adjust as needed
//     }
// });

/****************** FOOTER ******************/

// function toggleList(element) {
//     var ul = element.nextElementSibling;
//     ul.classList.toggle("show");

//     // Toggle "show" class in the parent element
//     var parent = element.parentElement;
//     parent.classList.toggle("show");

//     var plusIcon = element.querySelector(".fa-plus");
//     var minusIcon = element.querySelector(".fa-minus");

//     if (ul.classList.contains("show")) {
//         // Set the max-height of the ul to a large value to allow for transition
//         ul.style.maxHeight = ul.scrollHeight + "px";
//         plusIcon.style.display = "none";
//         minusIcon.style.display = "inline-block";
//     } else {
//         // Set the max-height of the ul to its scroll height to enable smooth transition
//         ul.style.maxHeight = ul.scrollHeight + "px";
//         plusIcon.style.display = "inline-block";
//         minusIcon.style.display = "none";
//         // After a short delay, set the max-height back to 0 for smooth collapse
//         setTimeout(function() {
//             ul.style.maxHeight = "0";
//         }, 50); // Adjust delay as needed
//     }
// }



/****************** LEAFLET MAP ******************/

// Initialize Leaflet Map
var map = L.map('main-map').setView([51.505, -0.09], 13.5);

// Leaflet Map Layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Leaflet Map Marker with default icon made bigger
var marker = L.marker([51.505, -0.09], {
    icon: L.icon({
        iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png', // Default marker icon URL
        iconSize: [25, 40] // Adjust size as needed
    })
}).addTo(map);

// Leaflet Map Popup
marker.bindPopup("<b>Vista Homes</b><br>Headquarters").openPopup();

// Disable Leaflet Map Scrolling
map.scrollWheelZoom.disable();
