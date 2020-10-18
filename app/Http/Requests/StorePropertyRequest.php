<?php

namespace App\Http\Requests;

use App\Property;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePropertyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('property_create');
    }

    public function rules()
    {
        return [
            'propriety_name'      => [
                'string',
                'required',
            ],
            'location'            => [
                'string',
                'required',
            ],
            'contract_number'     => [
                'string',
                'nullable',
            ],
            'tenant_name'         => [
                'string',
                'nullable',
            ],
            'date_of_preview'     => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'estimate_reference'  => [
                'string',
                'required',
            ],
            'estimate_date'       => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'damage_statement_1'  => [
                'string',
                'nullable',
            ],
            'notes_1'             => [
                'string',
                'nullable',
            ],
            'damage_statement_2'  => [
                'string',
                'nullable',
            ],
            'notes_2'             => [
                'string',
                'nullable',
            ],
            'damage_statement_3'  => [
                'string',
                'nullable',
            ],
            'notes_3'             => [
                'string',
                'nullable',
            ],
            'damage_statement_4'  => [
                'string',
                'nullable',
            ],
            'notes_4'             => [
                'string',
                'nullable',
            ],
            'damage_statement_5'  => [
                'string',
                'nullable',
            ],
            'notes_5'             => [
                'string',
                'nullable',
            ],
            'damage_statement_6'  => [
                'string',
                'nullable',
            ],
            'notes_6'             => [
                'string',
                'nullable',
            ],
            'damage_statement_7'  => [
                'string',
                'nullable',
            ],
            'notes_7'             => [
                'string',
                'nullable',
            ],
            'damage_statement_8'  => [
                'string',
                'nullable',
            ],
            'notes_8'             => [
                'string',
                'nullable',
            ],
            'damage_statement_9'  => [
                'string',
                'nullable',
            ],
            'notes_9'             => [
                'string',
                'nullable',
            ],
            'damage_statement_10' => [
                'string',
                'nullable',
            ],
            'notes_10'            => [
                'string',
                'nullable',
            ],
            'name_1'              => [
                'string',
                'nullable',
            ],
            'dep_mang_1'          => [
                'string',
                'nullable',
            ],
            'name_2'              => [
                'string',
                'nullable',
            ],
            'dep_mang_2'          => [
                'string',
                'nullable',
            ],
            'name_3'              => [
                'string',
                'nullable',
            ],
            'dep_mang_3'          => [
                'string',
                'nullable',
            ],
            'name_4'              => [
                'string',
                'nullable',
            ],
            'dep_mang_4'          => [
                'string',
                'nullable',
            ],
        ];
    }
}
