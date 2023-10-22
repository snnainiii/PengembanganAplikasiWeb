<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Illuminate\Http\Request;

class RentLogController extends Controller
{
    // TAMPILAN HALAMAN RENT-LOGS
    public function index()
    {
        // mendapatkan user yang pinjam dan buku yang dipinjam
        $rentlogs = RentLogs::with(['user', 'book'])->get();
        // mengirimkan data rent_logs ke view rentlog
        return view('rentlog', ['rent_logs' => $rentlogs]);
    }
}