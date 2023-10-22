<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // MENAMPILKAN BUKU
    public function index()
    {
        // mengambil data dari tabel buku
        $books = Book::all();
        // mengirim data buku ke view books
        return view('books',['books' => $books]);
    }

    // TAMBAH BUKU
    public function add()
    {   
        // mengambil data dari tabel kategori
        $categories = Category::all();
        // mengirim data kategori ke view book-add
        return view('book-add',['categories' => $categories]);
    }

    // ACTION TAMBAH BUKU
    public function store(Request $request)
    {   
        // validasi form
        $validated = $request -> validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255'
        
        ]);

        $newName ='';
        // jika image diupload
        if ($request->file('image')) {
            // mengambil extention dari gambar yang diupload
            $extension = $request->file('image')->getClientOriginalExtension();
            // nama image akan diambil dari judul buku digabung dengan data kapan diupload + ekstension
            $newName = $request->title.'-'.now()->timestamp.'-'.$extension;
            // upload file dengan menggunakan storeAS simpan ke folder cover file $newname
            $request->file('image')->storeAs('cover',$newName);
        }

        // masukkan ke database
        $request['cover'] = $newName;
        // data yang akan ditambah disimpan di $request dan akan diinsert ke tabel buku dengan method create()
        $book = Book::create($request->all());
        // data yang berubah akan disinkronkan berdasarkan $request
        $book-> categories()->sync($request->categories);
        return redirect('books')->with('status', 'Book Added Succesfully');

    }

    // EDIT BUKU
    public function edit($slug)
    {
        // mendapatkan data buku yang diedit
        $book = Book::where('slug', $slug)->first();
        // menambil data dari tabel kategori
        $categories = Category::all();
        // mengirim data kategori dan buku ke view book-edit
        return view('book-edit', ['categories' => $categories, 'book' => $book]);
    }
    
    // ACTION EDIT BUKU
    public function update(Request $request, $slug)        
    {
        
        $newName ='';
        if ($request->file('image')) {
            // mengambil extention dari gambar yang diupload
            $extension = $request->file('image')->getClientOriginalExtension();
            // nama image akan diambil dari judul buku digabung dengan data kapan diupload + ekstension
            $newName = $request->title.'-'.now()->timestamp.'-'.$extension;
            // upload file dengan menggunakan storeAS simpan ke folder cover file $newname
            $request->file('image')->storeAs('cover',$newName);
            $request['cover'] = $newName;
        }

        // mendapatkan data buku yang diedit
        $book = Book::where('slug', $slug)->first();
        $book->update($request->all());
        
        // jika kategori ada
        if ($request->categories) {
            // maka akan dilakukan update data (sinkronisasi)
            $book->categories()->sync($request->categories);
            
        }
        return redirect('books')->with('status', 'Book Updated Succesfully');
        
    }
    
    // HAPUS BUKU
    public function delete($slug)
    {   
        // mendapatkan data buku yang dihapus
        $book = Book::where('slug',$slug)->first();
        // mengirim data buku ke view book-delete
        return view('book-delete',['book' =>$book]);
    }

    // ACTION HAPUS BUKU
    public function destroy($slug)
    {
        // mendapatkan data buku yang akan dihapus
        $book = Book::where('slug', $slug)->first();
        $book->delete();
        return redirect('books')->with('status', 'Book Deleted Succesfully');
    }

    // MENAMPILKAN BUKU YANG TERHAPUS
    public function deletedBook()
    {
        // mendapatkan data buku yang akan telah dihapus
        $deletedBooks = Book::onlyTrashed()->get();
        // mengirim data deletedBooks ke view book-deleted-list
        return view('book-deleted-list', ['deletedBooks' => $deletedBooks]);
    }

    // RESTORE : MENGEMBALIKAN BUKU YANG DIHAPUS
    public function restore($slug)
    {
        // mendapatkan data buku yang akan di restore setelah dihapus
        $book = Book::withTrashed()->where('slug', $slug)->first();
        $book->restore();
        return redirect('books')->with('status', 'Book Restored Succesfully');
        
    }
    
}