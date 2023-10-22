<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\TryCatch;

class BookRentController extends Controller
{
    // MENAMPILKAN DATA USER DAN BUKU(SELECT2) PADA BOOK-RENT
    public function index()
    {
        // mendapatkan data user yang rolenya user dan statusnya aktif
        $users = User::where('id', '!=', 1)-> where('status', '!=', 'inactive')->get();
        // mengambil data dari tabel buku
        $books = Book::all();
        // mengirimkan data user dan buku ke view book-rent
        return view('book-rent',['users' => $users, 'books' => $books]);
    }

    // FORM PEMINJAMAN BUKU
    public function store(Request $request)
    {
        // mendapatkan data hari ini dengan format tahun bulan tanggal
        $request['rent_date'] = Carbon::now()-> toDateString();
        // rent_date ditambah 3 hari dengan format tahun bulan tanggal
        $request['return_date'] = Carbon::now()->addDay(3)->toDateString();
        
        // elequent untuk mendapatkan status buku dari buku yang dipilih
        $book = Book::findOrFail($request->book_id)->only('status');
        
        // jika status buku not available maka buku tidak dapat dipinjam
        if ($book['status'] != 'in stock') {
            Session::flash('message', 'Cannot rent, the book is not available');
            Session::flash('alert-class', 'alert-danger');
            return redirect('book-rent');
        }
        // jika status buku in stock maka dapat dipinjam
        else{
            // cek apakah user sedang pinjam 3 buku tapi belum dikembalikan
            $count = RentLogs::where('users_id', $request->users_id)->where('actual_return_date', null)->count();
            
            // jika user sudah pinjam lebih dari 3 buku
            if ($count >= 3) {
                Session::flash('message', 'Cannot rent, user has reach limit of book');
                Session::flash('alert-class', 'alert-danger');
                return redirect('book-rent');
            }
            else{
                try {
                    // jika berhasil update tabel rent_logs tapi gagal update tabel books maka akan dirollback
                DB::beginTransaction();
                // proses menambah ke tabel rent_log
                RentLogs::create($request->all());
                
                // proses update tabel book
                $book = Book::findOrFail($request->book_id);
                $book->status = 'not available';
                $book->save();
                DB::commit();
                
                // error notice muncul
                Session::flash('message', 'Rent book success');
                Session::flash('alert-class', 'alert-success');
                return redirect('book-rent');
                
                } catch (\Throwable $th) {
                    DB::rollBack();
                }
            }
            
        }
    }

    // MENAMPILKAN DATA USER DAN BUKU (SELECT2) PADA BOOK-RETURN
    public function returnBook()
    {
        // mendapatkan data user yang yang role nya user dan statusnya aktif
        $users = User::where('id', '!=', 1)-> where('status', '!=', 'inactive')->get();
        // mengambil data dari tabel buku
        $books = Book::all();
        // mengirimkan data user dan buku ke view book-rent
        return view('book-return', ['users' =>$users, 'books' => $books]);
    }

    // FORM PENGEMBALIAN BUKU
    public function saveReturnBook(Request $request)
    {
        // mendapatkan data user dan buku yang dipinjam dimana actual_return_date nya kosong
        $rent = RentLogs::where('users_id', $request->users_id)->where('book_id', $request->book_id)->where('actual_return_date', null);
        $renData = $rent->first();
        $countData = $rent->count();
        
        // user dan buku yang dipilih untuk di return benar , maka berhasil return book
        if ($countData == 1) {
            // kita akan return book
            $renData->actual_return_date = Carbon::now()-> toDateString();
            $renData->save();
            
            // error notica muncul
            Session::flash('message', 'The book is return successfully ');
            Session::flash('alert-class', 'alert-success');
            return redirect('book-return');
        }
        // user dan buku yang dipilih untuk di return salah, maka muncul error notice 
        else{
            // error notice muncul
            Session::flash('message', 'There is error in prosess');
            Session::flash('alert-class', 'alert-danger');
            return redirect('book-return');
        }
    }
}