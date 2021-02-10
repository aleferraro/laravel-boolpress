@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title" placeholder="Titolo" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select name="category" class="form-control" id="category">
                            <option>---</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div>Tags</div>
                        @foreach($tags as $tag)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tags" value="{{ $tag->id }}" name="tags[]">
                            <label class="form-check-label" for="tags">{{ $tag->name }}</label>
                          </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Salva Post</button>
                </form>
            </div>
        </div>
    </div>

@endsection