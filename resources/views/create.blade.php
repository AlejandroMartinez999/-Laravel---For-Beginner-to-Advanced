@extends('layouts.master1')

@section('content')
    {{-- <center>
    <h1>hello this is index page</h1>
    <img src="{{ asset('/storage/images/tsugumi💙.png') }}" alt="">


</center> --}}
    <div class="main-content mt-5">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger"> {{ $error }} </div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>
                            create post
                        </h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="{{ route('posts.create') }}">back</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="">Image</label>
                        <input type="file" name="image" id=""class='form-control'>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Title</label>
                        <input type="text" name="title" id=""class='form-control'>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Category</label>
                        <select name="Category_id" id="" class='form-control'>
                            <option value="">Select</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submite</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
