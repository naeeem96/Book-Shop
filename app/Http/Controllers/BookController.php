<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    
    public function search(Request $request){
       if(!Auth::check()) return redirect()->route('home');
       $search_txt = $request->search;
       $books = Book::orderBy('id')
               ->where('book_name', 'like', '%'.$search_txt.'%')
               ->orWhere('book_author', 'like', '%'.$search_txt.'%')
               ->orWhere('book_publisher', 'like', '%'.$search_txt.'%')
               ->orWhere('book_language', 'like', '%'.$search_txt.'%')
               ->get();
       return view('searchBook')->withBooks($books);
    }

    public function index(){
       if(!Auth::check()) return redirect()->route('home');
       //$books = Book::all();
       $books = Book::orderBy('id')->paginate(4);
       return view('index')->with('books', $books);
    }

    public function create(){
       if(!Auth::check()) return redirect()->route('home');
       return view('create');
    }

    public function store(Request $request){
       if(!Auth::check()) redirect()->route('login');
       $book = new Book;
       $book->book_name = $request->book_name;
       $book->book_author = $request->book_author;
       $book->book_publisher = $request->book_publisher;
       $book->book_page = $request->book_page;
       $book->book_edition = $request->book_edition;
       $book->book_language = $request->book_language;
       $book->book_price = $request->book_price;
       $book->save();
       return redirect()->route('index');
    }

    public function delete($id){
       if(!Auth::check()) return redirect()->route('home');
       $book = Book::find($id);
       $book->delete();
       return redirect()->route('index');
    }
    public function edit($id){
       if(!Auth::check()) return redirect()->route('home');
       $book = Book::find($id);
       return view('edit')->with('book', $book);
    }
    public function update(Request $request, $id){
       if(!Auth::check()) return redirect()->route('home');
       $book = Book::find($id);
       $book->book_name = $request->book_name;
       $book->book_author = $request->book_author;
       $book->book_publisher = $request->book_publisher;
       $book->book_page = $request->book_page;
       $book->book_edition = $request->book_edition;
       $book->book_language = $request->book_language;
       $book->book_price = $request->book_price;
       $book->save();
       return redirect()->route('index');
    }
}
