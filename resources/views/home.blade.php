@extends('layout')

@section('title', 'All Students')

@section('content')

<div class="mb-3">
    <a href="{{ route('students.create') }}" class="btn btn-info text-white">
        + Add Student
    </a>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>DOB</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->father_name }}</td>
            <td>{{ $student->gender }}</td>

            <td>
                @foreach($student->hobbies as $hobby)
                    {{ $hobby->name ?? $hobby->hobbies }},
                @endforeach
            </td>

            <td>{{ $student->dob }}</td>

            <td>
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">
                    View
                </a>
            </td>

            <td>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
            </td>

            <td>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection