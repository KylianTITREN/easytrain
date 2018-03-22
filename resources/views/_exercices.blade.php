<ul>
    @foreach($exercices as $exo)
        <li><img src="{{$exo->photo}}" alt="" width="400"/><p>Nom : {{$exo->title}}</p></li>
    @endforeach
</ul>