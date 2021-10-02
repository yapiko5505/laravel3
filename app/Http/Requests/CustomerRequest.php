<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'postal' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'todo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名称は必ず入力してください。',
            'postal.required' => '郵便番号は必ず入力してください。',
            'address.required' => '住所は必ず入力してください。',
            'phone.required' => '電話番号は必ず入力してください。',
            'email.required' => 'メールは必ず入力してください。',
            'todo.required' => '用途は必ず入力してください。'
        ];
    }
}
