<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Special Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('special_id', 'Special Id:') !!}
    {!! Form::number('special_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('doctors.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
