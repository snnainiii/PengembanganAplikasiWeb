<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> --}}

</head>

<body>
    <div class="main d-flex flex-column justify-content-between">
        
        <nav class="navbar navbar-dark navbar-expand-lg" style="background:#032033;">
            <div class="container-fluid">
                <a class="navbar-brand d-flex flex-column justify-content-center" href="/dashboard">✦ Rental Buku Niddle ✦</a>
            </div>
        </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo3">
                    @if (Auth::user())
                        @if (Auth::user()->role_id == 1) 
                            <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class ="active" @endif><i class="bi-grid"></i> &nbsp; Dashboard</a>
                            <a href="/users" @if (request()->route()->uri == 'users' ||request()->route()->uri == 'user-detail/{slug}'|| request()->route()->uri == 'registered-users'||request()->route()->uri == 'user-ban/{slug}' || request()->route()->uri == 'user-banned' )  class ="active" @endif><i class=" bi-person-fill-gear"></i> &nbsp; Users</a>
                            <a href="/books" @if (request()->route()->uri == 'books'||request()->route()->uri == 'book-add'|| request()->route()->uri == 'book-delete/{slug}'||request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-deleted' ) class ="active" @endif ><i class="bi-journal-album"></i> &nbsp; Books</a>
                            <a href="/categories" @if (request()->route()->uri == 'categories'||request()->route()->uri == 'category-add'|| request()->route()->uri == 'category-delete/{slug}'||request()->route()->uri == 'category-edit/{slug}' || request()->route()->uri == 'category-deleted' ) class ="active" @endif><i class="bi-list-check"></i> &nbsp; Category</a>
                            <a href="/" @if (request()->route()->uri == '/') class ="active" @endif><i class="bi-collection"></i> &nbsp; Book List</a>
                            <a href="/rentlog" @if (request()->route()->uri == 'rentlog') class ="active" @endif><i class="bi-pencil-square"></i> &nbsp; Rent Log</a>
                            <a href="/book-rent" @if (request()->route()->uri == 'book-rent') class ="active" @endif><i class="bi-calendar-check"></i> &nbsp; Book Rent</a>
                            <a href="book-return" @if (request()->route()->uri == 'book-return') class ="active" @endif><i class="bi-calendar-check-fill"></i> &nbsp; Book Return</a>
                            <a href="/logout"><i class="bi-box-arrow-right"></i> &nbsp; Logout</a>
                        @else
                            <a href="/profile" @if (request()->route()->uri == 'profile') class ="active" @endif ><i class="bi-person-rolodex"></i> &nbsp; Profile</a>
                            <a href="/" @if (request()->route()->uri == '/') class ="active" @endif><i class="bi-collection"></i> &nbsp; Book List</a>
                            <a href="/logout"><i class="bi-box-arrow-right"></i> &nbsp; Logout</a>
                        @endif
                    @else
                        <a href="/login"><i class="bi-person-fill-add"></i> &nbsp; Login</a>
                    @endif
                </div>
                <div  class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
</body>
</html>