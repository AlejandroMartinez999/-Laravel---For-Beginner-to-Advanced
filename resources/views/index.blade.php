@extends('layouts.master1')

@section('content')
    {{-- <center>
    <h1>hello this is index page</h1>
    <img src="{{ asset('/storage/images/tsugumi💙.png') }}" alt="">

</center> --}}
    <div class="main-content mt-5">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">

                        all post
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                            @can('create', \App\Models\posts1::class)


                            <a class="btn btn-success mx-1" href="{{ route('posts.create') }}">Create</a>
                        @endcan
                        @can('delete_post')
                            <a class="btn btn-warning mx-1" href="{{ route('posts.trash') }}">Trash</a>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead background-color="#f2f2f2">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width:10%">Image</th>
                            <th scope="col" style="width:20%">Title</th>
                            <th scope="col" style="width:30%">Description</th>
                            <th scope="col" style="width:10%">Category</th>
                            <th scope="col" style="width:10%">Publish Date</th>
                            <th scope="col" style="width:20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ $post->id }}</td>
                                <td>
                                    <img src="{{ asset($post->image) }}" alt="" width="80px">
                                    {{-- <img src="{{asset(uploads/1734983532_tsugumi___nisekoi_by_taigalife_d8agjyl-pre.jpg)}}" --}}
                                    {{-- alt="" width="80px"> --}}
                                </td>
                                <td>{{ $post->title }} </td>
                                <td>{{ $post->description }}

                                <td>{{ $post->category1->name }}</td>
                                <td> {{ date('d-m-y', strtotime($post->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-success">show</a>
                                    {{-- @can('edit_post') --}}
                                    @can('update', $post)
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    @endcan
                                    {{-- <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </a> --}}
                                    @can('delete', $post)
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
