<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    function scopeFilter($query, $filters)
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
        $query
            ->when($filters['search'] ?? null, function ($query) use ($filters) {
                $query
                    ->where(function ($query) use ($filters) {
                        $query->where('title', 'Like', '%' . $filters['search'] . '%')
                            ->orWhere('body', 'Like', '%' . $filters['search'] . '%');
                    });
            });

        $query
            ->when($filters['category'] ?? null, function ($query) use ($filters) {
                // input - category's slug -> output ->category's slug's blogs
                // whereHas
                $query->whereHas('category', function ($catQuery) use ($filters) {
                    $catQuery->whereSlug($filters['category']);
                });
            });

        $query
            ->when($filters['author'] ?? null, function ($query) use ($filters) {
                // input - category's slug -> output ->category's slug's blogs
                // whereHas
                $query->whereHas('author', function ($autQuery) use ($filters) {
                    $autQuery->whereUsername($filters['author']);
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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function subscribedUsers()
    {
        return $this->belongsToMany(User::class, 'blogs_users');
    }

    public function isSubscribed(){
            return $this->subscribedUsers->contains('id', auth()->id());
    }
}
