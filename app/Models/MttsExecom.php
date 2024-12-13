<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MttsExecom extends Model
{
    use HasFactory;

    protected $table = 'mtts_execom';

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

