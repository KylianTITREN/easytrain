<ul>
    @foreach($exercices as $exo)
        <li><p>Nom : {{$exo->nom}}</p></li>
    @endforeach
</ul>