@extends('layouts.app')

@section('title', 'Details for ' . $user->title)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{ $user->title }}</h1>
            <p><a href="{{ route('users.edit', ['user' => $user]) }}">Edit</a></p>

            <form action="{{ route('users.destroy', ['user' => $user]) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>name</strong> {{ $user->name }}</p>
            <p><strong>emaill</strong> {{ $user->email }}</p>
            <p><strong>status</strong> {{ $user->status }}</p>
            <p><strong>authority</strong> {{ $user->authority }}</p>
        </div>
    </div>


@endsection
