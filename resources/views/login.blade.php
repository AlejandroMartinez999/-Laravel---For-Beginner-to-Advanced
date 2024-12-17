@extends('layouts.master')

@section('content')
    {{-- <h1>Hello this is a login page</h1> --}}
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4 ">
            <h2 class="mb-4">Login</h2>
            @if($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{route('login.submit')}}" method="post">
                        @csrf
                        <div class="col-mb-2">
                            <label for=" " class="form-label">User Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for=" " class="form-label">User Email</label>
                            <input name="email" type="text" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for=" " class="form-label">User password</label>
                            <input name="password" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
