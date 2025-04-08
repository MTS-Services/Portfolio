<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'designation' => 'required|string|min:3|max:50',
            'address' => 'required|string|min:3|max:50',
            'start_date' => 'required|date',
            "description" => "nullable|string|min:3",
            'end_date' => 'nullable|date',

        ];
    }
}
