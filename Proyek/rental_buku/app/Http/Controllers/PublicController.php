<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // TAMPILAN HALAMAN PUBLIC
    public function index(Request $request)
    {   
        // pencarian buku berdasarkan  judul
        if ($request->title) {
            $books = Book::where('title', 'like', '%'.$request->title.'%')->get();

        }
        // jika tidak melakukan pencarian maka semua buku akan ditampilkan
        else{
            $books = Book::all();
        }
        
        // mengirimkan data buku ke view book-list
        return view('book-list', ['books' => $books]);
    }
}