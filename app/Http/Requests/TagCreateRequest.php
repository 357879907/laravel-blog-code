<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagCreateRequest extends FormRequest
{
    /**验证用户是否经过登录认证
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
            'tag' => 'bail|required|unique:tags,tag',//bail验证约束 第一个规则required验证失败就不会继续验证
            'title'=>'required',
            'subtitle'=>'required',
            'layout'=>'required'
        ];
    }
}
