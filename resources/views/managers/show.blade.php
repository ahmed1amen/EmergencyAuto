@extends('adminlte::page')
@section('title', 'Managers')

@section('content_header')
    <h1>Manager</h1>
@stop



@section('content')

    <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('managers.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Manager</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('managers.show_fields')
                    <a href="{{ route('managers.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
