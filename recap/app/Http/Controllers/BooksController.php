<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function index(){
     $books=Books::all();
     return view('books.index',['books'=>$books]);
    }
    public function show($id){
     $book=Books::findOrFail($id);
     return view('books.show',['book'=>$book]);
    }
    public function destroy($id){
        $book=Books::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index')->with('msg','A book was deleted');
    }
    public function create(){
        return view('books.create');
    }
    public function store(){
        $book=new Books();
        $book->title=request('title');
        $book->author=request('author');
        $book->pages=request('pages');

        $book->save();

        return redirect()->route('books.index')->with('msg','A book was added');
    }
}
