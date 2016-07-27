<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AuthorInsertRequest extends Request
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
            //
            'name'=>'required',
            'book_id'=>'required|numeric',
            'abstract'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '作者名称不能为空',
            'book_id.required' => '图书ID不能为空',
            'book_id.numeric' => '图书ID格式不正确',
            'abstract.required'=>'作者简介不能为空',
        ];
    }
}
