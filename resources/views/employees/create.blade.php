@extends('adminlte::page')
@section('title', 'Employees')

@section('content_header')
        <h1>    Employees</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Employees
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Employees</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'employees.store']) !!}

                        @include('employees.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
