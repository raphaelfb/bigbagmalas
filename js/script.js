var map;
$(document).ready(function(){
  $('.bxslider').bxSlider({
    mode: 'fade',
    auto: true,
    pause: 5000,
    speed: 1000,
    controls: false
  });

  map = new GMaps({
    el: '#map',
    lat: -22.95128,
    lng: -43.246679,
    zoom: 11,
  });
  
  map.addMarker({
    lat: -22.94804,
    lng: -43.182893,
    title: 'BigBag Botafogo',
    infoWindow: {
      content: '<p>Loja de Botafogo</p>'
    }
  });
  map.addMarker({
    lat: -22.984076,
    lng: -43.202033,
    title: 'BigBag Ipanema',
    infoWindow: {
      content: '<p>Loja de Ipanema</p>'
    }
  });
  map.addMarker({
    lat: -22.906618,
    lng: -43.179838,
    title: 'BigBag Centro',
    infoWindow: {
      content: '<p>Loja do Centro</p>'
    }
  });

  $('.menu').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
  });
});
