<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    // 1 - Best Practice " $fillable "
    // protected $fillable = ['Fame' , 'position' , 'company'];

    // 2 - Another Way if we have multi colums " $guarded "
    // protected $guarded;

    // 3 -iF We have many colums put we dont have some of coulm 
    protected $guarded=['company'];

}
