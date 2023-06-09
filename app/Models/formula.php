<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formula extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'content', 'comment'];

    protected $casts = [
        'content' => 'json'
    ];
}
