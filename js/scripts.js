$(document).ready(function() {

//menu responsive
  $('.burger').sidr({
    source:   '#main-nav',
    displace: false,
//menu que l on nomme
    name: 'sidr-main',
  });
//on cible le body pour que le click ferme le menu burger
  $('body').click(function(){
  $.sidr('close','sidr-main');
});

//carousel
  $(".owl-carousel").owlCarousel({
  items:      1,
  loop:       true,
  nav:        true,
  navText:    ['Précédent', 'Suivant'],
  dots:       false,
   });
});
