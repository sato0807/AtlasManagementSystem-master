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
            'over_name_kana' => 'required|string|regex:/\A[ァ-ヿ]+\z/u|max:30',
            'under_name_kana' => 'required|string|regex:/\A[ァ-ヿ]+\z/u|max:30',
            'mail_address' => 'required|email|unique:users,mail_address|max:100',
            'sex' => 'required|in:1,2,3',
            'birth_day' => 'date|after:1999-12-31|before:today',
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
                'birth_day' => $old_time
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

    public function attributes()
    {
        return [
            'over_name' => '姓',
            'under_name' => '名',
            'over_name_kana' => 'セイ',
            'under_name_kana' => 'メイ',
            'mail_address' => 'メールアドレス',
            'sex' => '性別',
            'birth_day' => '生年月日',
            'role' => '権限',
            'password' => 'パスワード'
        ];
    }

    public function messages()
    {
        return [
            'over_name.required' => ':attributeを入力してください。',
            'over_name.string' => ':attributeは文字列で入力してください。',
            'over_name.max' => ':attributeは10文字以内で入力してください。',
            'under_name.required' => ':attributeを入力してください。',
            'under_name.string' => ':attributeは文字列で入力してください。',
            'under_name.max' => ':attributeは10文字以内で入力してください。',
            'over_name_kana.required' => ':attributeを入力してください。',
            'over_name_kana.string' => ':attributeは文字列で入力してください。',
            'over_name_kana.regex' => ':attributeは全角カタカナで入力してください。',
            'over_name_kana.max' => ':attributeは30文字以内で入力してください。',
            'under_name_kana.required' => ':attributeを入力してください。',
            'under_name_kana.string' => ':attributeは文字列で入力してください。',
            'under_name_kana.regex' => ':attributeは全角カタカナで入力してください。',
            'under_name_kana.max' => ':attributeは30文字以内で入力してください。',
            'mail_address.required' => ':attributeを入力してください。',
            'mail_address.email' => ':attributeの形式で入力してください。',
            'mail_address.unique' => '登録済み:attributeは使用しないでください。',
            'mail_address.max' => ':attributeは100文字以内で入力してください。',
            'sex.required' => ':attributeを入力してください。',
            'sex.in' => 'この中から:attributeを選択してください。',
            'birth_day.date' => ':attributeの形式で入力してください。',
            'birth_day.after' => ':attributeを2000年1月1日以降で入力してください。',
            'birth_day.before' => ':attributeを今日以前で入力してください。',
            'role.required' => ':attributeを入力してください。',
            'role.in' => 'この中から:attributeを選択してください。',
            'password.required' => ':attributeを入力してください。',
            'password.min' => ':attributeは8文字以上で入力してください。',
            'password.max' => ':attributeは30文字以内で入力してください。',
            'password.same' => ':attributeは確認用パスワードと同じものを入力してください。'
        ];
    }

}
