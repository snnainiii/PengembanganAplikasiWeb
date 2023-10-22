@extends('layouts.nomor1_main')

@section('content')
    <h2 style="color :#052c65">Detail Data Mahasiswa</h2>
    <br>

    <form class="row g-3" method="post" action="/mahasiswa/{{ $mhs -> id }}">
        @method('put')
        @csrf
        <div class="col-md-6">
            <label for="inputnama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="inputnama" name="nama" value="{{ $mhs -> nama }}">
        </div>    
        <div class="col-md-6">
            <label for="inputemail" class="form-label"> Alamat Email</label>
            <input type="text" class="form-control" id="inputemail" name="email" value="{{ $mhs -> email }}">
        </div>
        <div class="col-md-6">
            <label for="inpunpm" class="form-label">NIM</label>
            <input type="text" class="form-control" id="inpunpm" name="npm" value="{{ $mhs -> npm }}">
        </div>
        <div class="col-md-6">
            <label for="inputalamat" class="form-label">Alamat Rumah</label>
            <input type="text" class="form-control" id="inputalamat" name="alamat" value="{{ $mhs -> alamat }}">
        </div>
        <div class="col-12 text-right">
            <br><br>
            <button type="submit" name="submit" value="submit "class="btn btn-dark" style="background-color :#052c65">Edit</button>
        </div>
    </form>
<br><br>


@endsection