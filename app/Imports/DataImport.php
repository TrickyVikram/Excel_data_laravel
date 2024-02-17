<?php

namespace App\Imports;

use App\Models\Excel_data;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Excel_data([
            "name"=> $row["1"],
            "roll"=> $row["2"],
            "email"=> $row["3"],
            "phone"=> $row["4"],
            "address"=> $row["5"],
            "created_at"=> $row["6"],
            "updated_at"=> $row["7"],

            
        ]);
    }
}
