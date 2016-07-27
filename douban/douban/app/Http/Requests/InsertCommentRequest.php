<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertCommentRequest extends Request
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
            'asdsa'=>'required|regex:/^\S{8,1000}$/',
            'content'=>'required'
        ];
    }


}
