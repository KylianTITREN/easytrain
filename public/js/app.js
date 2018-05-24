$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container');
$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#pjax-container', {push : false});

$(document).ready(function(){

        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 48.866667, lng: 2.333333},
          zoom: 17
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Localisation trouvée.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Erreur : Impossible de vous localiser' :
                              'Erreur: Votre navigateur n\'est pas compatible');
      }

    $('#search').submit(function(e){
        e.preventDefault();
        if ($.support.pjax) {
            $.pjax({url: '/recherche/'+e.target.elements[0].value, container: '#pjax-container'})
        }else {
            window.location.href = '/recherche/' + e.target.elements[0].value;
        }
    });

});

var swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
    },
});
