<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psi extends Model
{
    use HasFactory;
    protected $table = 'psi';
    protected $primaryKey = 'psi_id';
    protected $fillable = [
        'psia1c1','psia1c2','psia1c3','psia1c4','psia1c5','psia1c6','psia1c7',
        'psia2c1','psia2c2','psia2c3','psia2c4','psia2c5','psia2c6','psia2c7',
        'psia3c1','psia3c2','psia3c3','psia3c4','psia3c5','psia3c6','psia3c7',
        'psia4c1','psia4c2','psia4c3','psia4c4','psia4c5','psia4c6','psia4c7',
        'psia5c1','psia5c2','psia5c3','psia5c4','psia5c5','psia5c6','psia5c7',
        'psia6c1','psia6c2','psia6c3','psia6c4','psia6c5','psia6c6','psia6c7',
        'psia7c1','psia7c2','psia7c3','psia7c4','psia7c5','psia7c6','psia7c7',
        'psia8c1','psia8c2','psia8c3','psia8c4','psia8c5','psia8c6','psia8c7',
        'psia9c1','psia9c2','psia9c3','psia9c4','psia9c5','psia9c6','psia9c7',
        'psia10c1','psia10c2','psia10c3','psia10c4','psia10c5','psia10c6','psia10c7',
        'psia11c1','psia11c2','psia11c3','psia11c4','psia11c5','psia11c6','psia11c7',
        'psia12c1','psia12c2','psia12c3','psia12c4','psia12c5','psia12c6','psia12c7',
        'psia13c1','psia13c2','psia13c3','psia13c4','psia13c5','psia13c6','psia13c7',
        'psia14c1','psia14c2','psia14c3','psia14c4','psia14c5','psia14c6','psia14c7',
        'psia15c1','psia15c2','psia15c3','psia15c4','psia15c5','psia15c6','psia15c7',
];
}
