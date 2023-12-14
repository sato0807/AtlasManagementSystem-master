<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|/\A[ァ-ヿ]+\z/u|max:30',
            'under_name_kana' => 'required|string|/\A[ァ-ヿ]+\z/u|max:30',
            'mail_address' => 'required|email|unique:users,mail_address|max:100',
            'sex' => 'required|in:1,2,3',
            'old_year' => 'required|',
            'old_month' => '',
            'old_day' => '',
            'role' => 'required|in:1,2,3,4',
            'password' => 'required|min:8|max:30|same:password_confirmation'
        ];
    }
}
