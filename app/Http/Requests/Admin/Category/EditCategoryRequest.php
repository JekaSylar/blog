<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditCategoryRequest extends FormRequest
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
            'title' => [
                'string',
                Rule::unique('categories')->ignore($this->category),
                'max:255'
            ],
            'keywords'  => [
                'nullable',
                'string',
                'max:255'
                ],
            'slug'  => [
                Rule::unique('categories')->ignore($this->category),
                'string',
                'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Є обов\'язковим.',
            'title.string' => 'Має бути рядком.',
            'title.unique' => 'Вже зайняте.',
            'title.max' => 'Не повинно бути більше 255 символів',
            'keywords.max' => 'Не повинно бути більше 255 символів',
            'keywords.string' => 'Має бути рядком.',
            'slug.max' => 'Не повинно бути більше 255 символів',
            'slug.string' => 'Має бути рядком.',
            'slug.unique' => 'Вже зайняте.',

        ];
    }


}
