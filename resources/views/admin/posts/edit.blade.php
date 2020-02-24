@extends('layouts.app')

@section('content')

@if(count($errors) > 0){

    <ul class="list-group">
        @foreach ($errors->all() as $error)

        <li class="list-group-item text-danger">
            {{$error}}
        </li>

        @endforeach
    </ul>

}

@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Edit post {{ $post->title }}</h1>

                    <form action="{{route('post.update', ['id' => $post->id ])}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label for="featured">Featured image</label>
                            <input type="file"  class="form-control-file" name="featured">
                        </div>
                        <div class="form-group">
                            <label for="category">Select a category</label>
                            <select name="category_id" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Content</label>
                            <textarea class="form-control" name="content" id="content" cols="5" rows="5">{{ $post->content }}</textarea>                
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection