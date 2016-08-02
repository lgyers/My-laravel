<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyRequest extends Request
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
            'com_name' => 'required',
            'com_des'  => 'required',
            'com_url'  => 'required|active_url',
        ];
    }

    public function messages()
    {
        return [
            'com_name.required' => '公司名称不能为空',
            'com_des.required'  => '公司简介不能为空',
            'com_url.required'  => '公司网址不能为空',
        ];
    }


}
