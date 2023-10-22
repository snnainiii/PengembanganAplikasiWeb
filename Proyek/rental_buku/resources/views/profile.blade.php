@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')

    <div class="mt-5">
        <h1>Hallo, {{ Auth::user()->username }}</h1> <br>
        <h3>Your Rent Log</h3>
        {{-- menggunakan components --}}
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>
@endsection
