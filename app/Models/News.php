<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title','user_id', 'slug', 'description', 'thumbnail','category_id','meta_description','meta_keyword', 'end_date', 'user_id'];

    protected $dates = ['end_date'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
