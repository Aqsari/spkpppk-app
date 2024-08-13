<?php

namespace App\Imports;

use App\Models\Data; // Replace with your actual model
use Maatwebsite\Excel\Concerns\ToModel;

class DatasImport implements ToModel
{
    public function model(array $row)
    {

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
                'JABATAN' => $this->cleanDataLevel($row[3]),
                'PENDIDIKAN' => $this->cleanEducationLevel($row[4]),
                'JURUSAN' => $this->normalisasiData($row[5]) ?? "-",
                'criteria_value' => "Sesuai",
            ]);

            // Or simply skip if the record already exists
            return null;
        }

        // If no existing record, create a new one
        return new Data([
            'name' => $row[0],
            'UMUR' => $row[1],
            'LAMA_HONOR' => $row[2],
            'JABATAN' => $this->cleanDataLevel($row[3]),
            'PENDIDIKAN' => $this->cleanEducationLevel($row[4]),
            'JURUSAN' => $this->normalisasiData($row[5]) ?? "-",
            'criteria_value' => "Sesuai",
        ]);
    }

    

    private function cleanEducationLevel($value)
    {
        // Normalize the string by removing spaces and dots
        $value = strtoupper(trim($value));
        $value = str_replace(['.', ' '], '', $value);

        // Define the valid education levels
        $validLevels = ['S3', 'S2', 'S1', 'D1', 'D2', 'D3', 'SMA', 'SMP', 'SD'];

        // Handle specific cases first
        $specialCases = [
            'STMIK' => 'S1',
            'SMK' => 'SMA',
            'SMEA' => 'SMA',
            'SLTA' => 'SMA',
            'PONPES' => 'Pesantren',
            'MTS' => 'SMP',
            'MAN' => 'SMA',
            'DIII' => 'D3',
            'D3' => 'D3',
            'DIV' => 'S1',
            'S1A/IV' => 'S1',
            'MA' => 'SMA',
            'SMU' => 'SMA',
            'SSSMA' => 'SMA',
            'SSMA' => 'SMA'
        ];

        // Replace special cases with valid levels
        foreach ($specialCases as $key => $replacement) {
            if (strpos($value, $key) !== false) {
                return $replacement;
            }
        }

        // Find and keep only the valid education level
        foreach ($validLevels as $level) {
            if (strpos($value, $level) !== false) {
                // Truncate the string to keep only the valid education level
                return $level;
            }
        }

        // Return the cleaned value (fallback, though we expect one of the above cases to match)
        return '';
    }


    private function cleanDataLevel($data)
    {
        // Menghapus spasi ekstra dan mengubah ke huruf kapital untuk konsistensi
        $item = trim(strtoupper($data));

        // Mengubah ke format yang standar
        if ($item == 'PENJAGA SEKOLAH') {
            return 'Petugas K3';
        } elseif ($item == 'K3' || $item == 'PETUGAS K3') {
            return 'Petugas K3';
        } elseif ($item == 'PENJAGA MADRASAH/K3') {
            return 'Petugas K3';
        } elseif ($item == 'SATPAM') {
            return 'Petugas K3';
        } elseif ($item == 'GURU') {
            return 'GTT';
        } elseif (strpos($item, 'PENYULUH') !== false) {
            return 'Penyuluh Agama Non ASN';
        }

        // Kembalikan item jika tidak ada perubahan
        return $item;
    }

    private function normalisasiData($data)
    {
     // Daftar penggantian istilah untuk normalisasi
    $petaPenggantian = [
        'SMK' => '-',
        'SMA' => '-',
        'TARBIYAH' => 'TARBIYAH',
        'BK' => 'BIMBINGAN KONSELING',
        'PAI' => 'PENDIDIKAN AGAMA ISLAM',
        'SISTEM INFORMASI' => 'SISTEM INFORMASI',
        'EKONOMI MANAJEMEN' => 'EKONOMI MANAJEMEN',
        'AKUNTANSI' => 'AKUNTANSI',
        'INFORMATIKA KOMP' => 'INFORMATIKA KOMPUTER',
        'TEKNIK INDUSTRI' => 'TEKNIK INDUSTRI',
        'SYARI\'AH' => 'SYARI\'AH',
        'PERDAGANGAN' => 'PERDAGANGAN',
        'KIMIA' => 'KIMIA',
        'BAHASA INGGRIS' => 'BAHASA INGGRIS',
        'ADMINISTRASI NEGARA' => 'ADMINISTRASI NEGARA',
        'HUKUM' => 'HUKUM',
        'BIOLOGI' => 'BIOLOGI',
        'IPA' => 'IPA',
        'MATEMATIKA' => 'MATEMATIKA',
        'SEJARAH' => 'SEJARAH',
        'AGRONOMI' => 'AGRONOMI',
        'KOMUNIKASI PENYIARAN ISLAM' => 'KOMUNIKASI PENYIARAN ISLAM',
        'PENDIDIKAN BHS. INGGRIS' => 'PENDIDIKAN BAHASA INGGRIS',
        'PENDIDIKAN SENI DRAMA, TARI, DAN MUSIK' => 'PENDIDIKAN SENI DRAMA, TARI, DAN MUSIK',
        'PGSD' => 'PENDIDIKAN GURU SEKOLAH DASAR',
        'PGTKI' => 'PENDIDIKAN GURU TAMAN KANAK-KANAK ISLAM',
        'PERPUSTAKAAN DAN KEARSIPAN' => 'PERPUSTAKAAN DAN KEARSIPAN',
        'SISTIM INFORMASI' => 'SISTEM INFORMASI',
        'AHWAL SYAKHSIYAH' => 'AHWAL SYAKHSIYAH',
        'KOMPUTER AKUNTANSI' => 'KOMPUTER AKUNTANSI',
        'USHULUDDIN' => 'USHULUDDIN',
        'SKI' => 'SEJARAH KEBUDAYAAN ISLAM',
        'MDI' => 'MANAJEMEN DAKWAH ISLAM',
        'ILMU ADMINISTRASI NEGARA' => 'ILMU ADMINISTRASI NEGARA',
        'KEUANGAN' => 'KEUANGAN',
        'PENDD.MATEMATIKA' => 'PENDIDIKAN MATEMATIKA',
        'PEND.BHS INGGRIS' => 'PENDIDIKAN BAHASA INGGRIS',
        'TBI' => 'BAHASA INGGRIS',
        'KARAWITAN' => 'KARAWITAN',
        'HPI' => 'HUKUM PIDANA ISLAM'
    ];

    // Convert data to uppercase
    $data = strtoupper(trim($data));

    // Replace 'ADM' with 'ADMINISTRASI'
    if (strpos($data, 'ADM') !== false) {
        $data = str_replace('ADM', 'ADMINISTRASI', $data);
    }

    // Replace 'B K' with 'BIMBINGAN KONSELING'
    if (strpos($data, 'B K') !== false) {
        $data = str_replace('B K', 'BIMBINGAN KONSELING', $data);
    }

    // Replace 'PLS' with 'PENDIDIKAN'
    if (strpos($data, 'PLS') !== false) {
        $data = str_replace('PLS', 'PENDIDIKAN', $data);
    }

    // Replace 'PENJASKES' with 'PENDIDIKAN JASMANI DAN KESEHATAN'
    if (strpos($data, 'PENJASKES') !== false) {
        $data = str_replace('PENJASKES', 'PENDIDIKAN JASMANI DAN KESEHATAN', $data);
    }

    // Replace all occurrences of 'B.' with 'BAHASA'
    if (strpos($data, 'B.') !== false) {
        $data = str_replace('B.', 'BAHASA', $data);
    }

    // Replace all occurrences of 'PEND.' with 'PENDIDIKAN'
    if (strpos($data, 'PEND.') !== false) {
        $data = str_replace('PEND.', 'PENDIDIKAN', $data);
    }

    // Replace all occurrences of 'PEN.BHS' with 'PENDIDIKAN BAHASA'
    if (strpos($data, 'PEN.BHS') !== false) {
        $data = str_replace('PEN.BHS', 'PENDIDIKAN BAHASA', $data);
    }

    // Replace all occurrences of 'PDD.' with 'PENDIDIKAN'
    if (strpos($data, 'PDD.') !== false) {
        $data = str_replace('PDD.', 'PENDIDIKAN', $data);
    }

    // Return normalized data
    return $petaPenggantian[$data] ?? $data;
}
}
