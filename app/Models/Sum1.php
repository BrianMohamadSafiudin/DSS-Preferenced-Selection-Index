<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sum1 extends Model
{
    use HasFactory;
    protected $table = 'sum1';
    protected $primaryKey = 'sum1_id';
    protected $fillable = [
        'm1',
        'm2',
        'm3',
        'm4',
        'm5',
        'm6',
        'm7',
        'm8',
    ];
}
