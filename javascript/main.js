// Toggle arrow class and adjust height on click
let listElement = document.querySelectorAll('.menu-button-click');

listElement.forEach(listElement => {
    listElement.addEventListener('click', () => {
        listElement.classList.toggle('arrow'); // Al hacer click añade una clase arrow al objeto

        let height = 0;
        let menu = listElement.nextElementSibling; // accedo al elemento adyacente
        console.log(menu.scrollHeight);
        // console.log(section.scrollHeight);

        if (menu.clientHeight == "0") {
            height = menu.scrollHeight;
        }

        menu.style.height = height + "px";
    });
});

// Adjust height of .main-footer-section on click
var menuButtons = document.querySelectorAll('.menu-button-click');

menuButtons.forEach(menuButton => {
    menuButton.addEventListener('click', () => {
        // Obtener el elemento h1 dentro del menú haciendo clic
        // var h1Element = menuButton.querySelector('.menu-button-click');

        // Obtener la altura del elemento h1
        var h1Height = menuButton.clientHeight;
        // Obtener el elemento ul hermano del elemento h1
        var ulElement = menuButton.nextElementSibling;

        // Ajustar la altura del elemento .main-footer-section
        var sectionElement = menuButton.parentElement;
        sectionElement.style.height = h1Height + ulElement.clientHeight + 'px';
    });
});

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
