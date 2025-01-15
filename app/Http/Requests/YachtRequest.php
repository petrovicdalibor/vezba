<?php

namespace App\Http\Requests;

use App\Enums\YachtTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class YachtRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'yacht' => [Rule::enum(YachtTypeEnum::class)],
            'capacity' => 'required|integer|min:1|max:100',
            'hourly_rate' => 'required|integer|min:1|max:1000',
        ];
    }
}
