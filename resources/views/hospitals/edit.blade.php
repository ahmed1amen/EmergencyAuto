@extends('adminlte::page')
@section('title', 'Hospital')

@section('content_header')
     <h1>
            Hospital
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Hospital</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($hospital, ['route' => ['hospitals.update', $hospital->id], 'method' => 'patch']) !!}

                        @include('hospitals.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
