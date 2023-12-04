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
        'psia1c1','psia1c2','psia1c3','psia1c4','psia1c5','psia1c6','psia1c7','psia1c8',
        'psia2c1','psia2c2','psia2c3','psia2c4','psia2c5','psia2c6','psia2c7','psia2c8',
        'psia3c1','psia3c2','psia3c3','psia3c4','psia3c5','psia3c6','psia3c7','psia3c8',
        'psia4c1','psia4c2','psia4c3','psia4c4','psia4c5','psia4c6','psia4c7','psia4c8',
        'psia5c1','psia5c2','psia5c3','psia5c4','psia5c5','psia5c6','psia5c7','psia5c8',
        'psia6c1','psia6c2','psia6c3','psia6c4','psia6c5','psia6c6','psia6c7','psia6c8',
        'psia7c1','psia7c2','psia7c3','psia7c4','psia7c5','psia7c6','psia7c7','psia7c8',
        'psia8c1','psia8c2','psia8c3','psia8c4','psia8c5','psia8c6','psia8c7','psia8c8',
        'psia9c1','psia9c2','psia9c3','psia9c4','psia9c5','psia9c6','psia9c7','psia9c8',
        'psia10c1','psia10c2','psia10c3','psia10c4','psia10c5','psia10c6','psia10c7','psia10c8',
        'psia11c1','psia11c2','psia11c3','psia11c4','psia11c5','psia11c6','psia11c7','psia11c8',
        'psia12c1','psia12c2','psia12c3','psia12c4','psia12c5','psia12c6','psia12c7','psia12c8',
        'psia13c1','psia13c2','psia13c3','psia13c4','psia13c5','psia13c6','psia13c7','psia13c8',
        'psia14c1','psia14c2','psia14c3','psia14c4','psia14c5','psia14c6','psia14c7','psia14c8',
        'psia15c1','psia15c2','psia15c3','psia15c4','psia15c5','psia15c6','psia15c7','psia15c8',
        'psia16c1','psia16c2','psia16c3','psia16c4','psia16c5','psia16c6','psia16c7','psia16c8',
        'psia17c1','psia17c2','psia17c3','psia17c4','psia17c5','psia17c6','psia17c7','psia17c8',
        'psia18c1','psia18c2','psia18c3','psia18c4','psia18c5','psia18c6','psia18c7','psia18c8',
        'psia19c1','psia19c2','psia19c3','psia19c4','psia19c5','psia19c6','psia19c7','psia19c8',
        'psia20c1','psia20c2','psia20c3','psia20c4','psia20c5','psia20c6','psia20c7','psia20c8',
        'psia21c1','psia21c2','psia21c3','psia21c4','psia21c5','psia21c6','psia21c7','psia21c8',
        'psia22c1','psia22c2','psia22c3','psia22c4','psia22c5','psia22c6','psia22c7','psia22c8',
        'psia23c1','psia23c2','psia23c3','psia23c4','psia23c5','psia23c6','psia23c7','psia23c8',
        'psia24c1','psia24c2','psia24c3','psia24c4','psia24c5','psia24c6','psia24c7','psia24c8',
        'psia25c1','psia25c2','psia25c3','psia25c4','psia25c5','psia25c6','psia25c7','psia25c8',
        'psia26c1','psia26c2','psia26c3','psia26c4','psia26c5','psia26c6','psia26c7','psia26c8',
        'psia27c1','psia27c2','psia27c3','psia27c4','psia27c5','psia27c6','psia27c7','psia27c8',
        'psia28c1','psia28c2','psia28c3','psia28c4','psia28c5','psia28c6','psia28c7','psia28c8',
        'psia29c1','psia29c2','psia29c3','psia29c4','psia29c5','psia29c6','psia29c7','psia29c8',
        'psia30c1','psia30c2','psia30c3','psia30c4','psia30c5','psia30c6','psia30c7','psia30c8',
        'psia31c1','psia31c2','psia31c3','psia31c4','psia31c5','psia31c6','psia31c7','psia31c8',
        'psia32c1','psia32c2','psia32c3','psia32c4','psia32c5','psia32c6','psia32c7','psia32c8',
        'psia33c1','psia33c2','psia33c3','psia33c4','psia33c5','psia33c6','psia33c7','psia33c8',
        'psia34c1','psia34c2','psia34c3','psia34c4','psia34c5','psia34c6','psia34c7','psia34c8',
        'psia35c1','psia35c2','psia35c3','psia35c4','psia35c5','psia35c6','psia35c7','psia35c8',
        'psia36c1','psia36c2','psia36c3','psia36c4','psia36c5','psia36c6','psia36c7','psia36c8',
        'psia37c1','psia37c2','psia37c3','psia37c4','psia37c5','psia37c6','psia37c7','psia37c8',
        'psia38c1','psia38c2','psia38c3','psia38c4','psia38c5','psia38c6','psia38c7','psia38c8',
        'psia39c1','psia39c2','psia39c3','psia39c4','psia39c5','psia39c6','psia39c7','psia39c8',
        'psia40c1','psia40c2','psia40c3','psia40c4','psia40c5','psia40c6','psia40c7','psia40c8',
        'psia41c1','psia41c2','psia41c3','psia41c4','psia41c5','psia41c6','psia41c7','psia41c8',
        'psia42c1','psia42c2','psia42c3','psia42c4','psia42c5','psia42c6','psia42c7','psia42c8',
        'psia43c1','psia43c2','psia43c3','psia43c4','psia43c5','psia43c6','psia43c7','psia43c8',
        'psia44c1','psia44c2','psia44c3','psia44c4','psia44c5','psia44c6','psia44c7','psia44c8',
        'psia45c1','psia45c2','psia45c3','psia45c4','psia45c5','psia45c6','psia45c7','psia45c8',
];
}
