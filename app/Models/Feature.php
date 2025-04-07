<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $table = 'features';
    protected $fillable = ['portfolio_id', 'typeof', 'website_link', 'image_path'];
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
