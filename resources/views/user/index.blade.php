@extends('base',['title'=>'dashboard'])


@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/user">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user">Edit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Show</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
      </ul>
</nav>

<div class="container" style="margin-top: 80px; text-align: center;">
    <div class="row">
        <div class="col-6">
            <a class="btn btn-warning" href="/user/add-library">Add New Library</a>
        </div>
        <div class="col-6">
            <a class="btn btn-warning" href="#">See All Library</a>
        </div>
    </div>
</div>

@endsection

