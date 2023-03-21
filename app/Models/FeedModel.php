<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'type','name', 'me', 'de','cp','dcp',
        'lys','m+c','meth','fat','fibre','ca','p',
        'cost'
    ];
}
