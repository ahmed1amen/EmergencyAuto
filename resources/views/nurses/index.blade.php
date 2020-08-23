@extends('adminlte::page')
@section('title', 'Nurses')

@section('content_header')
        <h1>Nurses</h1>
@stop

@section('content')
       <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('nurses.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>

        {{-- Cards --}}
        <div class="card col-12">
            <div class="card-header">
                <h3 class="card-title">Nurses</h3>
            </div>
            <div class="card-body card-body table-responsive p-0">
                @include('flash::message')
               @include('nurses.table')

                <div class="text-center">
                    
                </div>
            </div>
        </div>
    </div>


@endsection

