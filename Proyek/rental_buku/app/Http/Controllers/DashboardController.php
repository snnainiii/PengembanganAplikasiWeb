<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // TAMPILAN HALAMAN DASHBOARD
    public function index()
    {
        // mendapatkan jumlah buku
        $bookCount = Book::count();
        // mendapatkan jumlah kategori
        $categoryCount = Category::count();
        // mendapatkan jumlah user
        $userCount = User::count();
        // mengirimkan data buku, kategori dan user ke view dashboard
        return view('dashboard', [
            'book_count' => $bookCount, 
            'category_count' => $categoryCount, 
            'user_count' => $userCount
        ]);
    }
}