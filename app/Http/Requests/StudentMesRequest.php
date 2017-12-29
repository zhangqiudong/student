<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StudentMesRequest extends Request
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
            'phone'=>'required|digists:11',
            'pro_cess'=>'required',
            'email'=>'required|email',
        ];
    }
}
