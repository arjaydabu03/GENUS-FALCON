<?php

namespace App\Http\Requests\Keyword;

use Illuminate\Foundation\Http\FormRequest;

class CodeRequest extends FormRequest
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
            "code" => [
                "required",
                $this->get("id")
                    ? "unique:keyword,code," . $this->get("id")
                    : "unique:keyword,code",
            ],
        ];
    }
}
