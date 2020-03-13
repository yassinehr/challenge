@extends('layouts.app')

@section('title', 'Submits List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Challenge List</h1>
        </div>
    </div>

        <div class="row">
            <div class="col-12">
                <p><a href="{{ route('submits.create') }}">Add New Submit</a></p>
            </div>
        </div>
    @can('restore', App\Challenge::class)

    @foreach($challenges as $challenge)
        <div class="row">
            <div class="col-2">
                {{$challenge->userInformation($challenge->pivot->user_id)->name }}
            </div>
            <div class="col-4">
                    <a >
                        {{ $challenge->title }}
                    </a>


            </div>
            <div class="col-2">{{ $challenge->description }}</div>
            <div class="col-2">{{ $challenge->deadline }}</div>
            <div class="col-2">{{ $challenge->pivot->code }}</div>

        </div>
    @endforeach
    @endcan


    @can('create', App\Challenge::class)

    @foreach($challenges as $challenge)
        <div class="row">
            <div class="col-2">
                {{$challenge->user_id }}
            </div>

            <div class="col-2">{{ $challenge->challenge_id }}</div>
            <div class="col-2">{{ $challenge->code }}</div>

        </div>
    @endforeach
    @endcan


@endsection
