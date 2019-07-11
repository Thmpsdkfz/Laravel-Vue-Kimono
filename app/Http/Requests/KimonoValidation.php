<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KimonoValidation extends FormRequest
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
            'giBrand'=>'required|min:3',
            'giModel'=>'required|min:3',
            'giSize'=>'required|max:3',
            'giColor'=>'required|min:4',
            'giPrice'=>'required',
            'giHaveBag'=>'required'
        ];
    }
}
