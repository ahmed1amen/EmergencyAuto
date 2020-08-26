@extends('adminlte::page')
@section('title', 'Specializations')

@section('content_header')
        <h1>Specializations</h1>
@stop

@section('content')

        {{-- Cards --}}
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">Specializations</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('specializations.table')

                <div class="text-center">
                    
                </div>
            </div>
        </div>
    </div>


@endsection

