@extends('adminlte::page')
@section('title', 'Specialties')

@section('content_header')
     <h1>
            Specialties
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Specialties</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($specialties, ['route' => ['specialties.update', $specialties->id], 'method' => 'patch']) !!}

                        @include('specialties.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
