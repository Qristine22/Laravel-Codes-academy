<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class WorkersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_en' => 'required|min:255',
            'name_am' => 'required|min:255',
            'name_ru' => 'required|min:255',
            'biography_en' => 'required',
            'biography_am' => 'required',
            'biography_ru' => 'required',
        ];
    }
}