@extends('adminlte::page')
@section('title', 'Specialization')

@section('content_header')
     <h1>
            Specialization
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Specialization</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($specialization, ['route' => ['specializations.update', $specialization->id], 'method' => 'patch']) !!}

                        @include('specializations.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
