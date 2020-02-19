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
                            <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-success">Restore</a>
                         </td>
                         <td>
                            <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
                         </td>
                     </tr>
                         
                     @endforeach                 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
