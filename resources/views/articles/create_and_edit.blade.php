@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="col-md-10 offset-md-1">
      <div class="card ">

        <div class="card-body">
          <h2 class="">
            <i class="far fa-edit"></i>
            @if($article->id)
            Editer votre article
            @else
            Créer un nouveau article
            @endif
          </h2>

          <hr>

          @if($article->id)
            <form action="{{ route('articles.update', $article->id) }}" method="POST" accept-charset="UTF-8">
              <input type="hidden" name="_method" value="PUT">
          @else
            <form action="{{ route('articles.store') }}" method="POST" accept-charset="UTF-8">
          @endif

              @csrf

              @include('shared.error')

              <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{ old('title', $article->title ) }}" placeholder="Titre" required />
              </div>

              <div class="form-group">
                <select class="form-control" name="category_id" required>
                  <option value="" hidden disabled selected>Catégorie</option>
                  @foreach ($errors as $value)
                  <option value="{{ $value->id }}">{{ $value->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <textarea name="content" class="form-control" id="editor" rows="6" placeholder="Au moins 3 caractères" required>{{ old('content', $article->content ) }}</textarea>
              </div>

              <div class="well well-sm">
                <button type="submit" class="btn btn-primary"><i class="far fa-save mr-2" aria-hidden="true"></i> Envoyer</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection
