<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertAuthorRuquest extends Request
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
            'name' => 'required',
            'abstract' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '作者名不能为空',
            'abstract.required' => '作者简介不能为空',

        ];
    }
}
