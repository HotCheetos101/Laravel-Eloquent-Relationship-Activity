<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;


    protected $fillable = ['progfullname', 'progshortname', 'progcollid', 'progcolldeptid'];

    protected $primaryKey = 'progid';

    public function college()
    {
        return $this->belongsTo(College::class);
    }


    public function departments()
    {
        return $this->belongsTo(Department::class);
    }
}
