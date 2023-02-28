<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationFacilityRequest extends FormRequest
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
            'reservation_name' => 'required|string|max:255',
            'event_start' => 'required|after_or_equal:today',
            'notes' => 'nullable',
            'facility_id' => 'required|numeric|min:1'
        ];
    }
}
