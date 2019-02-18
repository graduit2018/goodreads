<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['user', 'book'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function setUserAttribute($user)
    {
        $this->user_id = $user->getKey();
        $this->setRelation('user', $user);
    }

    public function setBookAttribute($book)
    {
        $this->book_id = $book->getKey();
        $this->setRelation('book', $book);
    }
}
