@extends('adminlte::page')
@section('title', 'Settings')

@section('content_header')
    <h1>Setting</h1>
@stop



@section('content')

    <div class="row justify-content-center">
        <a class="btn btn-success btn-lg mb-3"  href="{{ route('settings.create') }}">
            <i class="fas fa-2x fa-plus-circle"></i>
        </a>


     <div class="card card-primary col-12">
            <div class="card-header">
                <h3 class="card-title">Setting</h3>
            </div>


              <div class="card-body">

                 <form >
                    @include('settings.show_fields')
                    <a href="{{ route('settings.index') }}" class="btn btn-warning"><i class="fas fa-backward" style="cursor: pointer;"></i>Back</a>
                </form>


            </div>



        </div>



    </div>
@endsection
