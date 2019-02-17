<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'isbn13',
        'description',
        'published_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'subscriptions')->withTimestamps();
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
