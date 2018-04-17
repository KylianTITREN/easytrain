<style>
    .select-muscle{
        background: linear-gradient(#64bb5a, #7dda74);
        margin: 5px 0;
        font-size: 14px;
        border: none;
        color: white;
        padding: 15px;
        border-radius: 6px;
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
        cursor: pointer;
        display: block;
    }
</style>

@foreach($muscle as $m)
    <a class="select-muscle" href="/exercices/{{$m->id}}" data-pjax>{{$m->nom}}</a>
@endforeach