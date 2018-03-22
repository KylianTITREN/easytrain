<footer>
    <div class="footer-container">
        <div class="footer-menu_1">
            <a href="{{ url('/accueil') }}"><img src="{{ asset('icones/icones/home.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_2">
            <a href="{{ url('/program') }}"><img src="{{ asset('icones/icones/program.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_3">
            <a href="#"><img src="{{ asset('icones/icones/plus.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_4">
            <a href="#"><img src="{{ asset('icones/icones/notification.png') }}" alt=""></a>
            <span>2</span>
        </div>

        <div class="footer-menu_5">
            <a href="{{url ('/profile/'.Auth::user()->id)}}"><img src="{{ asset('icones/icones/profil.png') }}" alt=""></a>
        </div>
    </div>
</footer>