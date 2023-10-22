<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // MENAMPILKAN DATA KATEGORI
    public function index()
    {   
        // mengambil data dari tabel kategori
        $categories = Category::all(); 
        
        // mengirim data kategori ke view categories
        return view('categories',[
            'categories' => $categories
        ] );
    }


    // TAMBAH KATEGORI
    public function add()
    {   
        return view('category-add');
    }


    // ACTION TAMBAH KATEGORI
    public function store(Request $request) 
    // menangkap data dari form menggunakan Request $request
    {   
        // validasi form 
        $validated = $request -> validate([
            'name' => 'required|unique:categories|max:100',
        ]);
        
        // data yang akan ditambah disimpan di $request dan akan diinsert ke tabel kategori dengan method create()
        $category = Category::create($request->all());
        return redirect('categories')->with('status', 'Category Added Succesfully');
    }


    // EDIT KATEGORI
    public function edit($slug)
    // menangkap data dari form menggunakan $slug
    {   
        // mendapatkan data kategori yang akan diedit
        $category = Category::where('slug', $slug) ->first();
        
        // mengirim data kategori ke view category-edit
        return view('category-edit', ['category' => $category]);
    }

    // ACTION EDIT KATEGORI
    public function update(Request $request, $slug)
    {
        // validasi form
        $validated = $request -> validate([
            'name' => 'required|unique:categories|max:100',
        ]);
        
        // mendapatkan data kategori yang akan diedit
        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('categories')->with('status', 'Category Updated Succesfully');
    }
    
    
    // HAPUS KATEGORI
    public function delete($slug)
    {   
        // mendapatkan data kategori yang akan diedit
        $category = Category::where('slug', $slug)->first();
        
        // mengirim data kategori ke view category-delete
        return view('category-delete', ['category' => $category]);
        
    }

    
    // ACTION HAPUS KATEGORI
    public function destroy($slug)
    {
        // mengambil data kategori yang akan dihapus
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('categories')->with('status', 'Category Deleted Succesfully');
    }

    
    //MENAMPILKAN KATEGORI YANG SUDAH TERHAPUS
    public function deletedCategory()
    {
        // mendapatkan data ketegori yang akan telah dihapus
        $deletedCategories = Category::onlyTrashed()->get();
        // mengirim data kategori terhapus ke view category-deleted-list
        return view('category-deleted-list', ['deletedCategories' => $deletedCategories]);
    }


    // RESTORE : MENGEMBALIKAN KATEGORI YANG DIHAPUS
    public function restore($slug)
    {
        // mendapatkan data kategori yang akan di restore setelah dibanned
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('categories')->with('status', 'Category Restored Succesfully');
        
    }
}