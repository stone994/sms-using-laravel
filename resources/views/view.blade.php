@extends('layout')

@section('title')
    View User
@endsection

@section('content')

<table class="table table-striped table-bordered">
    <tr>
        <th>Id:</th>
        <td>{{ $student->id }}</td>
    </tr>

    <tr>
        <th>Name:</th>
        <td>{{ $student->name }}</td>
    </tr>

    <tr>
        <th>Father Name:</th>
        <td>{{ $student->father_name }}</td>
    </tr>

    <tr>
        <th>Gender:</th>
        <td>{{ $student->gender }}</td>
    </tr>

    <tr>
        <th>Hobbies:</th>
        <td>
            @foreach($student->hobbies as $hobbies)
                {{ $hobbies->name }} <br>
            @endforeach
        </td>
    </tr>

    <tr>
        <th>Dob:</th>
        <td>{{ $student->dob }}</td>
    </tr>
</table>

<a href="{{ route('students.index') }}" class="btn btn-danger">
    Back
</a>

@endsection