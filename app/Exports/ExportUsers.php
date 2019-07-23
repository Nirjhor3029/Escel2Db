<?php

namespace App\Exports;

use App\Tracker;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUsers implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tracker::all();
    }
}
