@extends('layouts.app')

@section('title', 'Add New Chalenge')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Submit</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('submits.store') }}" method="POST" enctype="multipart/form-data">
                @include('submits.form')

                <button type="submit" class="btn btn-primary">Add Submits</button>
            </form>
        </div>
    </div>
@endsection
