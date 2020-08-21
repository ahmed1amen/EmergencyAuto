@extends('adminlte::page')
@section('title', 'Department')

@section('content_header')
     <h1>
            Department
        </h1>
@stop

@section('content')

    <div class="row justify-content-center">
       @include('adminlte-templates::common.errors')
        <div class="card box-primary col-12">
            <div class="card-header text-right">
                   <h3 class="card-title">Department</h3>

               </div>
           <div class="card-body">

                   {!! Form::model($department, ['route' => ['departments.update', $department->id], 'method' => 'patch']) !!}

                        @include('departments.fields')

                   {!! Form::close() !!}

           </div>
       </div>
   </div>
@endsection
