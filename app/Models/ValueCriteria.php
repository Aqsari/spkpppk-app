<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueCriteria extends Model
{
    protected $table ='value_criterias';
    use HasFactory;

    protected $fillable = ['criteria_name', 'criteria1', 'criteria2', 'criteria3', 'criteria4','costbenefit'];
}
