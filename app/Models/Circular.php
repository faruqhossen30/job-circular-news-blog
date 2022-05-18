<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'thumbnail', 'category_id', 'start_date', 'end_date', 'organization_name', 'organization_website', 'apply_link', 'vacancy', 'meta_title', 'meta_description', 'meta_tag'];

    protected $dates = ['start_date', 'end_date'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
