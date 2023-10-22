@extends('layouts.nomor1_main')

@section('content')
    <div class="container">
        <h2 style="color :#052c65">Data Mahasiswa</h2>
        <br>
        <div class="row">
        @foreach ($mahasiswa as $mhs)
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-left">
                                    <h6 class="primary text-bold">{{ $mhs -> nama }}</h6>
                                    <h6 class="primary">{{ $mhs -> npm }}</h6>
                                    <h6 class="primary">{{ $mhs -> alamat }}</h6>
                                </div>
                                <div class="media-body text-right">
                                    <form action="/mahasiswa/{{ $mhs -> id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input class="rounded float-end" type="image" src="img/delete.png" value="Delete" alt="delete" width="20px">
                                    </form>
                                    <a href="/mahasiswa/{{ $mhs -> id }}/edit"><img src="img/edit.png" alt="edit" width="20px"></a> <br>
                                    <h6>{{ $mhs -> email }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            @endforeach
        </div>
    </div>
    <br><br><br><br>

    
@endsection
