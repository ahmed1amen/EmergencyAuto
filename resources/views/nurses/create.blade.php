@extends('adminlte::page')
@section('title', 'Nurses')

@section('content_header')
        <h1>    Nurse</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Nurse
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Nurse</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'nurses.store']) !!}

                        @include('nurses.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
