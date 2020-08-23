@extends('adminlte::page')
@section('title', 'Departments')

@section('content_header')
     <h1>
            Departments
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Departments</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($departments, ['route' => ['departments.update', $departments->id], 'method' => 'patch']) !!}

                        @include('departments.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
