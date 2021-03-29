@extends('base',['title'=>'Admin'])

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">User dashboard Login</h1>
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
     
       @if(session()->get('success'))
        <div class="alert alert-success">
         {{ session()->get('success') }}  
        </div><br />
        @endif

        @if(session()->get('error'))
          <div class="alert alert-danger">
            {{ session()->get('error') }}  
          </div><br />
        @endif
      
         <form method="post" action="/post-login">
             @csrf
             <div class="form-group">
                 <label for="email">Username:</label>
                 <input type="text" class="form-control" name="user_name"/>
             </div>
                
             <div class="form-group">
                <label for="email">Password :</label>
                <input type="password" class="form-control" name="password"/>
            </div>

             <button type="submit" class="btn btn-primary">Login</button><br/>
             <span>Not yet member ??, Click here for <a href="{{route('user.create')}}">sign in</a></span>
         </form>
     </div>
   </div>
   </div>

@endsection