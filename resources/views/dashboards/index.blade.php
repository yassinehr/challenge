@extends('layouts.app')

@section('title', 'Challenge List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Ongoing Challenge List</h1>
        </div>
    </div>



    @foreach($challenges as $challenge)
        <div class="row">
            <div class="col-2">
                {{ $challenge->id }}
            </div>
            <div class="col-2">
                    <a >
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
