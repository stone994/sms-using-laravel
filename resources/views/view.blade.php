@extends('layout')

@section('title')

View User
    
@endsection
@section('content')
    <table class="table table-striped table-bordered">
        <tr>
            <th>Id:</th>
            <td>{{ $students->id }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $students->name }}</td>
        </tr>
        <tr>
            <th>Father Name:</th>
            <td>{{ $students->father_name }}</td>
        </tr>
        <tr>
            <th>Dob:</th>
            <td>{{ $students->dob }}</td>
        </tr>
    </table>
    <a href="{{ route('students.index') }}" class="btn btn-danger">Back</a>
@endsection