<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'inquiries';
    protected $fillable = ['name','phone_number','email','subject','message'];
}
