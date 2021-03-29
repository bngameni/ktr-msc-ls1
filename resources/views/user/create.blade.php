@extends('base',['title'=>'Create User'])

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Create new account</h1>
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

         <form method="post" action="{{route('user.store')}}">
             @csrf
             <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required/>
             </div>

             <div class="form-group">
                <label for="user_name">Username:</label>
                <input type="text" class="form-control" name="user_name" required>
            </div>
            
            <div class="form-group">
                <label for="name">Company Name:</label>
                <input type="text" class="form-control" name="company_name"/>
            </div>

             <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="text" class="form-control" name="email"/>
             </div>
             
             <div class="form-group">
                <label for="email">Phone number:</label>
                <input type="phone" class="form-control" name="phone_number"/>
            </div>
     
            
             <div class="form-group">
                <label for="email">Password :</label>
                <input type="password" class="form-control" name="password"/>
            </div>

            <div class="form-group">
                <label for="email">Confirm Password :</label>
                <input type="password" class="form-control" name="cpassword"/>
            </div>


             <button type="submit" class="btn btn-success">Signin</button>
             <input type="reset" class="btn btn-danger" value="Cancel">
         </form>
     </div>
     <span>Already member ??, Click here for <a href="/">Login</a></span>
   </div>
   </div>

@endsection