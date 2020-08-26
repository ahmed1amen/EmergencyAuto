@extends('adminlte::page')
@section('title', 'Manager')

@section('content_header')
     <h1>
            Manager
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Manager</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($manager, ['route' => ['managers.update', $manager->id], 'method' => 'patch']) !!}

                        @include('managers.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
