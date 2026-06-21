@extends('layout')

@section('title')
    Update User
@endsection

@section('content')
   {!! html()->modelForm($student,'PUT',route('students.update',$student->id))->open() !!}
   @csrf
@include('form')

<div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update Student</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        
        {!! html()->form()->close() !!}


   @endsection