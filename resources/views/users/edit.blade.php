@extends('layouts.app')

@section('title', 'Edit Details for ' . $user->title)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{ $user->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('users.update', ['user' => $user]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('users.form')

                <button type="submit" class="btn btn-primary">Save User</button>
            </form>
        </div>
    </div>
@endsection
