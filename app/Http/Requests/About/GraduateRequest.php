<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class GraduateRequest extends FormRequest
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
            'name_en' => 'required|min:4',
            'name_am' => 'required|min:4',
            'name_ru' => 'required|min:4',
            'info_en' => 'required',
            'info_am' => 'required',
            'info_ru' => 'required',
            'position' => 'required',
        ];
    }
}
