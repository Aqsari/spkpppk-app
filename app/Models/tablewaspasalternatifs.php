<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tablewaspasalternatifs extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'criteria1','criteria2','criteria3','criteria4',];
}
