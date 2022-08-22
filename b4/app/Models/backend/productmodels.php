<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productmodels extends Model
{
    use HasFactory;
    protected $fillable =[
        'pname',
        'pdes',
        'cat',
        'scat',
        'price',
        'status'
    ];
}
