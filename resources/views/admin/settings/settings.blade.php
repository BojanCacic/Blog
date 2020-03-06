@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('admin.includes.errors')

            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Edit blog settings</h1>

                    <form action="{{route('settings.update')}}" method="post" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Site name</label>
                        <input type="text" class="form-control" value="{{ $settings->site_name}}" name="site_name">
                        </div>
                        <div class="form-group">
                            <label for="name">Adress</label>
                        <input type="text" class="form-control" value="{{ $settings->address }}" name="address">
                        </div>
                        <div class="form-group">
                            <label for="name">Contact number</label>
                        <input type="text" class="form-control" value="{{ $settings->contact_number }}" name="contact_number">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                        <input type="email" class="form-control" value="{{ $settings->contact_email }}" name="contact_email">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type='submit'>Update site settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection