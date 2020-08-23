@extends('adminlte::page')
@section('title', 'Managers')

@section('content_header')
     <h1>
            Managers
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Managers</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($managers, ['route' => ['managers.update', $managers->id], 'method' => 'patch']) !!}

                        @include('managers.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
