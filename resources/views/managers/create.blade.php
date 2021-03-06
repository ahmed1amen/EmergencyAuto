@extends('adminlte::page')
@section('title', 'Managers')

@section('content_header')
        <h1>    Manager</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Manager
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Manager</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'managers.store']) !!}

                        @include('managers.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
