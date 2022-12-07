<?php

namespace App\Models;

use App\Models\CategoryNews;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function categorynews()
    {
        return $this->belongsTo(CategoryNews::class, 'category_news_id');
    }
}
