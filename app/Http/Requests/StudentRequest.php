<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'name' => 'required|string|max:255',
        'father_name' => 'required|string|max:255',
        'dob' => 'required|date',
        'gender' => 'required|in:male,female',
        'hobbies_id' => 'required|array|min:1',
        'hobbies_id.*' => 'exists:hobbies,id',
        
    ];
}
}
