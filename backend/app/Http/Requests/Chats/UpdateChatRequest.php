<?php

namespace App\Http\Requests\Chats;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChatRequest extends FormRequest
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
            'message' =>'required|string|max:255',
            'read'=>'required|boolean',
        ];
    }
    public function messages()
    {
        return [
            'message.required' =>'メッセージが入力されていません',
            'message.string'=> '文字列で入力してください',
            'message.max'=>'255文字以内で入力してください',
            'read.required' =>'既読フラグが入力されていません',
            'read.boolean' =>'boolean型になっていません',
        ];
    }
}
