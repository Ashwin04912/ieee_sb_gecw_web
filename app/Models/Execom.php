<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Execom extends Model
{
    use HasFactory;

    protected $table = 'execoms';

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
