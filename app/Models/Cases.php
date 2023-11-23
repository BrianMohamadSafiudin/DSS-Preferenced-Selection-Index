<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model {
    use HasFactory;

    protected $table = 'cases';
    protected $primaryKey = 'cases_id';
    protected $fillable = [
        'alternative1','alternative2','alternative3','alternative4','alternative5',
        'alternative6','alternative7','alternative8','alternative9','alternative10',
        'a1c1',
        'a1c2',
        'a1c3',
        'a1c4',
        'a1c5',
        'a2c1',
        'a2c2',
        'a2c3',
        'a2c4',
        'a2c5',
        'a3c1',
        'a3c2',
        'a3c3',
        'a3c4',
        'a3c5',
        'a4c1',
        'a4c2',
        'a4c3',
        'a4c4',
        'a4c5',
        'a5c1',
        'a5c2',
        'a5c3',
        'a5c4',
        'a5c5',
        'a6c1',
        'a6c2',
        'a6c3',
        'a6c4',
        'a6c5',
        'a7c1',
        'a7c2',
        'a7c3',
        'a7c4',
        'a7c5',
        'a8c1',
        'a8c2',
        'a8c3',
        'a8c4',
        'a8c5',
        'a9c1',
        'a9c2',
        'a9c3',
        'a9c4',
        'a9c5',
        'a10c1',
        'a10c2',
        'a10c3',
        'a10c4',
        'a10c5',
    ];
}
