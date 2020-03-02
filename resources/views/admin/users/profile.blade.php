@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('admin.includes.errors')

            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Edit your profile</h1>

                    <form action="{{route('user.profile.update')}}" method="post" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Username</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="name">New password</label>
                            <input type="password" class="form-control" name="password">
                        </div> 
                        <div class="form-group">
                            <label for="name">Upload new avatar</label>
                            <input type="file" class="form-control" name="avatar">
                        </div> 
                        <div class="form-group">
                            <label for="about">About you</label>
                            <textarea name="about" id="about" cols="5" rows="5" class="form-control"></textarea>
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