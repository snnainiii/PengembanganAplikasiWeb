@extends('layouts.mainlayout')

@section('title', 'Banned Users')


@section('content')
    <h1>Banned Users List</h1>
    <div class="mt-2 d-flex justify-content-end">
        <a href="/users" class="btn btn-secondary me-3">Back</a>
    </div>

    {{-- flash message --}}
    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bannedUsers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>
                            @if ($item->phone)
                                {{  $item->phone }}
                            @else 
                                -
                            @endif
                        </td>
                        <td>
                            <a href="/user-restore/{{ $item->slug }}" class="btn btn-danger">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
