<style>
    .prog_back{
        height: 300px;
        border-radius: 20px;
        background-image: url("{{ asset('img/background_programme.png') }}");
        background-position: center;
        background-size: cover;
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 20px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .prog_back strong{
        color: white;
        font-size: 42px;
        font-weight: 300;
        width: 50%;
        font-weight: 500;
        font-family: 'Roboto Condensed', sans-serif;
        text-transform: uppercase;
        width: 50%;
        line-height: 37px;
    }

    .prog_back small{
        font-size: 14px;
        color: white;
        margin-top: 20px;
        font-weight: 300;
    }

    .prog_back div{
        margin: 0;
        display: flex;
        flex-direction: row;
    }

    .prog_back div div img{
        height: 13px;
    }

    .icon_name{
        background-color: white;
        color: #7FED72;
        border-radius: 12px;
        padding: 7px 15px;
        font-size: 14px;
        width: auto;
        bottom: 0;
        right: 0;
    }
</style>

@foreach($programmes->sortByDesc('updated_at') as $p)

        <div class="prog_back" onclick="goTo();">
            @if($p->utilisateur_id == 0)
                <a href="#"><span class="icon_name">easytrain</span></a>
                @else
            <a href="/profile/{{$p->utilisateur->id}}"><span class="icon_name">{!! $p->utilisateur->name !!}</span></a>
            @endif
            <strong>{{ $p->nom }}</strong>
            <small><b>Durée : </b>{{ $p->durée }} @if($p->durée > 1)semaines @else semaine @endif</small>
            <div style="display: flex; flex-direction: column">
            <h style="color: white; font-size: 14px; margin-bottom: 3px">Difficulté </h>
            @if($p->niveau == 1)<div><img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff2.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff2.png') }}" alt=""></div>@endif
            @if($p->niveau == 2)<div><img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff2.png') }}" alt=""></div>@endif
            @if($p->niveau == 3)<div><img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff.png') }}" alt=""></div>@endif

            </div>
        </div>

    <script>
        function goTo(){
            window.location = '/programmes/{{ $p->id }}';
        }
    </script>
@endforeach