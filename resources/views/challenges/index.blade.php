@extends('layouts.app')

@section('title', 'Challenge List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Challenge List</h1>
        </div>
    </div>
    @can('create', App\Challenge::class)

        <div class="row">
            <div class="col-12">
                <p><a href="{{ route('challenges.create') }}">Add New Challenge</a></p>
            </div>
        </div>
        @endcan

        @include('challenges.filter')


    @foreach($challenges as $challenge)
        <div class="row">
            <div class="col-2">
                {{ $challenge->id }}
            </div>
            <div class="col-2">
                    <a href="{{ route('challenges.show', ['challenge' => $challenge]) }}">
                        {{ $challenge->title }}
                    </a>


            </div>
            <div class="col-2">{{ $challenge->description }}</div>
            <div class="col-2">{{ $challenge->status }}</div>

            <div class="col-2">{{ $challenge->start }}</div>

            <div class="col-2">{{ $challenge->deadline }}</div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{ $challenges->links() }}
        </div>
    </div>
@endsection
