@extends('layouts.app')



@section('content')
    <main style="width: 1200px; margin:0 auto">

            

          

        @if (isset($category))
            <div class="alert alert-info" role="alert">
            {{ $category->name }} ：{{ $category->description }}
            </div>
         @endif

         

        @if (count($articles))
        <ul class="list-unstyled">
            @foreach ($articles as $article)
            <li class="media">
                <div class="media-left">
                <a href="{{ route('users.show', [$article->user_id]) }}">
                    <img class="media-object img-thumbnail mr-3" style="width: 52px; height: 52px;" src="{{ $article->user->avatar }}" title="{{ $article->user->name }}">
                </a>
                </div>

                <div class="media-body">

                <div class="media-heading mt-0 mb-1">
                    <a href="{{ route('articles.show', [$article->id]) }}" title="{{ $article->title }}">
                    {{ $article->title }}
                    </a>
                
                </div>

                <small class="media-body meta text-secondary">

                
                    
                    <a class="text-secondary" href="{{ route('users.show', [$article->user_id]) }}" title="{{ $article->user->name }}">
                    
                    {{ $article->user->name }}
                    </a>
                    <span> • </span>
                    <a class="text-secondary" href="{{route('categories.show',$article->category_id)}}" title="{{ $article->category->name }}">
                        <i class="far fa-folder"></i>
                        {{ $article->category->name }}
                    </a>
                    <span> • </span>
                    <i class="far fa-clock"></i>
                    <span class="timeago" title="最后活跃于：{{ $article->updated_at }}">{{ $article->updated_at->diffForHumans() }}</span>
                </small>

                </div>
            </li>

            @if ( ! $loop->last)
                <hr>
            @endif

            @endforeach
        </ul>

        @else
        <div class="empty-block">暂无数据 ~_~ </div>
        @endif

        {{ $articles->links() }}
    </main>

@endsection
