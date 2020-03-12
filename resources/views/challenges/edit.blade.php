@extends('layouts.app')

@section('title', 'Edit Details for ' . $challenge->title)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{ $challenge->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('challenges.update', ['challenge' => $challenge]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('challenges.form')

                <button type="submit" class="btn btn-primary">Save challenge</button>
            </form>
        </div>
    </div>
@endsection
