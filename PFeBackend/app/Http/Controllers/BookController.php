<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Book;
use App\models\Avi;



class BookController extends Controller
{
    //
    function list(){
        return Book::all();
    }
    function search($key)
    {
        // return Product::where('name',$key)->get();

        return Book::where('titre','like',"%$key%")->get();
        
        // return Product::find($id);
    }
    function categoryFound($key)
    {
        // return Product::where('name',$key)->get();

        return Book::where('category','like',"%$key%")->get();
        
        // return Product::find($id);
    }
     function filterByPrice($q){
        // $sort = $request->input('sort_order');
        if ($q === 'asc') {
            $books = Book::orderBy('price', 'asc')->get();
        } elseif ($q === 'desc') {
            $books = Book::orderBy('price', 'desc')->get();
        } else {
            $books = Book::all();
        }
    
    return $books;
}
    function groupByCategory($category){
        // $category = $request->input('category');
        
        if ($category) {
            $books = Book::where('category', $category)->get();
        } else {
            $books = Book::all();
        }

        return $books;
    }
    function format($format){
        if ($format) {
            $books = Book::where('format', $format)->get();
        } else {
            $books = Book::all();
        }

        return $books;
    }
    function findBook($id)
    {
        // return $id;
        // return Product::where('name',$key)->get();

        return Book::where('id','=',$id)->get();
        
        // return Product::find($id);
    }
     function avisBook($book){
        return Avi::where('book_id','=',$book)->get();
    }
    function BookCatFind($key){
        // return Book::where('category',$cat);
        // return Book::where('category', $cat)->get();
        //  return "hi";
        return Book::where('category','like',"%$key%")->get();
    }
  
}