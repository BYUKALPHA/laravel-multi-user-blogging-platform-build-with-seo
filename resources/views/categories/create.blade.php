@extends('layouts.app')

@section('content')



    <div class="card card-default">
        <div class="card-header">Add category</div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="name" >Name</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <button type="submit" class="btn btn-success">Add Category</button>
            </form>

        </div>
    </div>

    @endsection
