@extends('layout')

@section('title')
    Add User
@endsection

@section('content')
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        
        <div class="mb-3">
            <label for="name">User Name</label>
            <input type="text" name="name" class="form-control" vvalue="{{ old('name') }}" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="father_name">Father Name</label>
            <input type="text" name="father_name" class="form-control" value="{{ old('father_name') }}" placeholder="Enter Father Name">
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" aria-label="Select your gender identity" type="text"  class="form-control" value="{{ old('gender') }}" placeholder="Enter Gender">

    <option value="male">Male</option>
    <option value="female">Female</option>
    
</select>
        </div>
        <div class="mb-3">
            <label for="hobbies">Hobbies</label></br>
            <input type="checkbox" id="hobbies" name="hobbies[]" value="cricket">
            <label for="hobbies"> Cricket</label><br>
            <input type="checkbox" id="hobbies" name="hobbies[]" value="reading">
            <label for="hobbies"> Reading</label><br>
            <input type="checkbox" id="hobbies" name="hobbies[]" value="gardening">
            <label for="hobbies"> Gardening</label><br>
            <input type="checkbox" id="hobbies" name="hobbies[]" value="multiple hobbies">
            <label for="hobbies"> Multiple Hobbies</label><br>
        </div>
        <div class="mb-3">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" placeholder="Enter Dob">
        </div>
<button type="submit" class="btn btn-info text-white">Save</button>
    </form>
@endsection