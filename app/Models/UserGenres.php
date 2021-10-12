<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGenres extends Model
{
    use HasFactory;
    protected $table = 'user_genres';
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
}
