@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('post.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                </form>
            </div>
        </div>
    </div>

@endsection