@foreach($publication->sortByDesc('updated_at') as $p)
<div class="publication publication-programme">
    <div class="publication-info">
        <div class="publication-info_avatar">
            <a href={{url('/profile/'.$p->utilisateur->id)}}><div style='width: 44px; height: 44px; border-radius: 16px; border: 4px solid #fafafa; background-image: url("/uploads/avatars/{{ $p->utilisateur->avatar }}"); background-size: cover; background-repeat: no-repeat;'></div></a>
        </div>
        <div class="publication-info_post">
            <a href={{url('/profile/'.$p->utilisateur->id)}}><h5>{{$p->utilisateur->name}}</h5></a>
            <h>a publié un nouveau programme</h>
        </div>
        <div class="publication-info_time">
            @if($p->utilisateur->id != Auth::id())

                @else
                    <a href="{{ url('/deletepubli/'.$p->id) }}" data-pjax-toggle>Supprimer</a>
            @endif
            <h><i class="fa fa-clock-o" aria-hidden="true"></i></h>
        </div>
    </div>

    <div class="publication-bloc">
        <div class="publication-content">
            <div class="publication-content_description">
                <h5>{{$p->title}}</h5>
            </div>
        </div>
    </div>

    <div class="publication-footer">
        <div class="publication-footer_like">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <h></h>
        </div>
        <div class="publication-footer_comment">
            <i class="fa fa-comment-o" aria-hidden="true"></i>
            <h></h>
        </div>
    </div>
</div>
@endforeach