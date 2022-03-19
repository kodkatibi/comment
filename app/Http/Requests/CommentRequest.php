<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CommentRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'comment' => 'required|string',
                    'writerName' => 'required|string',
                    'post' => 'required|integer',
                ];
            }
        }
    }


    protected function failedValidation(Validator $validator)
    {
        $status = [
            'code' => 422,
            'success' => false,
            'msg' => ''
        ];
        throw new HttpResponseException(response()->json(['data' => [], 'status' => $status, 'errors' => $validator->errors()], 422));
    }
}
