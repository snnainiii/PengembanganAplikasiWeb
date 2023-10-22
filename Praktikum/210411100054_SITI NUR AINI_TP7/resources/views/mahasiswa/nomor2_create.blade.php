@extends('layouts.nomor1_main')

@section('content')
    <h2 style="color :#052c65">Input Data Mahasiswa</h2>
    <br>
    <form class="row g-3" method="post" action="/mahasiswa/store">
        @csrf
        <div class="col-md-6">
            <label for="inputnama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="inputnama" name="nama">
        </div>
        <div class="col-md-6">
            <label for="inputemail" class="form-label"> Alamat Email</label>
            <input type="text" class="form-control" id="inputemail" name="email">
        </div>
        <div class="col-md-6">
            <label for="inputnpm" class="form-label">NIM</label>
            <input type="text" class="form-control" id="inputnpm" name="npm">
        </div>
        <div class="col-md-6">
            <label for="inputalamat" class="form-label">Alamat Rumah</label>
            <input type="text" class="form-control" id="inputalamat" name="alamat">
        </div>
        <div class="col-12 text-right">
            <br><br>
            <button type="submit" name="submit" value="submit "class=" btn btn-dark " style="background-color :#052c65">Submit Data</button>
        </div>
    </form>
<br><br><br>
@endsection