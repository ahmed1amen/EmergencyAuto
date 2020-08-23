@extends('adminlte::page')
@section('title', 'Doctors')

@section('content_header')
     <h1>
            Doctors
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Doctors</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($doctors, ['route' => ['doctors.update', $doctors->id], 'method' => 'patch']) !!}

                        @include('doctors.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
