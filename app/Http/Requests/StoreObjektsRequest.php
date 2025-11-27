<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreObjektsRequest extends FormRequest
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
            'description' => 'required|string',
            'finish_date' => 'required|date',
            'coordinates'=> 'required|string',
            'pictures' => 'extensions:jpg,png,jpeg,tiff|mimes:jpg,png,jpeg,tiff|file|nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Vajag nosaukumu!',
        ];
    }
}
