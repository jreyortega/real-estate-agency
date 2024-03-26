var menu = document.querySelector('#menu-item');
var searchHeader = document.querySelector('#search-header');

// Search header
menu.addEventListener('click', function() {
    console.log('Menu clicked');
    var nav = document.querySelector('.main-nav');
    nav.classList.toggle('show');
    nav.style.transition = 'opacity 0.3s ease-in-out';

    // Adjust search header margin-top based on nav visibility
    if (nav.classList.contains('show')) {
        searchHeader.style.marginTop = '20rem';
    } else {
        searchHeader.style.marginTop = '12rem';
    }
});

// Event listener for resizing the window
window.addEventListener('resize', function() {
    var nav = document.querySelector('.main-nav');
    nav.style.transition = 'none';
});
