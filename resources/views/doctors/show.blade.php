@extends('adminlte::page')
@section('title', 'Doctors')

@section('content_header')
    <h1>Doctors</h1>
@stop



@section('content')

    <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('doctors.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Doctors</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('doctors.show_fields')
                    <a href="{{ route('doctors.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
