@extends('layouts.master')
@section('content')
    <main role="main" class="container">
        <img src="{{ asset('/storage/images/Tsugumi💙.png') }}" height="250px" alt="" >
        <div class="col-md-4 mt-5">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('upload-file') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Upload</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mt-2">Submite</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <a href="{{route('download')}}" class="btn btn-primary mt-3" >Downlad Image</a>
    </main>
@endsection
