<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(FormRequest $request): array
    {
        $array =  [
            'name' => 'required|string',
            'password' => 'required|string',
            'phone' => 'required|regex:/^[0-9]*$/',
            'cccd' => 'required|regex:/^[0-9]*$/',
        ];

        if($request->id) {
            $array['cccd'] = ['required','unique:users,cccd,' . $request->id];

            if($request->password == '') {
                unset($array['password']);
            }
        }
        return $array;
    }
}
