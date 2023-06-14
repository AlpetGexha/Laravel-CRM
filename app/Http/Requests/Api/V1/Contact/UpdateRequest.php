<?php

namespace App\Http\Requests\Api\V1\Contact;

use App\Enums\PronounsEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'nullable|string|max:20',
            'first_name' => 'required|string|min:2|max:81',
            'middle_name' => 'required|string|min:2|max:81',
            'last_name' => 'required|string|min:2|max:81',
            'preferred_name' => 'required|string|min:2|max:255',
            'phone' => 'nullable|string',
            'email' => 'nullable|email:rfc',
            'pronouns' => ['nullable', 'string', Rule::in(PronounsEnum::all())],
        ];
    }
}
