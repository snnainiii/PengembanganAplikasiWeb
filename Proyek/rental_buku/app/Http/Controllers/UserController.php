<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // MENAMPILKAN HALAMAN PROFILE DI USER
    public function profile()
    {
        // mendapatkan user yang meminjam dan buku yang dipinjam ke halaman profile sesuai users yang login
        $rentlogs = RentLogs::with(['user', 'book'])->where('users_id', Auth::user()->id)->get();
        // mengirimkan dara rent_logs ke view profile
        return view('profile',['rent_logs' => $rentlogs,]);
    }
    
    // MENAMPILKAN HALAMAN USER DI ADMIN/DASHBOARD
    public function index()
    {   
        // mendapakan user yang statusnya aktif dan rolenya 2
        $users = User::where('status','active')->where('role_id',2)->get();
        // mengirimkan data user ke view users
        return view('users',['users'=> $users]);
    }
    
    // PENGUNJUNG YANG BARU REGISTER/STATUS TIDAK AKTIF DATANYA AKAN DITAMPILKAN DI HALAMAN NEW REGISTERED USERS
    public function registeredUser()
    {   
        // mendapatkan user yang statusnya tidak aktif dan rolenya 2
        $registered = User::where('status','inactive')->where('role_id', 2)->get();
        // mengirimkan data registered ke view registered-user
        return view('registered-user',['registeredUsers' => $registered]);
    }

    // MENAMPILKAN DETAIL DARI USER
    public function userDetail($slug)
    {
        // mendapatkan data user yang akan akan ditampilakn detailnya
        $user = User::where('slug', $slug)->first();
        // mendapatkan user yang meminjam dan buku yang dipinjam ke halaman detail sesuai user yang dipilih
        $rentlogs = RentLogs::with(['user', 'book'])->where('users_id', $user->id)->get();
        // mengirimkan data user dan rentlogs ke view user-detail
        return view('user-detail',['user' =>$user, 'rent_logs' => $rentlogs]);
    }

    // UNTUK APPROVE USER YANG REGISTER
    public function approve($slug)
    {
        // mendapatkan data user yang akan di approve
        $user = User::where('slug', $slug)->first();
        // statusnya akan berubah dari incative menjadi active
        $user->status = 'active';
        // lalu simpan dengan method save()
        $user->save();
        
        return redirect('user-detail/'.$slug)->with('status', 'User Approved Succesfully');
    }

    // HAPUS USER
    public function delete($slug)
    {
        // mendapatkan data user yang akan dihapus
        $user = User::where('slug', $slug)->first();
        // mengirimkan dara user ke view user-delete
        return view ('user-delete',['user' => $user]);
    }

    // ACTION HAPUS USER
    public function destroy($slug)
    {
        // mendapatkan data user yang akan dihapus
        $user = User::where('slug', $slug)->first();
        // hapus data user dengan method delete()
        $user->delete();
        return redirect('users')->with('status', 'User Deleted Succesfully');
    }

    // MENAMPILKAN USER YANG DIBANNED
    public function bannedUser()
    {
        // mendapatkan data user yang telah di banned
        $bannedUsers = User::onlyTrashed()->get();
        // mengirimaknd ara bannedUsers ke view user-banned
        return view('user-banned',['bannedUsers' =>$bannedUsers]);
    }

    // RESTORE : MENGAMBALIKAN USER YAGN DIBANNED
    public function restore($slug)
    {
        // mendapatkan data user yang akan di restore setelah dibanned
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();
        return redirect('users')->with('status', 'User Restored Succesfully');
    }
}