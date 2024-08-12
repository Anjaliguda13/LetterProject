<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsorship extends Model
{
    use HasFactory;
    protected $fillable=['clg_name','Dept','project_name','guide_name','guide_design','stud_name','roll_no'];

}
?>