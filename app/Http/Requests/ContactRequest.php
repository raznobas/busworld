<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:10',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Имя является обязательным',
            'email.required' => 'Поле Email является обязательным',
            'subject.required' => 'Поле Тема сообщения является обязательным',
            'message.required' => 'Поле Текст сообщения является обязательным',
            'email.email' => 'Неверный Email адрес',
            'subject.min' => 'Минимальное кол-во символов для поля Тема сообщения 5',
            'message.min' => 'Минимальное кол-во символов для поля Текст сообщения 10',
        ];
    }
}
