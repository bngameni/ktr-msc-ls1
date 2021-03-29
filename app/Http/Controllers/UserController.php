<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) {
            return view('user.index');
        }

        return redirect::to("/")->withSuccess('Oopps! You do not have access');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'user_name' => 'required',
            'company_name' => 'nullable',
            'email' => 'email',
            'phone_number' => 'numeric',
            'password' => 'required',
            'cpassword' => 'required_with:password|same:password',

        ]);

        $exist = User::where('user_name','=',$request->get('user_name'))->get()->first();

        if ($exist != null) {
            $message = 'username '.$request->get('user_name').' already exists';

            return redirect('/user/create')->with('message',$message);
        }
        else
        {
            $user = new User([
                'name' => $request->get('name'),
                'user_name' => $request->get('name'),
                'company_name' => $request->get('company_name'),
                'email' => $request->get('email'),
                'phone_number' => $request->get('phone_number'),
                'password' => bcrypt($request->get('password')),
            ]);
            $user->save();
            return redirect('/')->with('success', 'New account saved!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }


    //--------------------- [ User login ] ---------------------
    public function userPostLogin(Request $request) {

        $request->validate([
            "user_name"       =>    "required",
            "password"        =>    "required"
        ]);

        $userCredentials = $request->only('user_name', 'password');

        // check user using auth function
        if (Auth::attempt($userCredentials)) {
            return redirect()->intended('user');
        }
        else {
            return back()->with('error', 'Whoops! invalid username or password.');
        }
    }


    //create Libraryy

    public function createLibrary()
    {
        return view('user.createLibrary');
    }
}
