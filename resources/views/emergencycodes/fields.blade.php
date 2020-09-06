
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Icon Field -->
<div class="form-group col-sm-3">

    {!! Form::label('icon', 'Icon:') !!}
    <div class="row" style="flex-flow: row;">
        {!! Form::text('icon', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        <i id="iconview" class="{{$emergencycode->icon ?? ''}}"></i>
    </div>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-1">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::color('color', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Alarm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alarm', 'Alarm:') !!}
    {!! Form::file('alarm', ['class' => 'form-control']) !!}
</div>

<!-- Doctors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctors', 'Doctors') !!}

    <select id="doctors" class="js-example-basic-multiple col-sm-6" name="doctors[]" multiple="multiple">
        @foreach($doctors as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->user->name}}</option>
        @endforeach
    </select>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('emergencycodes.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>










@section('js')

    <script>

        $(document).ready(function() {


            var selected =@json(  $emergencycode->doctors->pluck('doctor_id'))+'';

            $.each(selected.split(","), function(i,e){
                $("#doctors option[value='" + e + "']").prop("selected", true);
            });



            $('.js-example-basic-multiple').select2();
        });
        $(document).ready(function(){
            $("#icon").keyup(function(){
               document.getElementById('iconview').setAttribute('class',this.value);

            });

        });



    </script>

@stop
