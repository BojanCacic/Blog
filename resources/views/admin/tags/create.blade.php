@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('admin.includes.errors')

            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Create a new tag</h1>

                    <form action="{{route('tag.store')}}" method="post" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Tag</label>
                            <input type="text" class="form-control" name="tag">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type='submit'>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection