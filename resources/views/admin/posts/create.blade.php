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
                    <h1 class="card-title">Create a new post</h1>

                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title">
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
                        @foreach($tags as $tag)
                            <div class="form-group">                            
                                <div class="form-check">                                    
                                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{ $tag->tag }}
                                    </label>                            
                            </div>
                        @endforeach
                        <div class="form-group">
                            <label for="title">Content</label>
                            <textarea class="form-control" name="content" id="content" cols="5" rows="5"></textarea>                
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection

@section('Styles')
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('Scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>


<script>
$(document).ready(function() {
    $('#content').summernote();
  });</script>
@endsection