@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('admin.includes.errors')

            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Create a new user</h1>

                    <form action="{{route('user.store')}}" method="post" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">User</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type='submit'>Add user</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection