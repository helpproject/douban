<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GoodsInsertCateRequest extends Request
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
            'title' => 'required|unique:books',
            'press' => 'required',
            'pressdate' => 'required',
            'pagination'=>'required|regex:/^\d+$/',
            'price'=>'required|numeric',
            'cate_id'=>'required',
            'ISBN'=>'required|numeric',
            'img'=>'image',
            'intro'=>'required',
            'catalog'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '图书名称不能为空',
            'title.unique' => '图书名称已经存在',
            'press.required' => '图书出版社不能为空',
            'pressdate.required' => '图书出版日期不能为空',
            'cate_id.required'=>'图书分类不能为空',
            'pagination.required' => '图书页数不能为空',
            'pagination.regex' => '图书页数格式不正确',
            'price.required' => '图书价格不能为空',
            'price.numeric' => '图书价格格式不正确',
            'ISBN.regex' => '国家标准书号格式不正确',
            'ISBN.required' => '国家标准书号不能为空',
            'img.image' => '图片格式不正确',
            'intro.required'=>'内容简介不能为空',
            'catalog.required'=>'目录不能为空',
        ];
    }
}
