@extends('adminlte::page')
@section('title', 'Hospitals')

@section('content_header')
     <h1>
            Hospitals
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Hospitals</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($hospitals, ['route' => ['hospitals.update', $hospitals->id], 'method' => 'patch']) !!}

                        @include('hospitals.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
