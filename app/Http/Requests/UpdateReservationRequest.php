<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateReservationRequest extends FormRequest
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
            'room_id' => ['required', 'integer', Rule::exists('reservations', 'room_id')],
            'customer_id' => ['required', 'integer', Rule::exists('reservations', 'customer_id')],
            'check_in_date' => ['required', 'date'],
            'check_out_date' => ['required', 'date']
        ];
    }
}
