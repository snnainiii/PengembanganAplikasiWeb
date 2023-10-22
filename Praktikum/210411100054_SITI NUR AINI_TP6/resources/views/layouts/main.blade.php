<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aini Blog | {{ $title }}</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    {{-- menambahkan kompopnen navbar --}}
    @include('partials/navbar')

    {{-- menambahkan isi web dari masing-masing page --}}
    <div class="content">
        @yield('content')
    </div>

</body>
</html>