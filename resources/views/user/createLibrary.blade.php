@extends('base',['title'=>'new library'])

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Create new Business</h1>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif

       @if(session()->get('message'))
          <div class="alert alert-danger">
            {{ session()->get('message') }}  
          </div><br />
       @endif

       <form method="post" action="{{route('store-library')}}">
             @csrf
             <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"/>
             </div>

            <div class="form-group">
                <label for="name">Company Name:</label>
                <input type="text" class="form-control" name="company_name"/>
            </div>

             <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="text" class="form-control" name="email" required/>
             </div>
             
             <div class="form-group">
                <label for="email">Phone number:</label>
                <input type="phone" class="form-control" name="phone_number"/>
            </div>

            <input type="hidden" name="user_name" value="{{session()->get('username')}}">
             <button type="submit" class="btn btn-success">Save</button>
             <input type="reset" class="btn btn-danger" value="Cancel">
         </form>
     </div>
   </div>
   </div>

@endsection