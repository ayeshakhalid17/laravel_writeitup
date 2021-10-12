<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function usergenres(){
        return $this->belongsTo(Usergenres::class, 'genre','genre');
    }
}
