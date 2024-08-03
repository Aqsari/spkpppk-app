<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table ='datas';
    use HasFactory;

    protected $fillable = ['name', 'data1', 'data2', 'data3', 'data4'];
}
