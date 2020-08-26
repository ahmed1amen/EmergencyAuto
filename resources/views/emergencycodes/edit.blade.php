@extends('adminlte::page')
@section('title', 'Emergencycode')

@section('content_header')
     <h1>
            Emergencycode
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Emergencycode</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($emergencycode, ['route' => ['emergencycodes.update', $emergencycode->id], 'method' => 'patch']) !!}

                        @include('emergencycodes.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
