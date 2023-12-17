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
        'na1c1','na1c2','na1c3','na1c4','na1c5','na1c6','na1c7',
        'na2c1','na2c2','na2c3','na2c4','na2c5','na2c6','na2c7',
        'na3c1','na3c2','na3c3','na3c4','na3c5','na3c6','na3c7',
        'na4c1','na4c2','na4c3','na4c4','na4c5','na4c6','na4c7',
        'na5c1','na5c2','na5c3','na5c4','na5c5','na5c6','na5c7',
        'na6c1','na6c2','na6c3','na6c4','na6c5','na6c6','na6c7',
        'na7c1','na7c2','na7c3','na7c4','na7c5','na7c6','na7c7',
        'na8c1','na8c2','na8c3','na8c4','na8c5','na8c6','na8c7',
        'na9c1','na9c2','na9c3','na9c4','na9c5','na9c6','na9c7',,
        'na10c1','na10c2','na10c3','na10c4','na10c5','na10c6','na10c7',
        'na11c1','na11c2','na11c3','na11c4','na11c5','na11c6','na11c7',
        'na12c1','na12c2','na12c3','na12c4','na12c5','na12c6','na12c7',
        'na13c1','na13c2','na13c3','na13c4','na13c5','na13c6','na13c7',
        'na14c1','na14c2','na14c3','na14c4','na14c5','na14c6','na14c7',
        'na15c1','na15c2','na15c3','na15c4','na15c5','na15c6','na15c7',
];
}
