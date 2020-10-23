<?php

namespace App\Http\Controllers\Admin;


use App\projects;
use App\CampAddress;
use App\CounsellingCase;
use App\Exports\ExportReport;
use App\Exports\ExportPanel;
use App\Exports\ExportICLA;
use App\Governorate;
use App\GroupInformationSession;
use App\LegalCase;
use App\OfficeLocation;
use App\Project;
use App\Referral;
use App\Training;
use App\Trainingtopic;
use App\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Gate;
use App\Http\Controllers\Controller;
use App\Property;
use App\ReportAccident;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Response;

class ReportController extends Controller
{
    public function projects()
    {
        return view('admin.reports.projects');
    }

    public function properties()
    {
        return view('admin.reports.properties');
    }
    public function accidents()
    {
        return view('admin.reports.accidents');
    }

    public function reportExport(Request $request)
    {
        if ($request->type == 'projects') {
            $report = $this->downloadProjectsData($request);
        }
        if ($request->type == 'properties') {
            $report = $this->downloadPropertiesData($request);
        }
        if ($request->type == 'accidents') {
            $report = $this->downloadaccidentsData($request);
        }

        // convert the object(report) to array
        $data = [];
        foreach ($report as $value) {
            $data[] = $value;
        }
        $fileName = $request->type;
        $time = Carbon::now()->toDateTimeString();
        $fileName = $fileName . '_' . $time;
        return Excel::download(new ExportReport($data, $request->type), $fileName . '.xlsx');
    }

    public function downloadProjectsData(Request $request)
    {
        Log::info($request->type);

        // abort_if(Gate::denies('report_projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $date = $request->date;
        Log::info($date);
        // if user select from start till now then $request->date = 0
        if ($date == 0) {
            $start = "2020-01-01";
            $end = date('Y-m-d');
        }
        // if user select today then $request->date = 1
        if ($date == 1) {
            $start = date('Y-m-d');
            $end = date('Y-m-d');
        }
        // if user select by date range then $request->date = 2
        if ($date == 2) {
            if ($request->start && $request->end) {
                $start = $request->start;
                $end = $request->end;
            }
        }
        $projects = Project::whereBetween('created_at', [$start." 00:00:00",$end." 23:59:59"]);
        //dd($projects);
        // return $projects = Project::all();
        //dd($projects->count());
        return $projects->get();
    }

    public function downloadPropertiesData(Request $request)
    {
        Log::info($request->type);

        // abort_if(Gate::denies('report_projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $date = $request->date;
        Log::info($date);
        // if user select from start till now then $request->date = 0
        if ($date == 0) {
            $start = "2020-01-01";
            $end = date('Y-m-d');
        }
        // if user select today then $request->date = 1
        if ($date == 1) {
            $start = date('Y-m-d');
            $end = date('Y-m-d');
        }
        // if user select by date range then $request->date = 2
        if ($date == 2) {
            if ($request->start && $request->end) {
                $start = $request->start;
                $end = $request->end;
            }
        }
        $properties = Property::whereBetween('created_at', [$start." 00:00:00",$end." 23:59:59"]);
        //dd($projects);
        // return $projects = Project::all();
        //dd($projects->count());
        return $properties->get();
    }

    public function downloadaccidentsData(Request $request)
    {
        Log::info($request->type);

        // abort_if(Gate::denies('report_projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $date = $request->date;
        Log::info($date);
        // if user select from start till now then $request->date = 0
        if ($date == 0) {
            $start = "2020-01-01";
            $end = date('Y-m-d');
        }
        // if user select today then $request->date = 1
        if ($date == 1) {
            $start = date('Y-m-d');
            $end = date('Y-m-d');
        }
        // if user select by date range then $request->date = 2
        if ($date == 2) {
            if ($request->start && $request->end) {
                $start = $request->start;
                $end = $request->end;
            }
        }
        $accidents = ReportAccident::whereBetween('created_at', [$start." 00:00:00",$end." 23:59:59"]);
        //dd($projects);
        // return $projects = Project::all();
        //dd($projects->count());
        return $accidents->get();
    }
}
