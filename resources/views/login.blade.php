@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-7 mt-5">

            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                </div>

                <div class="card-body">

                    {!! html()->form('POST', route('loginMatch'))->open() !!}
@csrf

                    <div class="mb-3">
                        {!! html()->label('Email:')->class('form-label') !!}
                        {!! html()->email('email')->class('form-control') !!}
                        {!! $errors->first('email','<label class="text-danger mt-2">:message</label>') !!}
                    </div>

                    <div class="mb-3">
                        {!! html()->label('Password:')->class('form-label') !!}
                        {!! html()->password('password')->class('form-control') !!}
                        {!! $errors->first('password','<label class="text-danger mt-2">:message</label>') !!}
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                    <a href="/" class="btn btn-secondary">Back</a>

                    {!! html()->form()->close() !!}

                </div>
            </div>

        </div>
    </div>
</div>

@endsection