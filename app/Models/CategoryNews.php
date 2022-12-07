<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryNews extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}