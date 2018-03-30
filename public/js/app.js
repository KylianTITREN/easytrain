$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container');
$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#pjax-container', {push : false});

$(document).on('submit', 'form[data-pjax]', function(event) {
    $.pjax.submit(e, '#pjax-container')
});

$('.homeForm').ready(function(){
    $
})

$(document).ready(function(){

    $('#search').submit(function(e){
        e.preventDefault();
        if ($.support.pjax) {
            $.pjax({url: '/recherche/'+e.target.elements[0].value, container: '#pjax-container'})
        }else {
            window.location.href = '/recherche/' + e.target.elements[0].value;
        }
    });

    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
    });

});

