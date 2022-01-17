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
            'name' => 'required|min:4',
            'position' => 'required',
            'year' => 'required|numeric|min:2000',
        ];
    }
}
