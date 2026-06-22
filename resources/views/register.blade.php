@extends('layout')
@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-7 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                   {!! html()->form('POST', route('registerSave'))->open() !!}
                    @csrf 
                    
<div class="mb-3">
    {!! html()->label('Name:')->class('form-label') !!}
    {!! html()->text('name')->class('form-control') !!}
    {!! $errors->first('name','<label class="text-danger mt-2">:message</label>') !!}
</div>

<div class="mb-3">
    {!! html()->label('Email:')->class('form-label') !!}
    {!! html()->text('email')->class('form-control') !!}
    {!! $errors->first('email','<label class="text-danger mt-2">:message</label>') !!}
</div>

<div class="mb-3">
    {!! html()->label('Password:')->class('form-label') !!}
    {!! html()->password('password')->class('form-control') !!}
    {!! $errors->first('password','<label class="text-danger mt-2">:message</label>') !!}
</div>

<div class="mb-3">
    {!! html()->label('Confirm Password:')->class('form-label') !!}
    {!! html()->password('password_confirmation')->class('form-control') !!}
    {!! $errors->first('password_confirmation','<label class="text-danger mt-2">:message</label>') !!}
</div>
<button type="submit" class="btn btn-primary">Register</button>
<a href="/" class="btn btn-secondary">Back</a>

    {!! html()->form()->close() !!}

                </div>


            </div>
            
        </div>
    </div>
</div>
@endsection