@extends('adminlte::page')
@section('title', 'Emergencycodes')

@section('content_header')
    <h1>Emergencycode</h1>
@stop



@section('content')

    <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('emergencycodes.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Emergencycode</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('emergencycodes.show_fields')
                    <a href="{{ route('emergencycodes.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
