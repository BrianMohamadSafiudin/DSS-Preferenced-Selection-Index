<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maxmin extends Model
{
    use HasFactory;
    protected $table = 'cases';
    protected $primaryKey = 'cases_id';
    protected $fillable = [
        'cases_id',
        'max1',
        'max2',
        'max3',
        'max4',
        'max5',
        'max6',
        'max7',
        'max8',
        'max9',
        'max10',
        'min1',
        'min2',
        'min3',
        'min4',
        'min5',
        'min6',
        'min7',
        'min8',
        'min9',
        'min10',
    ];
}

