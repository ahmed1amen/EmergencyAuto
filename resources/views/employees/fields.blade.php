

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('employees.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
