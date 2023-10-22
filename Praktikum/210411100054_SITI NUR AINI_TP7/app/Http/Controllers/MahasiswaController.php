<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function data_mhs() {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.nomor2_data_mhs', compact(['mahasiswa']),
        ["title" => "Data Mahasiswa"]
    );
    }

    public function create() {
        return view('mahasiswa.nomor2_create',
        ["title" => "Input Data"]
    );}

    public function store(Request $request) {
        // dd($request->except(['_token', 'submit']));
        Mahasiswa::create($request->except(['_token', 'submit']));
        return redirect('/mahasiswa');
    }
    
    public function edit($id) {
        $mhs = Mahasiswa::find($id);
        return view('mahasiswa.nomor2_edit', compact(['mhs']),
        ["title" => "Edit Data Mahasiswa"]
    );
    }
    
    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id);
        $mhs -> update($request->except(['_token', 'submit']));
        return redirect('/mahasiswa');
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs -> delete();
        return redirect('/mahasiswa');

    }

    public function about() {
        return view('mahasiswa.nomor2_about', 
        ["title" => "About Me"]
        );
    }

}