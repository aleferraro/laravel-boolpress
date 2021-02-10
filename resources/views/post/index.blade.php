@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (isset($user))
                    <a class="post-action btn btn-outline-success" href="{{ route('post.create') }}" role="button">Crea Nuovo Post</a>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)

                    <div class="card post">
                        <div class="card-header">
                            <strong>{{ $post->title }}</strong>
                            @if (isset($user))
                                <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="post-action">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-outline-danger">Elimina</button>
                                </form>
                                <a class="post-action btn btn-outline-primary" href="#" role="button">Modifica</a>
                            @endif
                        </div>
                        <div class="card-body">
                            {{ $post->postInformation->description }}

                            <a href="{{ route('post.show', $post->id) }}" class="post-action">Vedi Dettagli</a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection