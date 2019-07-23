<?php

namespace App\Http\Controllers;

use App\Tracker;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ExportUsers;
use App\Imports\ImportUsers;

class TestController extends Controller
{
    //

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExport()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new ExportUsers, 'Competition tracker.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import(Request $request)
    {
        /*$path = $request->file->getRealPath();
        $data = \Maatwebsite\Excel\Excel::load($path)->get();

        return $data;*/

        $rows = Excel::toCollection(new ImportUsers(),request()->file('file'));



        $i = 0;
        foreach($rows[0] as $row){
            echo $row[0]."=>".$row[1]." <br>";
            $i++;
        }
        exit;
        //return $rows;

        Tracker::truncate();

        Excel::import(new ImportUsers, request()->file('file'));
        return back();
    }
}
