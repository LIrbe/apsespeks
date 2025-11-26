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
        return false;
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
            'date' => ['required', Rule::date()->todayOrAfter(),],
            'pictures' => 'extensions:jpg,png,jpeg,tiff|mimes:jpg,png,jpeg,tiff|file|nullable',
        ];

        /*foreach ($request->file('pictures') as $file) {
        $file->store('uploads');
    }*/
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Vajag nosaukumu!',
        ];
    }
}
