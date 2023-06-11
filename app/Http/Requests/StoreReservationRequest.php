<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreReservationRequest extends FormRequest
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
            'user_id'            => ['required', 'integer', Rule::exists('users', 'id')],
            'room_id' => ['required', 'integer', Rule::exists('rooms', 'id')],
            'customer_id' => ['required', 'integer', Rule::exists('customers', 'id')],
            'check_in_date' => ['required', 'date'],
            'check_out_date' => ['required', 'date']
        ];
    }

    protected function prepareForValidation()
    {
        // Manipulate the request data before validation
        $this->merge(['user_id' => Auth::user()->id]);
    }
}
