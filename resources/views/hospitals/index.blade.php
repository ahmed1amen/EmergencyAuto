@extends('adminlte::page')
@section('title', 'Hospitals')

@section('content_header')
        <h1>Hospitals</h1>
@stop

@section('content')
       <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('hospitals.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>

        {{-- Cards --}}
        <div class="card">
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

