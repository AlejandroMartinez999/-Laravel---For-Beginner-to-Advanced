{{-- @extends('layouts.master')
@section('content')
<main role="main" class="container">
<h1 class=" text-danger">contact page</h1>
</main>
@endsection --}}

{{-- <div class="">
    <h1>contact</h1>
    <x-button />
    <x-forms.button />
    <x-input-field/>
</div> --}}

@extends('layouts.master1')
@section('content')
    <div class="row">
        @foreach ($posts as $post)

        <x-post.index>
            <x-slot name="title">
                {{$post->title}}
            </x-slot>
            <x-slot name="description">
                {{$post->description}}
            </x-slot>
        </x-post.index>
        @endforeach
    </div>

    {{-- <x-button>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A ullam quis esse ad numquam rerum hic exercitationem adipisci consectetur. Assumenda ipsam corporis, ea enim odit quisquam vel veniam? Numquam, dolor.
    </x-button> --}}
@endsection
