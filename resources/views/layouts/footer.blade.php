<footer id="pjax-container">

    @include('_script')

    <style>
        .icon-spec:focus{
            outline:none;
            border: none;
            background: none;
        }
    </style>

    <div class="footer-container">
        <div class="footer-menu_1">
            <a href="{{ url('/accueil') }}" data-pjax><img src="{{ asset('icones/icones/home.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_2">
            <a href="{{ url('/program') }}"><img src="{{ asset('icones/icones/program.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_3">
            <a href="{{ url('/nouvelle') }}"><img src="{{ asset('icones/icones/plus.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_4">
            <a href="{{ url('/timer') }}" data-pjax><img src="{{ asset('icones/icones/notification.png') }}" alt=""></a>
        </div>

        <div class="footer-menu_5">
            <a href="{{url ('/profile/'.Auth::user()->id)}}" data-pjax class="icon-spec"><img src="{{ asset('icones/icones/profil.png') }}" alt=""></a>
        </div>
    </div>
</footer>