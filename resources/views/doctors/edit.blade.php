@extends('adminlte::page')
@section('title', 'Doctor')

@section('content_header')
     <h1>
            Doctor
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Doctor</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($doctor, ['route' => ['doctors.update', $doctor->id], 'method' => 'patch']) !!}

                        @include('doctors.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
