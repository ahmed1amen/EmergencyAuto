@extends('adminlte::page')
@section('title', 'Departments')

@section('content_header')
        <h1>    Departments</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Departments
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Departments</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'departments.store']) !!}

                        @include('departments.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
