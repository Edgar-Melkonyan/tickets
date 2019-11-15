<?php

namespace StorageDomain\Domain\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'                  => 'required|max:30',
            'phone'                 => 'required|numeric|min:1|digits_between:9,16',
            'text'                  => 'required',
            'type'                  => 'required|in:MYSQL,FILE',
        ];
    }
}
