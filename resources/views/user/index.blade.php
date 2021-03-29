@extends('base',['title'=>'dashboard'])


@section('content')

{{-- Nav bar section for dashboard --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/user">Dashboard</a>
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
          <a class="nav-link" href="{{route('logout')}}" style="color: red">Logout</a>
        </li>
      </ul>
</nav>


{{-- Section for show all business card --}}
<div class="container" style="margin-top: 80px; text-align: center;">
    
  @if(session()->get('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}  
    </div><br />
  @endif

    <div class="row">
        <div class="col-6">
            <a class="btn btn-warning" href="/add-library">Add New Business Card to Library</a>
        </div>
        <div class="col-6">
            <a class="btn btn-warning" href="/show-library">See All Business Card on Library</a>
        </div>
    </div>
</div>

@endsection

