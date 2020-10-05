<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'        => 'عدد المشاريع',
            'chart_type'         => 'line',
            'report_type'        => 'group_by_string',
            'model'              => 'App\\Project',
            'group_by_field'     => 'project_name',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'column_class'       => 'col-md-6',
            'entries_number'     => '5',
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'           => 'متوسط سعر المشروع',
            'chart_type'            => 'bar',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Project',
            'group_by_field'        => 'date_of_purchase',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'avg',
            'aggregate_field'       => 'initial_project_value',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'Y-m-d',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
        ];

        $chart2 = new LaravelChart($settings2);

        $settings3 = [
            'chart_title'           => 'إخلاء الممتلكات',
            'chart_type'            => 'pie',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Property',
            'group_by_field'        => 'date_of_preview',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'Y-m-d',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
        ];

        $chart3 = new LaravelChart($settings3);

        $settings4 = [
            'chart_title'           => 'الحوادث',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\ReportAccident',
            'group_by_field'        => 'date_of_accident',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'Y-m-d',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
        ];

        $settings4['total_number'] = 0;

        if (class_exists($settings4['model'])) {
            $settings4['total_number'] = $settings4['model']::when(isset($settings4['filter_field']), function ($query) use ($settings4) {
                if (isset($settings4['filter_days'])) {
                    return $query->where(
                        $settings4['filter_field'],
                        '>=',
                        now()->subDays($settings4['filter_days'])->format('Y-m-d')
                    );
                } else if (isset($settings4['filter_period'])) {
                    switch ($settings4['filter_period']) {
                        case 'week':
                            $start  = date('Y-m-d', strtotime('last Monday'));
                            break;
                        case 'month':
                            $start = date('Y-m') . '-01';
                            break;
                        case 'year':
                            $start  = date('Y') . '-01-01';
                            break;
                    }

                    if (isset($start)) {
                        return $query->where($settings4['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings4['aggregate_function'] ?? 'count'}($settings4['aggregate_field'] ?? '*');
        }

        $settings5 = [
            'chart_title'           => 'آخر المشاريع',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Project',
            'group_by_field'        => 'date_of_purchase',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'Y-m-d',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'fields'                => [
                'id'             => '',
                'the_contractor' => '',
            ],
        ];

        $settings5['data'] = [];

        if (class_exists($settings5['model'])) {
            $settings5['data'] = $settings5['model']::latest()
                ->take($settings5['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings5)) {
            $settings5['fields'] = [];
        }

        return view('home', compact('chart1', 'chart2', 'chart3', 'settings4', 'settings5'));
    }
}
