@extends('adminlte::page')
@section('title', 'Nurse')

@section('content_header')
     <h1>
            Nurse
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Nurse</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($nurse, ['route' => ['nurses.update', $nurse->id], 'method' => 'patch']) !!}

                        @include('nurses.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
