<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industrial extends Model
{
    use HasFactory;
    protected $fillable =['empid','course_name','duration','start_date','end_date'];
}
