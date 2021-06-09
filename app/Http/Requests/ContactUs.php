<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUs extends FormRequest
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
            'name' => 'required|string|max:30',
            'email' => 'required|email',
            'content' => 'required|string|max:255'
        ];
    }

    /**
     * @return []
     */
    public function messages()
    {
        return [
            'name.required' => '氏名を入力してください',
            'name.string' => '適切な値を入力してください',
            'name.max' => '入力内容が長すぎます',
            'email.required'  => 'メールアドレスを入力してください',
            'email.required'  => '適切な値を入力してください',
            'content.required'  => 'お問合せ内容を入力してください',
            'content.string'  => '適切な値を入力してください',
            'content.max'  => '入力内容が長すぎます',
        ];
    }
}
