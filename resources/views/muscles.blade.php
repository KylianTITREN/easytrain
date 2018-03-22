@extends('layouts.head')

<?php

$title = 'Exercices';
$icons = 'comments';

?>

<span class="goBack">
        <a href="{{ url('/program') }}"><i class="fa fa-angle-left" style="color:#7FED72;"></i></a>
    </span>

@section('content')

    <header>
        <h3>{{ $title }}</h3>
        <i class="fa fa-{{ $icons }}" aria-hidden="true"></i>
    </header>

    <?php

        for($i = 0; $i<sizeof($muscles); $i++){
            echo '<a href="/muscles/exercices/'.$muscles[$i]->id.'"><p>'.$muscles[$i] -> nom.'<p></a><br>';
        }

    ?>

@endsection

@extends('layouts.footer')