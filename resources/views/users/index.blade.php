@extends('layouts.app')

@section('title', 'user List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>User List</h1>
        </div>
    </div>



    @foreach($users as $user)
        <div class="row">
            <div class="col-2">
                {{ $user->id }}
            </div>
            <div class="col-2">
                    <a href="{{ route('users.show', ['user' => $user]) }}">
                        {{ $user->name }}
                    </a>

            </div>
            <div class="col-2">{{ $user->email }}</div>
            <div class="col-2">{{ $user->authority }}</div>
            <div class="col-2">{{ $user->status }}</div>

        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{ $users->links() }}
        </div>
    </div>
@endsection
