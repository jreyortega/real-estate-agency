var menu = document.querySelector('#menu-item');
var searchHeader = document.querySelector('#search-header');

// Search header
menu.addEventListener('click', function() {
    console.log('Menu clicked');
    var nav = document.querySelector('.main-nav');
    nav.classList.toggle('show');

    // Adjust search header margin-top based on nav visibility
    if (nav.classList.contains('show')) {
        searchHeader.style.marginTop = '20rem'; // Adjust as needed
    } else {
        searchHeader.style.marginTop = '12rem'; // Adjust as needed
    }
});