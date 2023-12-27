<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    function scopeSearch($query, $searchValue)
    {

        if ($searchValue) {
            $query->where('title', 'Like', '%' . $searchValue . '%');
        }
        // $blogInstance =

        return $query;
    }

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
