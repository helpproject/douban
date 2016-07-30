<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderControllerRequest extends Request
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
            'phone' => 'required|regex:/^1\d{10}$/|unique:orders',
            'sheng' => 'required|numeric',
            'shi' => 'required|numeric',
            'xian' => 'required|numeric',
            'youbian' => 'required|regex:/^[1-9]\d{5}(?!\d)$/',
            'user_id' => 'required|numeric',
            'detail' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '用户姓名不能为空',
            'phone.required' => '手机号不能为空',
            'phone.regex' => '手机号格式不正确',
            'sheng.required'=>'省级不能为空',
            'sheng.numeric'=>'省级格式不正确',
            'shi.required' => '市级不能为空',
            'xian.required' => '县级不能为空',
            'shi.numeric' => '市级格式不正确',
            'xian.numeric' => '县级格式不正确',
            'youbian.required' => '邮政编码不能为空',
            'youbian.regex' => '邮政编码格式不正确',
            'user_id.number' => '用户ID格式不正确',
            'user_id.required' => '用户ID不能为空',
            'detail.required'=>'详细信息不能为空',
        ];
    }
}
