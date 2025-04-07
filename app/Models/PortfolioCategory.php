<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'portfolio_category_id'); // Use correct foreign key if necessary
    }
}
