@extends('layouts.app')

@section('content')

    <div class="card card-default">
        <div class="card-header"> Create Post </div>
        
        
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>

                    <input type="text" class="form-control" id="title" name="title">
                </div>


                <div class="form-group">
                    <label for="description">Description</label>

                    <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="content">content</label>

                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="published_at">published_at</label>

                    <input type="text" class="form-control" id="published_at" name="published_at">
                </div>

                <div class="form-group">
                    <label for="image">image</label>

                    <input type="file" class="form-control" id="image" name="image">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create Post</button>
                </div>
            </form>
        </div>
    </div>
    @endsection