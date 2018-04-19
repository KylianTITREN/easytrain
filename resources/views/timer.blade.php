@extends('layouts.head')

<?php

$title = 'timer';
$icons = 'times';

?>
@section('content')

    <style>
        body {
            text-align: center;
            display: flex;
            justify-content: space-around;
            height: 100vh;
            flex-direction: column;
            background: #7dda74;
            color: #fff;
            font-family: 'cocogoose', monospace;
        }

        .goBack{
            background-color: white;
            border-radius: 50%;
            top:20px;
            right: 20px!important;
            left: inherit!important;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h1 {
            font-size: 52px;
            margin-bottom: 40px;
        }

        #timer {
            font-size: 60px;
            margin-bottom: 20px;
        }

        #start{
            background-color: white;
            color: #7dda74;
            border: 1px solid #fff;
        }

        button {
            padding: 10px 30px;
            background: none;
            border: 1px solid #fff;
            color: #fff;
            border-radius: 8px;
            font-size: 16px;
            margin: 0 5px;
            outline: none;
            cursor: pointer;
        }

        button:hover{
            border: 1px solid #7dda74;
            color: #7dda74;
            background: #fff;
        }

        #stop:hover{
            background: #FF7373;
            color: white;
        }
    </style>

    <span class="goBack">
        <a href="{{ URL::previous() }}" data-pjax><i class="fa fa-{{ $icons }}" aria-hidden="true" style="color:#7dda74; font-size: 30px"></i></a>
        </span>

    <h1>chrono</h1>
    <div id="timer">00:00:</br>00</div>
    <div>
        <button id="start">GO !</button>
        <button id="reset">Reset</button>
        <button id="stop">Stop</button>
    </div>

    <script>
        var watch = (function(){
            var timer = document.getElementById("timer");
            var stop = document.getElementById("stop");
            var reset = document.getElementById("reset");
            var time = "00:00:00"
            var milliseconds = 0;
            var seconds = 0;
            var minutes = 0;
            var t;

            timer.textContent = time;

            function buildTimer () {
                milliseconds++;
                if (milliseconds >=100) {
                    milliseconds = 0;
                    seconds++;
                    if (seconds >= 60) {
                        milliseconds = 0;
                        seconds = 0;
                        minutes++;
                        if (minutes >= 60) {
                            minutes = 0;
                            seconds = 0;
                            milliseconds = 0;
                        }
                    }
                }
                timer.textContent = (minutes < 10 ? "0" + minutes.toString(): minutes) + ":" + (seconds < 10 ? "0" + seconds.toString(): seconds) + ":" + (milliseconds < 10 ? "0" + milliseconds.toString(): milliseconds);
            }
            function stopTimer () {
                stop.addEventListener("click", function(){
                    clearTimeout(t);
                })
            }
            function startTimer () {
                start.addEventListener("click", function(){
                    clearTimeout(t);
                    t = setInterval(buildTimer,1);
                });
            }
            function resetTimer () {
                reset.addEventListener("click", function(){
                    timer.textContent = time;
                    milliseconds = 0; seconds = 0; minutes = 0;
                });
            }
            return {
                start: startTimer(),
                stop: stopTimer(),
                reset: resetTimer()
            };
        })()
    </script>

@endsection