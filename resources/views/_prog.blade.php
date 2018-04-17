<style>
    .prog_back{
        height: 300px;
        border-radius: 20px;
        background: linear-gradient(#64bb5a, #7dda74);
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 20px;
        margin-bottom: 40px;
        cursor: pointer;
    }

    .prog_back strong{
        color: white;
        font-size: 42px;
        font-weight: 300;
        width: 50%;
    }

    .prog_back small{
        font-size: 18px;
        color: white;
        margin-top: 20px;
    }

    .prog_back div{
        margin: 0;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .prog_back div div img{
        width: 30px;
        height: 20px;
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

@foreach($programmes as $p)

    <a href="/programmes/{{$p->id}}" style="display: flex; flex-direction: column">

        <div class="prog_back">
            <strong>{{ $p->nom }}</strong>
            <small><b>Durée :</b> <br>{{ $p->durée }} @if($p->durée > 1)semaines @else semaine @endif</small>
            <div>

            @if($p->niveau == 1)<div><img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff2.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff2.png') }}" alt=""></div>@endif
            @if($p->niveau == 2)<div><img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff2.png') }}" alt=""></div>@endif
            @if($p->niveau == 3)<div><img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff.png') }}" alt="">&nbsp;<img src="{{ asset('img/diff.png') }}" alt=""></div>@endif
                <a href="/profile/{{$p->utilisateur->id}}"><span class="icon_name">{!! $p->utilisateur->name !!}</span></a>

            </div>
        </div>

    </a>
@endforeach