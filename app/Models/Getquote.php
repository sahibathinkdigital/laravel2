<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getquote extends Model
{
    use HasFactory;
    protected $table = 'getquotes';
    protected $fillable = [
        'website_url',
        'company_name',
        'f_name',
        'l_name',
        'email',
        'phone_number',
        'message',
        'created_at'
    ];
}
