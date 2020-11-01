var menuIconNavigation = document.querySelector('.menu-icon-navigation-home');
var menuIconHeader = document.querySelector('.menu-icon-header-home');
var navigationMobile = document.querySelector('.navigation-home');

var iconeNav = document.querySelector('.menu-icon-image-nav-home');
var iconeHeader = document.querySelector('.menu-icon-image-header-home');

navigationMobile.dataset.closed = false;

menuIconNavigation.addEventListener('click', function () {
  navigationMobile.dataset.closed = true;
  menuIconNavigation.dataset.closed = true;

  iconeHeader.dataset.closed = false;
  menuIconHeader.dataset.closed = false;
});

menuIconHeader.addEventListener('click', function() {
  navigationMobile.dataset.closed = false;
  menuIconNavigation.dataset.closed = false;

  iconeHeader.dataset.closed = true;
  menuIconHeader.dataset.closed = true;
});

