<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icon:') !!}
    {!! Form::text('icon', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
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
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('emergencyCodes.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
