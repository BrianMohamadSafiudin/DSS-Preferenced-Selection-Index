<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;
    protected $table = 'ranking';
    protected $primaryKey = 'ranking_id';
    protected $fillable = [
    'tabel',
    'rank'];
}
