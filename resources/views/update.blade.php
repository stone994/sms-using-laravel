@extends('layout')

@section('title')
    Update User
@endsection

@section('content')
    <form action="{{ route('students.update',$students->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id" >Id</label>
            <input type="text" name="id" value="{{ $students->id }}" class="form-control" placeholder="Id">
        </div>
        <div class="mb-3">
            <label for="name" > Name</label>
            <input type="text" name="name" value="{{ $students->name }}" class="form-control" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="father_name">Father Name</label>
            <input type="text" name="father_name" value="{{ $students->father_name }}" class="form-control" placeholder="Enter Father Name">
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" aria-label="Select your gender identity" type="text"  class="form-control" value="{{ $students->gender }}" placeholder="Enter Gender">

    <option value="male">Male</option>
    <option value="female">Female</option>
    
</select>
        </div>
        <div class="mb-3">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" value="{{ $students->dob }}" class="form-control">     
        </div>
        <button type="submit" class="btn btn-info text-white">Save</button>

    </form>
@endsection