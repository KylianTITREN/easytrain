<style>
    .publi{
        width: 100%;
        background-color: white;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        border-top: .5px solid rgba(0,0,0,0.2);
        border-bottom: .5px solid rgba(0,0,0,0.2);
    }

    .publi .publi_img{
        width: 100%;
        height: 250px;
        background-size: cover;
        background-position: center;
    }

    .publi_desc{
        padding: 20px;
        font-size: 18px;
    }

    .publi h5{
        margin-left: 10px;
    }
</style>

@foreach($publication->sortByDesc('updated_at') as $p)

    @if(empty($p->photo))

        <div class="publi">
            <div style="background-color: white; width: 100%; display: flex; align-items: center; padding: 4px 10px;">
                <a href="{{url('/profile/'.$p->utilisateur->id)}}" style="display: flex; align-items: center" data-pjax>
                    <div style='width: 44px; height: 44px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ $p->utilisateur->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div>
                    <h5>{{$p->utilisateur->name}}</h5>
                </a>
            </div>
            <div class="publi_desc">
                <small>{{$p->title}}</small>
                <br>
                @if($p->utilisateur->id != Auth::id())

                @else
                    <a href="{{ url('/deletepubli/'.$p->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; ">Supprimer</a>
                @endif
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
                    <a href="{{ url('/deletepubli/'.$p->id) }}" data-pjax-toggle style="font-size: 12px; color: red; opacity: 0.2; ">Supprimer</a>
                @endif
            </div>
        </div>

    @endif
@endforeach