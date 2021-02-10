@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                

                    <div class="card post">
                        <div class="card-header">
                            <strong>Titolo: {{ $post->title }}</strong>
                            
                        </div>
                        <div class="card-body">
                            <strong>Descrizione: </strong>
                            <br>
                            {{ $post->postInformation->description }}

                            
                        </div>
                        <div class="card-footer">
                            <div>
                                <strong>Categoria: </strong>
                                {{ $post->category->title }}
                            </div>
                            <div>
                                <strong>Autore: </strong>
                                {{ $post->user->name }}
                            </div>
                            <div>
                                <strong>Tags: </strong>
                                @foreach ($post->tags as $tag)
                                    {{ $tag->name }}
                                @endforeach
                            </div>
                        </div>
                    </div>

                
            </div>
        </div>
    </div>
@endsection