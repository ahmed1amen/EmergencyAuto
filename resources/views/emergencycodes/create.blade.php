@extends('adminlte::page')
@section('title', 'Emergencycodes')

@section('content_header')
        <h1>    Emergencycode</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Emergencycode
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Emergencycode</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'emergencycodes.store']) !!}

                        @include('emergencycodes.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
