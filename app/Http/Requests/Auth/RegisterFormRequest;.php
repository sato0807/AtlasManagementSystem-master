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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|/\A[ァ-ヿ]+\z/u|max:30',
            'under_name_kana' => 'required|string|/\A[ァ-ヿ]+\z/u|max:30',
            'mail_address' => 'required|email|unique:users,mail_address|max:100',
            'sex' => 'required|in:1,2,3',
            'old' => 'date'
            'old_year' => 'required_with:old_month,old_day',
            'old_month' => 'required_with:old_year,old_day',
            'old_day' => 'required_with:old_year,old_month',
            'role' => 'required|in:1,2,3,4',
            'password' => 'required|min:8|max:30|same:password_confirmation'
        ];
    }

    public function getValidatorInstance()
    {
        if ($this->input('old_day') && $this->input('old_month') && $this->input('old_year'))
        {
            $old_time = implode('-', $this->only(['old_year', 'old_month', 'old_day']));
            $this->merge([
                'old' => $old_time
            ]);
        }
        // もし ($this->取得できる('old_day') と $this->取得できる('old_month') と $this->取得できる('old_year'))ならば
        // {
        //     $old_time = 連結して取得する('-'で, $this->これだけ(['old_year', 'old_month', 'old_day']));
        //     $this->データを追加する([
        //         'old' に $old_time を
        //     ]);
        // }

        return parent::getValidatorInstance();
    }

}
