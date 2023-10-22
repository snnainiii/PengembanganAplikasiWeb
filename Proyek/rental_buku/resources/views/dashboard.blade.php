@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h1>Hallo, {{ Auth::user()->username }}</h1>

    <div class="row my-5">
        <div class="col-lg-4" >
            <div class="card-data book" style="border-radius: 20px">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-album"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Books</div>
                        <div class="card-count">{{ $book_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data category" style="border-radius: 20px">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-check"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Categories</div>
                        <div class="card-count">{{ $category_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user" style="border-radius: 20px">
                <div class="row">
                    <div class="col-6"><i class="bi bi-person-fill-gear"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Users</div>
                        <div class="card-count">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
