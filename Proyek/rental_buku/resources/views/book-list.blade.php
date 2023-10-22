@extends('layouts.mainlayout')

@section('title', 'Books List')

@section('content')
    <form action="" method="get">
        <div class="row">

            {{-- pencarian berdasarkan judul --}}
            <div class="col-12 col-sm-6">
                <div class="input-group mb-3">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Search book's title" >
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </div>
    </form>

    <div class="my-5">
        <div class="row">
            @foreach ($books as $item)
                <div class="col-lg-3 col-md-4 col-sm-4 mb-3">
                    <div class="card h-100" >
                        <img src="{{ $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('img/cover.jpg')}}" class="card-img-top " draggable="false" style="height:300px" alt="..."> 
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->book_code }}</h5>
                            <p class="card-text">{{ $item -> title }}</p>
                            <p class="card-text text-end fw-bold {{ $item->status == 'in stock' ? 'text-success' : 'text-danger' }}">
                                {{ $item -> status }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
@endsection


