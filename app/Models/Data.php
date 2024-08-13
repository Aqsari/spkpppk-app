<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table ='datas';
    use HasFactory;

    protected $fillable = ['name', 'UMUR', 'LAMA_HONOR', 'JABATAN', 'PENDIDIKAN','JURUSAN','criteria_value'];

    public function education()
    {
        return $this->belongsTo(Eduction::class);
    }
}
