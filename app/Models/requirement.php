<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requirement extends Model
{
    use HasFactory;
  
    protected $table = 'requirements';
    protected $fillable = [
        'animal', 'category', 'me_max', 'me_min', 'de', 
        'cp_max', 'cp_min', 'dcp', 'lys', 'm', 'meth', 
        'fat', 'fibre', 'ca_max', 'ca_min', 'p_max', 'p_min'
    ];


}
