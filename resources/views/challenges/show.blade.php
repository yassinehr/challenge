@extends('layouts.app')

@section('title', 'Details for ' . $challenge->title)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{ $challenge->title }}</h1>
            <p><a href="{{ route('challenges.edit', ['challenge' => $challenge]) }}">Edit</a></p>

            <form action="{{ route('challenges.destroy', ['challenge' => $challenge]) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>tittle</strong> {{ $challenge->title }}</p>
            <p><strong>description</strong> {{ $challenge->description }}</p>
            <p><strong>status</strong> {{ $challenge->status }}</p>
            <p><strong>start date</strong> {{ $challenge->deadline }}</p>
            <p><strong>deadline</strong> {{ $challenge->deadline }}</p>
        </div>
    </div>


@endsection
