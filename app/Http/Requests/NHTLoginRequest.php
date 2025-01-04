<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NHTLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'NHTemail' => 'required|email',
            'NHTMatKhau' => 'required|min:6',
            ];
    }
    public function messages()
    {
        return [
            'NHTemail.required' => 'Email không được để trống',
            'NHTMatKhau.required' => 'Mật khẩu không được để trống',
            'NHTMatKhau.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'NHTemail.email' => 'Email không đúng định dạng. Ví dụ: abc1234@gmail.com'
        ];
    }
}
