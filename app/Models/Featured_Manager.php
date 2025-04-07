<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Featured_Manager extends Model
{
    protected $table = 'featured__managers'; // Ensure table name is correct
    protected $fillable = ['portfolio_id', 'cols', 'typeof', 'website_link', 'image_path'];
    public function portfolios()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id');
    }
}
