<!-- Sms Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sms_username', 'Sms Username:') !!}
    {!! Form::text('sms_username', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sms Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sms_password', 'Sms Password:') !!}
    {!! Form::text('sms_password', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sms Template Field -->
    {!! Form::label('sms_template', 'Sms Template:') !!}
<div class="form-group col-sm-6">
    {!! Form::textarea('sms_template', null, ['id' => 'sms_template', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none']) !!}
</div>



<!-- Twilio Account Sid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twilio_account_sid', 'Twilio Account Sid:') !!}
    {!! Form::text('twilio_account_sid', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Twilio Auth Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twilio_auth_token', 'Twilio Auth Token:') !!}
    {!! Form::text('twilio_auth_token', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Twilio Twilio Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twilio_twilio_phone_number', 'Twilio Twilio Phone Number:') !!}
    {!! Form::text('twilio_twilio_phone_number', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::  submit(__('Buttons.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('settings.index') }}" class="btn btn-default">{{ __('Buttons.Cancel') }}</a>
</div>
