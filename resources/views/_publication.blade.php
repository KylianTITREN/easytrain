<style>
    .publi{
        display: flex;
        flex-direction: column;
        overflow: hidden;
        padding: 13px 0;
        background-color: white;
        margin: 20px 10px;
        border-radius: 15px;
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
    }

    .publi .publi_img{
        width: 100%;
        height: 250px;
        background-size: cover;
        background-position: center;
    }

    .publi_desc{
        padding-left: 25px;
        padding-right: 25px;
        font-size: 18px;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .publi h5{
        margin-left: 10px;
    }

    .like
    {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        padding-right: 35px;
    }

    .like a
    {
        margin-right: 3px;
    }

    .like h
    {
        margin-right: 6px;
    }
</style>

@foreach($publication->sortByDesc('updated_at') as $p)

    @if(empty($p->photo))

        <div class="publi">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 4px 17px;">
                <a href="{{url('/profile/'.$p->utilisateur->id)}}" style="display: flex; align-items: center" data-pjax>
                    <div style='width: 44px; height: 44px; border-radius: 16px; background-image: url("/uploads/avatars/{{ $p->utilisateur->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
                    <div style="display: flex; flex-direction: column; padding-left: 10px;">
                        <h5 style="color: #363636; margin: 0; font-size: 15px">{{$p->utilisateur->name}}</h5>
                        <h style="color: #7E7E7E; font-size: 12px;">a publié un noveau programme</h>
                    </div>
                </a>
                @if($p->utilisateur->id != Auth::id())

                @else
                    <a href="{{ url('/deletepubli/'.$p->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; "><img
                                src="{{ asset('icones/icones/delete.png') }}" alt=""></a>
                @endif
            </div>

            <div class="publi_desc">
                <small style="font-family: 'Roboto'; font-weight: 100; color: #454545; font-size: 25px;">{{$p->title}}</small>
                <br>
            </div>
            <div class="like">
                <h style="font-weight: 100;">{{ $p->likesCount }}</h>

                <a href="/liker/{{ $p->id }}" data-pjax-toggle id="like"><i style="color:#7FED72; font-size: 18px;" class="fa fa-heart"></i></a>

                <a href="/unliker/{{ $p->id }}" data-pjax-toggle id="unlike"><img style="height: 16px; margin-top: 1px;" src="{{ asset('icones/icones/like.png') }}" alt=""></a>
            </div>
        </div>

    @else
    
        <div class="publi">
            <div style="background-color: white; width: 100%; display: flex; align-items: center; padding: 4px 10px;">
                <a href="{{url('/profile/'.$p->utilisateur->id)}}" style="display: flex; align-items: center" data-pjax>
                    <div style='width: 44px; height: 44px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ $p->utilisateur->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
                    <h5>{{$p->utilisateur->name}}</h5>
                </a>
            </div>
            <div class="publi_img" style="background-image: url('/uploads/publi_photo/{{$p->photo}}');"></div>
            <div class="publi_desc">
                <small>{{$p->title}}</small>
                <br>
                @if($p->utilisateur->id != Auth::id())

                @else
                    <a href="{{ url('/deletepubli/'.$p->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; "><img
                                src="{{ asset('icones/icones/delete.png') }}" alt=""></a>
                @endif
            </div>
        </div>

    @endif
@endforeach