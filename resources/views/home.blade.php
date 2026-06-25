<x-app-layout>
    <div class="row">
        <div class="mb-3">
            {{-- Add New Button sirf Admin ko dikhega --}}
            @role('admin')
                <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
            @endrole
        </div>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

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
                    {{-- Edit aur Delete ki headings sirf Admin ko dikhein --}}
                    @role('admin')
                        <th>Edit</th>
                        <th>Delete</th>
                    @endrole
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

                    {{-- View button sab ko dikhega (Admin aur Teacher dono ko) --}}
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">
                            View
                        </a>
                    </td>

                    {{-- Edit aur Delete ke buttons/forms sirf Admin ke liye --}}
                    @role('admin')
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
                    @endrole
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>