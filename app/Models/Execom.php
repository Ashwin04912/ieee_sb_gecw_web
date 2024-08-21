<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Execom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'image',
        'github',
        'insta',
        'linkedin',
    ];
}