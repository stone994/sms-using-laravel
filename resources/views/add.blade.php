<x-app-layout>
    {!! html()->form('POST', route('students.store'))->open() !!}
@csrf
    @include('form')

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </div>

    {!! html()->form()->close() !!}
</x-app-layout>