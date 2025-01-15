<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'yacht_id' => 'required|exists:yachts,id',
            'user_name' => 'required|string',
            'reservation_date' => 'required|date|after_or_equal:today',
            'duration_hours' => 'required|integer|between:1,24',
        ];
    }
}
