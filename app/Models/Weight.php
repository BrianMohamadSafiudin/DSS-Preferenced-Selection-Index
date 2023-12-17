<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;
    protected $table = 'weight';
    protected $primaryKey = 'weight_id';
    protected $fillable = [
    'weight1',
    'weight2',
    'weight3',
    'weight4',
    'weight5',
    'weight6',
    'weight7',
];
}
