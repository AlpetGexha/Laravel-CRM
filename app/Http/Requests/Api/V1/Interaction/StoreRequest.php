<?php

namespace App\Http\Requests\Api\V1\Interaction;

use App\Enums\InteractionTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreRequest extends FormRequest
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
            'type' => ['required', 'string', new Enum(InteractionTypeEnum::class)],
            'content' => 'required|string',
            'contact_id' => 'required|integer|exists:contacts,id',
            'project_id' => 'nullable|integer|exists:projects,id',
        ];
    }
}
