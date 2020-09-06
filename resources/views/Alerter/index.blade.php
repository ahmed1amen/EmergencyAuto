@extends('adminlte::page')
@section('title', 'Alerter')

@section('content_header')
    <h1>Alerter</h1>
@stop

@section('content')

    {{-- Cards --}}
    <div class="card col-11">
        <div class="card-header">
            <h3 class="card-title">Departments</h3>
        </div>
        <div class="card-body card-body table-responsive p-0">
            @include('flash::message')

            <div class="text-center">

            </div>
        </div>
    </div>



@endsection

