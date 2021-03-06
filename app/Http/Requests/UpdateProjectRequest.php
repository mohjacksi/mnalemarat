<?php

namespace App\Http\Requests;

use App\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_edit');
    }

    public function rules()
    {
        return [
            'project_name'                => [
                'string',
                'max:50',
                'required',
            ],
            'project_reference'           => [
                'string',
                'required',
            ],
            'eng_name'                    => [
                'string',
                'required',
            ],
            'operating_permission_date'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'initial_project_value'       => [
                'required',
            ],
            'purchase_order'              => [
                'string',
                'nullable',
            ],
            'date_of_purchase'            => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'the_contractor'              => [
                'string',
                'max:50',
                'required',
            ],
            'date_of_delivery'            => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_of_commencement'        => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'project_duration'            => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'assumed_date_of_receipt'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'completion_rate'             => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'prim_receiving_com'          => [
                'string',
                'nullable',
            ],
            'initial_receipt_date'        => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_of_receipt_project'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'final_receiv_com'            => [
                'string',
                'nullable',
            ],
            'final_receipt_date'          => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'final_completion_percentage' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'delay_days'                  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'work_done'                   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'reserved_rate'               => [
                'string',
                'nullable',
            ],
        ];
    }
}
