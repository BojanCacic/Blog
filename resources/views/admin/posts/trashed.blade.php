@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                    <th>
                        Image    
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Restore
                    </th>
                    <th>
                        Delete 
                    </th>
                </thead>

                <tbody>
                    
                    @if($posts->count() > 0)
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <img src="{{ asset($post->featured) }}" alt="nema slike" style="width: 100px"></a> 
                                </td>
                                <td>
                                    {{$post->title}}
                                </td>
                                <td>
                                    Edit
                                </td>
                                <td>
                                    <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-success">Restore</a>
                                </td>
                                <td>
                                    <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>                           
                        @endforeach
                    
                    @else 
                        <tr>
                            <th colspan="5">No trashed posts.</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
