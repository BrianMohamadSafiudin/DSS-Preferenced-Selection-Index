<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    use HasFactory;
    protected $table = 'spec';
    protected $primaryKey = 'spec_id';
    protected $fillable = [
    'spec1',
    'spec2',
    'spec3',
    'spec4',
    'spec5',
    'spectotal'];
}
