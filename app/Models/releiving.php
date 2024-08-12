<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class releiving extends Model
{
    use HasFactory;
    protected $fillable=['empid','resign_date','relieve_date','role'];
}
