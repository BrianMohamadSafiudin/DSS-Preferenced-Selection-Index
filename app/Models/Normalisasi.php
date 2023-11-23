<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;
    protected $table = 'normalisasi';
    protected $primaryKey = 'normalisasi_id';
    protected $fillable = [
        'na1c1',
        'na1c2',
        'na1c3',
        'na1c4',
        'na1c5',
        'na2c1',
        'na2c2',
        'na2c3',
        'na2c4',
        'na2c5',
        'na3c1',
        'na3c2',
        'na3c3',
        'na3c4',
        'na3c5',
        'na4c1',
        'na4c2',
        'na4c3',
        'na4c4',
        'na4c5',
        'na5c1',
        'na5c2',
        'na5c3',
        'na5c4',
        'na5c5',
        'na6c1',
        'na6c2',
        'na6c3',
        'na6c4',
        'na6c5',
        'na7c1',
        'na7c2',
        'na7c3',
        'na7c4',
        'na7c5',
        'na8c1',
        'na8c2',
        'na8c3',
        'na8c4',
        'na8c5',
        'na9c1',
        'na9c2',
        'na9c3',
        'na9c4',
        'na9c5',
        'na10c1',
        'na10c2',
        'na10c3',
        'na10c4',
        'na10c5',
    ];
}
