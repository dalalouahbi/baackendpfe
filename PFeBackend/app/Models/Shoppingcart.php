<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Books(){
        return $this->belongsToMany(Book::class,'shopping_cart_books')->withPivot('quantity');
    }
}
