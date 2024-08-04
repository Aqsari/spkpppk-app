<?php

namespace App\Imports;

use App\Models\Data; // Replace with your actual model
use Maatwebsite\Excel\Concerns\ToModel;

class DatasImport implements ToModel
{
 public function model(array $row){

    // Assuming 'name' is the unique identifier
    $uniqueIdentifier = $row[0];

    // Check if a record with the same unique identifier already exists
    $existingRecord = Data::where('name', $uniqueIdentifier)->first();

    if ($existingRecord) {
        // If record exists, you can choose to update it or skip
        // Uncomment the following line to update the existing record
        $existingRecord->update([
            'UMUR' => $row[1],
            'LAMA_HONOR' => $row[2],
            'JABATAN' => $row[3],
            'PENDIDIKAN' => $row[4],
            'JURUSAN' => $row[5] ?? "-",
        ]);

        // Or simply skip if the record already exists
        return null;
    }

    // If no existing record, create a new one
    return new Data([
        'name' => $row[0],
        'UMUR' => $row[1],
        'LAMA_HONOR' => $row[2],
        'JABATAN' => $row[3],
        'PENDIDIKAN' => $row[4],
        'JURUSAN' => $row[5] ?? "-",
    ]);
 }
}
