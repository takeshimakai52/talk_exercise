<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuestionRequest extends FormRequest
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
            'title' => 'required|max:50',
            'question' => 'required',
            'answer_good'=>'required',
            'answer_normal'=>'required',
            'answer_bad'=>'required',
            're_answer_good'=>'required',
            're_answer_normal'=>'required',
            're_answer_bad'=>'required',
            'advice_good'=>'required',
            'advice_normal'=>'required',
            'advice_bad'=>'required',
        ];
    }
}
