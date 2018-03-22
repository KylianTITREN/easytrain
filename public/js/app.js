$(document).ready(function() {

    $('#search').submit(function (e) {
        e.preventDefault();
        if ($.support.pjax) {
            $.pjax({url: '/recherche/' + e.target.elements[0].value, container: '#pjax-container'})
        } else
            window.location.href = '/recherche/' + e.target.elements[0].value;
    });

});