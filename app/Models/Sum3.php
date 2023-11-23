<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sum3 extends Model
{
    use HasFactory;
    protected $table = 'sum3';
    protected $primaryKey = 'sum3_id';
    protected $fillable = [
    'A1',
    'A2',
    'A3',
    'A4',
    'A5',
    'A6',
    'A7',
    'A8',
    'A9',
    'A10',
];
}
