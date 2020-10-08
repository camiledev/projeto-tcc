var menuIconNavigation = document.querySelector('.menu-icon-navigation');
var menuIconHeader = document.querySelector('.menu-icon-header');
var navigationMobile = document.querySelector('.menu__mobile');

var iconeNav = document.querySelector('.menu-icon-image-nav');
var iconeHeader = document.querySelector('.menu-icon-image-header');

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
