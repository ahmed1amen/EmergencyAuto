@extends('adminlte::page')
@section('title', 'Doctors')

@section('content_header')
        <h1>    Doctor</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Doctor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Doctor</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'doctors.store']) !!}

                        @include('doctors.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
