<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDatabaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // バリテーションが発動するかしないかを切り替える
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
            'name' => ['required', 'string', 'max:20'],
            'title' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'boolean'],
            'age' => ['required'],
            'message' => ['required', 'string', 'max:200'],
            'caution' => ['required'],
        ];
    }
}
