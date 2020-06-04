@extends('layouts.app')



@section('content')

<main style="width: 1200px; margin:0 auto">

<div class="row">

  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="card ">
      <img class="card-img-top" src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" alt="{{ $user->name }}">
      <div class="card-body">
            <h5><strong>Profil</strong></h5>
            <p>{{$user->introduction}} </p>
            <hr>
            <h5><strong>Date d'inscription</strong></h5>
            <p>{{$user->created_at}}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="card ">
      <div class="card-body">
          <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
          <a style="margin-top: 20px" class="btn btn-dark" href="{{route('users.edit',Auth::id())}}" role="button">Modifier votre informations</a>
          <a style="margin-top: 20px" class="btn btn-dark" href="{{route('password',Auth::id())}}" role="button">Modifier votre mot de passe</a>
      </div>
    </div>
    <hr>

    
    <div class="card ">
      <div class="card-body">
        <h4> Votre articles publiés</h4>
        @include('users.articles', ['articles' => $user->articles()->recent()->paginate(5)])


      </div>
    </div>

  </div>
</div>
</main>
@endsection