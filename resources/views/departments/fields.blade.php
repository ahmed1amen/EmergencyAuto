<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Numberofbeds Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numberOfBeds', 'Numberofbeds:') !!}
    {!! Form::text('numberOfBeds', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Alarmsound Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alarmSound', 'Alarmsound:') !!}
    {!! Form::text('alarmSound', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Hospital Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hospital_id', 'Hospital Id:') !!}
    {!! Form::number('hospital_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('departments.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
