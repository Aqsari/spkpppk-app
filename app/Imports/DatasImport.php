<?php

namespace App\Imports;

use App\Models\Data; // Replace with your actual model
use Maatwebsite\Excel\Concerns\ToModel;

class DatasImport implements ToModel
{
 public function model(array $row){

    return new Data([
        'name'=> $row[0],
        'UMUR'=> $row[1],
        'LAMA_HONOR'=> $row[2],
        'JABATAN'=> $row[3],
        'PENDIDIKAN'=> $row[4],
        'JURUSAN'=> $row[5]??"-",
    ]);
 }
}
