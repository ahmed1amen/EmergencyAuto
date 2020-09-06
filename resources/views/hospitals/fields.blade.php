<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Clinicalcapacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinicalCapacity', 'Clinicalcapacity:') !!}

    {!! Form::number('clinicalCapacity', null, ['class' => 'form-control','min' => 1]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('hospitals.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
