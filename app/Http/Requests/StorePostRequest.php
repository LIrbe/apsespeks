<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'date' => ['required', 'date', 'after:' . now()],
            'pictures' => 'extensions:jpg,png,jpeg,tiff|mimes:jpg,png,jpeg,tiff|file|nullable|max:10240',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Vajag nosaukumu!',
            'content.required'=> 'Vajag tekstu!',
            'date.required'=> 'Vajag publicēšanas datumu',
        ];
    }
}
