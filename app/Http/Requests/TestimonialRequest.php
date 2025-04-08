<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'designation' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3',
        ]
            +
            ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    public function store()
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }

    public function update()
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
