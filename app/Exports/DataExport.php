<?php

namespace App\Exports;

use App\Models\Excel_data;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Excel_data::all();
    }
}
