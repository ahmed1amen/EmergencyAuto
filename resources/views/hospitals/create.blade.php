@extends('adminlte::page')
@section('title', 'Hospitals')

@section('content_header')
        <h1>    Hospital</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Hospital
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Hospital</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'hospitals.store']) !!}

                        @include('hospitals.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
