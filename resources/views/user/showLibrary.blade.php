@extends('base',['title'=>'All Business Card library'])

@section('content')

<div>
    <h1>All Business Card</h1>
</div>

<div class="col-12 show-cadeaux table-responsive">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Company Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>

        <tbody class="cadeaux-container">
          @foreach ($library as $item)
              <tr>
                  <td scope="row">{{$item->id}}</td>
                  <td scope="row">{{$item->name}}</td>
                  <td scope="row">{{$item->company_name}}</td>
                  <td scope="row">{{$item->email}}</td>
                  <td scope="row">{{$item->phone_number}}</td>
                  <td scope="row"><button>Follow</button></td>
              </tr>
          @endforeach
        </tbody>
      </table>
      <a class="btn btn-success" style="align-content: center" href="/user">Return to dashboard</a>
</div>
@endsection