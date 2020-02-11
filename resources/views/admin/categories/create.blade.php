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
                    <h1 class="card-title">Create a new category</h1>

                    <form action="{{route('category.store')}}" method="post" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
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