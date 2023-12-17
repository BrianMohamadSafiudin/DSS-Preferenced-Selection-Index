<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mean extends Model
{
    use HasFactory;
    protected $table = 'mean';
    protected $primaryKey = 'mean_id';
    protected $fillable = [
    'mean1',
    'mean2',
    'mean3',
    'mean4',
    'mean5',
    'mean6',
    'mean7',
];
}
