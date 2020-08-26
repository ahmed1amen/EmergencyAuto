@extends('adminlte::page')
@section('title', 'Hospitals')

@section('content_header')
        <h1>Hospitals</h1>
@stop

@section('content')

        {{-- Cards --}}
        <div class="card col-11">
            <div class="card-header">
                <h3 class="card-title">Hospitals</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('hospitals.table')

                <div class="text-center">
                    
                </div>
            </div>
        </div>
    </div>


@endsection

