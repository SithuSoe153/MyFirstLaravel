<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    function scopeSearch($query, $searchValue)
    {

        // First way
        // if ($searchValue) {
        //     $query
        //     ->where('title', 'Like', '%' . $searchValue . '%')
        //     ->orWhere('body', 'Like', '%' . $searchValue . '%');
        // }
        // return $query;


        //Second way
        // return $query->when($searchValue, function ($query) use ($searchValue) {

        //     $query->where('title', 'Like', '%' . $searchValue . '%')
        //         ->orWhere('body', 'Like', '%' . $searchValue . '%');
        // });


        //Second way + logical grouping
        return $query
            ->when($searchValue, function ($query) use ($searchValue) {
                $query
                    ->where(function ($query) use ($searchValue) {
                        $query->where('title', 'Like', '%' . $searchValue . '%')
                            ->orWhere('body', 'Like', '%' . $searchValue . '%');
                    });
            });
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
