@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">

                        @if (isset($user))
                            Ciao {{ $user->name }}!
                        @else
                            Ciao utente!
                        @endif

                    </div>
                    
                </div>
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
                            <form action="" class="post-action">
                                <button type="submit" class="btn btn-outline-danger">Elimina</button>
                            </form>
                            <a class="post-action btn btn-outline-success" href="#" role="button">Modifica</a>
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