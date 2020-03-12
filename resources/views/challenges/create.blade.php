@extends('layouts.app')

@section('title', 'Add New Chalenge')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Chalenge</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('challenges.store') }}" method="POST" enctype="multipart/form-data">
                @include('challenges.form')

                <button type="submit" class="btn btn-primary">Add Challenge</button>
            </form>
        </div>
    </div>
@endsection
