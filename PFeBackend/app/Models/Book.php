<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function tradeRequests(){
        return $this->hasMany(tradeRequest::class);
    }
    public function imageUrl()
{
    return asset('storage/' . $this->image);
}
    public function Avis(){
        return $this->hasMany(Avis::class);
    }
}
