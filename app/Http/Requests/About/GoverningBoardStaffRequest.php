<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class GoverningBoardStaffRequest extends FormRequest
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
            'name_en' => 'required | min:4',
            'name_am' => 'required | min:4',
            'name_ru' => 'required | min:4',
            'position_en' => 'required',
            'position_am' => 'required',
            'position_ru' => 'required',
            'biography' => 'required',
            'img' => 'required',
        ];
    }
}
