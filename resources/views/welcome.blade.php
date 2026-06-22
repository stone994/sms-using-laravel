@extends('layout')

@section('title')
   Create Account
@endsection

@section('content')

<div class="d-flex gap-2">
<a href="{{ route('register') }}" class="btn btn-primary">
    Register
</a>        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
    </div>
    
@endsection