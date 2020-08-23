@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1> اكواد الطوارئ</h1>
@stop
<link rel="stylesheet" href="{{ asset('css/ecodes.css') }}">
@section('content')

    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">


            <div class="row">
                @foreach ($emergencycode as $code)
                    <div id="ecode" class="col-md-2 col-sm-2 m-1 text-center justify-content-center"
                         style="cursor: pointer; background-color:{{$code->color}};  ">
                        <h1><span class="badge badge-warning">{{$code->name}}</span></h1>
                        <i class="{{$code->icon}}"></i>
                        <h3>{{$code->title}}</h3>
                        <p>{{$code->description}}</p>
                        <div class="row justify-content-end">
                            <a class="btn btn-primary" href="#">
                                <i class="fas fa-volume-up"></i>
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

@stop
