@extends('adminlte::page')
@section('title', 'Settings')

@section('content_header')
        <h1>    Setting</h1>
@stop

@section('content')
    <section class="content-header">
        <h1>
            Setting
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card box-primary">
        <div class="card-header">
                    <h3 class="card-title">Setting</h3>
                </div>
            <div class="card-body">
                    {!! Form::open(['route' => 'settings.store']) !!}

                        @include('settings.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
