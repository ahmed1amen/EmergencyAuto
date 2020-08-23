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


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Nurses</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('nurses.show_fields')
                    <a href="{{ route('nurses.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
