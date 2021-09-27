<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FirstName', 'Firstname:') !!}
    {!! Form::text('FirstName', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Middlename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MiddleName', 'Middlename:') !!}
    {!! Form::text('MiddleName', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LastName', 'Lastname:') !!}
    {!! Form::text('LastName', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>