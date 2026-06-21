<div class="mb-3">
    {!! html()->label('Name:')->class('form-label') !!}
    {!! html()->text('name')->class('form-control') !!}
    {!! $errors->first('name','<label class="text-danger mt-2">:message</label>') !!}
</div>

<div class="mb-3">
    {!! html()->label('Father Name:')->class('form-label') !!}
    {!! html()->text('father_name')->class('form-control') !!}
    {!! $errors->first('father_name','<label class="text-danger mt-2">:message</label>') !!}
</div>

<div class="mb-3">
    {!! html()->label('DOB:')->class('form-label') !!}
    {!! html()->date('dob')->class('form-control') !!}
    {!! $errors->first('dob','<label class="text-danger mt-2">:message</label>') !!}
</div>

<div class="mb-3">
    {!! html()->label("Gender:")->class('form-label') !!}

    {!! html()->select('gender', [
            'male'   => 'Male',
            'female' => 'Female',
        ], old('gender',$student->gender ?? null))
        ->class('form-control')
        ->id('gender')
        ->attribute('aria-label', 'Select your gender identity')
    !!}
    {!! $errors->first('gender','<label class="text-danger mt-2">:message</label>') !!}

</div>
<div class="mb-3">
    {!! html()->label("Hobbies:")->class('form-label') !!}
{!! html()->select(
    'hobbies_id[]',
    $hobbies->pluck('name', 'id'),
    $student->hobbies->pluck('id')->toArray()
)->class('form-select')->multiple() !!}
    {!! $errors->first('hobbies_id', '<label class="text-danger mt-2">:message</label>') !!}
</div>