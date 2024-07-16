<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['deptfullname', 'deptshortname', 'deptcollid'];
    protected $primaryKey = 'deptid';



    public function college()
    {
        return $this->belongsTo(College::class);
    }


    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }
}
