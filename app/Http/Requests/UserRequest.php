<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username'=>'required|unique:user,UserName',
            'password'='required',
            'repassword'=>'required|same:password',
            'email'=>'required'
            
            //
        ];
    }
    public function messages(){
        return [
            'username.required'=>'UserName không chính xác',
            'username.unique'=>'Username đã tồn tại',
            'password.required'=>'Mật khẩu chưa chính xác',
            'repassword.required'=>'Nhập lại mật khẩu chưa chính xác',
            'repassword.same'=>'Nhập lại mật khẩu chưa chính xác',
            'email.required'=>'Email không chính xác',



        ]
    }
}
