<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdeasRequest extends FormRequest
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
            'idea' => 'required|string|max:256' // Max characters should match $maxTokens in the OpenAPI.
        ];
    }
}
