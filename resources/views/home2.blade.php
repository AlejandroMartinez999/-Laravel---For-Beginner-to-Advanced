@extends('layouts.master')
@section('content')
<main role="main" class="container">
<div class="row mt-5">
    @foreach ($posts as $post)

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                {{-- *impresion de datos en la vista de tablas relacionadas --}}
                {{-- <h4>{{$user->name}}</h4>
                <p>{{$user->email}}</p>
                <p>{{$user->addres->address}}</p> --}}
                {{-- *impresion de datos en la vista de tablas relacionadas inversas--}}
                    {{-- <h4>{{$adress->user->name}}</h4>
                    <p>{{$adress->user->email}}</p>
                    <p>{{$adress->address}}</p> --}}
                {{-- *impresion de datos en la vista de tablas relacionadas 1 campo para todos --}}
                    {{-- <h4>{{$category->tittle}}</h4>
                    <p>{{$category->description}}</p>
                    <p>{{$category->categories->name}}</p> --}}

                    {{-- *impresion de datos en la vista de tablas relacionadas 1 campo para todos--}}
                    <h4>{{$post->tittle}}</h4>
                    <p>{{$post->description}}</p>
                    <ul>

                        @foreach ($post->tags as $tag )
                        <li>{{$tag->name}}</li>

                        @endforeach
                    </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
</main>
@endsection
