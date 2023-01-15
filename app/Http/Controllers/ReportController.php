<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reports\MyReport;
use \koolreport\excel\ExcelExportable;
// use \koolreport\laravel\Friendship;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportTrainingAttendance;
use App\Exports\ExportTrainingAttendanceTable;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = new MyReport;
        $report->run();
        // dd($report->render());
        return view("reports.trainings.training_attendance")->withReport($report);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function excel()
    {
        $report = new MyReport;
        $report->run()->exportToExcel()->toBrowser("myreport.xlsx");
    }

    public function exportTrainingAttendance(Request $request){
        
        return Excel::download(new ExportTrainingAttendance, 'Training_attendance.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function export() 
    {
        return Excel::download(new ExportTrainingAttendanceTable, '_training_attendance.blade.xlsx');
    }
}
