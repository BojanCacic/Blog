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
                            <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info">Edit</a>
                         </td>
                         <td>
                         <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger">Trash</a>
                         </td>
                     </tr>
                         
                     @endforeach                 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
