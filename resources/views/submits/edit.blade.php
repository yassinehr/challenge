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
            <form action="{{ route('submits.update', ['code' => $code],['code' => $code]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('submits.form')

                <button type="submit" class="btn btn-primary">Save challenge</button>
            </form>
        </div>
    </div>
@endsection
