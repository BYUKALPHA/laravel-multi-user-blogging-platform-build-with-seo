@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{route('categories.create')}}" class="btn btn-success float-right">Add category</a>
</div>

    <div class="card card-default">
        <div class="card-header">Categories</div>
        <div class="card-body">


        </div>
    </div>

    @endsection
