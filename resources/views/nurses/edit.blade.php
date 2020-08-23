@extends('adminlte::page')
@section('title', 'Nurses')

@section('content_header')
     <h1>
            Nurses
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Nurses</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($nurses, ['route' => ['nurses.update', $nurses->id], 'method' => 'patch']) !!}

                        @include('nurses.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
