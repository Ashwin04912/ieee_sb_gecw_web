<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApsExecom extends Model
{
    use HasFactory;

    protected $table = 'aps_execom';

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

