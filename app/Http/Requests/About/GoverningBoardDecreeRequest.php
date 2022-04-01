<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class GoverningBoardDecreeRequest extends FormRequest
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
            'file_name' => 'required|max:255',
            'info_am' => 'required',
            'year' => 'required|numeric',
        ];
    }
}
