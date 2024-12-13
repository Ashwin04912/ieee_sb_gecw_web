<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SightExecom extends Model
{
    use HasFactory;

    protected $table = 'sight_execom';

    protected $fillable = [
        'name',
        'title',
        'society',
        'image',
        'github',
        'insta',
        'linkedin',
    ];
}
