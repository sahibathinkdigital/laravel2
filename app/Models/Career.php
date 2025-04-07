<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'phone',
        'email',
        'specialization',
        'message',
        'file_path',
    ];
}
