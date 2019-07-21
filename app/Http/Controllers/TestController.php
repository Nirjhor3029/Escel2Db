<?php

namespace App\Http\Controllers;

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
        return Excel::download(new ExportUsers, 'users.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new ImportUsers, request()->file('file'));

        return back();
    }
}
