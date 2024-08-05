<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eduction extends Model
{
    protected $table ='table_education';
    use HasFactory;

    protected $fillable = ['name', 'value'];
}
