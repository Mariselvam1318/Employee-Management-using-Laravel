<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primarykey='id';
    protected $fillable=[
        'name',
        'email',
        'phone',
        'hire_date',
        'position',
        'salary'
    ];
}
