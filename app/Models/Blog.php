<?php

namespace App\Models;

use App\Models\PortfolioCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function portfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id'); // Replace 'category_id' if your foreign key is different
    }
    
}
