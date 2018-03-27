<footer id="pjax-container">
    <div class="footer-container">
        <div class="footer-menu_1">
            <a href="{{ url('/accueil') }}" data-pjax><img src="{{ asset('icones/icones/home.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_2">
            <a href="{{ url('/program') }}" data-pjax><img src="{{ asset('icones/icones/program.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_3">
            <a href="{{ url('/nouvelle') }}" data-pjax><img src="{{ asset('icones/icones/plus.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_4">
            <a href="#" data-pjax><img src="{{ asset('icones/icones/notification.png') }}" alt=""></a>
            <span>2</span>
        </div>

        <div class="footer-menu_5">
            <a href="{{url ('/profile/'.Auth::user()->id)}}" data-pjax><img src="{{ asset('icones/icones/profil.png') }}" alt=""></a>
        </div>
    </div>
</footer>