@extends('layouts.master')

@section('content')
    <main role="main" class="container">
        <h1 class="mt-5 text-danger">Home</h1>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis
        earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.

        <div class="row mt-5">
            @foreach ($blogs as $blog)
            @if($blog['status']==1)


            {{-- @for($i=0;$i<count($blogs);$i++) --}}
            <div class="col-md-4">


                <div class="card">
                    <div class="card-body">
                        <h2>
                            {{$blog['title']}}
                            {{-- {{$blogs[$i]['title']}} --}}

                        </h2>
                        <p>
                            {{-- {{$blogs[$i]['body']}} --}}
                            {{$blog['body']}}

                        </p>
                    </div>

                </div>
            </div>
            @else
            <div class="col-md-4">


                <div class="card">
                    <div class="card-body">
                        <h2>
                            {{$blog['title']}}
                            {{-- {{$blogs[$i]['title']}} --}}

                        </h2>
                        <p>
                            {{-- {{$blogs[$i]['body']}} --}}
                            {{$blog['body']}}
                            <div class="btn-sm btn-warning">pending</div>
                        </p>
                    </div>

                </div>
            </div>
            @endif
            @endforeach
            {{-- @endfor --}}
        </div>
    </main>
@endsection
