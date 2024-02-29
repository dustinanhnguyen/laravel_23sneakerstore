<?php

namespace App\Http\Requests\Manufacturer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => [
                'bail',
                'required',
                'string',
                'unique:App\Models\Manufacturer,name'
            ],
            'short_name' => [
                'bail',
                'required',
            ],
            'image' => [
                'bail',
                'required',
            ],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Ten nha san xuat',
            'short_name' => 'Ki hieu nsx',
            'image' => 'Anh nsx'
        ];
    }

    public function messages(): array
    {
        return [
            'name' => [
                'required' => ':attribute khong duoc de trong',
                'string' => ':attribute phai la chuoi',
                'unique' => ':attribute da ton tai',
            ],
            'short_name' => [
                'required' => ':attribute khong duoc de trong'
            ],
            'image' => [
                'required' => ':attribute khong duoc de trong'
            ],
        ];
    }
}
