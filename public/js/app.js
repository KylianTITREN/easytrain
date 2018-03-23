$(document).ready(function() {

    $('#search').submit(function (e) {
        e.preventDefault();
        window.location.href = '/recherche/' + e.target.elements[0].value;
    });

});

$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
    });
});