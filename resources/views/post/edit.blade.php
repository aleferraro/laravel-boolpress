@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('post.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title" value="{{ old('title') ? old('title') : $post->title }}" placeholder="Titolo" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') ? old('description') : $post->postInformation->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select name="category" class="form-control" id="category">
                            <option>---</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ ($category->id == $post->category->id) ? 'selected' : '' }}>{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div>Tags</div>
                        @foreach($tags as $tag)
                        <div class="form-check form-check-inline">
                            <input 
                                class="form-check-input" 
                                type="checkbox" id="tags" 
                                value="{{ $tag->id }}" 
                                name="tags[]"

                                @foreach($post->tags as $postTag)
                                {{ ($tag->id == $postTag->id) ? 'checked' : '' }}
                                @endforeach
                            >
                            <label class="form-check-label" for="tags">{{ $tag->name }}</label>
                          </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Salva Post</button>
                    </form>
    
                </form>
            </div>
        </div>
    </div>

@endsection