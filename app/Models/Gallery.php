<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'image'
    ];

    // Specify the table name
    protected $table = 'gallery'; // You can change this to your preferred table name
}
