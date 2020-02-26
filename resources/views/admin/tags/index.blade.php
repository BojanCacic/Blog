@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                    <th>
                        Tag name
                    </th>
                    <th>
                        Editing
                    </th>
                    <th>
                        Deleting
                    </th>
                </thead>

                <tbody>
                    @if($tags->count() > 0)
                        @foreach ($tags as $tag)
                            <tr>
                                <td>
                                    {{ $tag->tag }}
                                </td>
                                <td>
                                <a href="{{route('tags.edit', ['id' => $tag->id])}}" class="btn btn-xs btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('tags.delete', ['id' => $tag->id])}}" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach 
                        
                    @else 
                        <tr>
                            <th colspan="5">No tags found.</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
