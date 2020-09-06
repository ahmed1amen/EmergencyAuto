@extends('adminlte::page')
@section('title', 'Dashboard')

<link rel="stylesheet" href="{{ asset('css/ecodes.css') }}">
@section('content')
    <audio id="myAudio1">
        <source src="1.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <audio id="myAudio2">
        <source src="2.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div class="card">
        <div class="card-header bg-gray text-center">
            <h3> اكواد الطوارئ</h3>
        </div>
        <div class="card-body bg-gray-dark">

            <div class="row justify-content-center ">


                @foreach ($emergencycodes as $code)
           <div id="ecode" class="col-md-3 col-sm-6 col-xs-10 m-2 text-center"
                         style="cursor: pointer; background-color:{{$code->color}};">
                        <div class="text-dark">
                            <div class="row mr-auto mt-2 mb-2  justify-content-center">
                                <div class="col-6 rounded-lg bg-warning">
                                    <b>{{$code->name}}</b>
                                </div>
                            </div>

                            <i class="{{$code->icon}}"></i>
                            <h3>{{$code->title}}</h3>
                            <p>{{$code->description}}</p>
                        </div>


                        <div class="row justify-content-center">
                            <button class="btnalert btn btn-warning m-1" audioid="{{rand(1,2)}}">
                                <i class="fas fa-volume-up"></i>
                            </button>
                            <a class="btn btn-secondary m-1" href="{{route('emergencycodes.edit',$code->id)}}">
                                <i class=" fas fa-1x fa-edit"></i>

                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop


@section('css')

@stop

@section('js')
    <script>



        $(".btnalert").click(function ($e) {
            var x = document.getElementById("myAudio" +  $e.toElement.getAttribute('audioid'));

            x.pause();
            x.currentTime = 0;
            x.play();
        });


    </script>
@stop
