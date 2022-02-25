<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'possition_en' => 'max:255',
            'possition_am' => 'max:255',
            'possition_ru' => 'max:255',
            'name_en' => 'max:255',
            'name_am' => 'max:255',
            'name_ru' => 'max:255',
            'mail' =>'max:255',
        ];
    }
}
