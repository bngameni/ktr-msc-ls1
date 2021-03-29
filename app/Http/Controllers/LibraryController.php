<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Model\Library;

class LibraryController extends Controller
{
    //create Libraryy
    public function createLibrary(Request $request)
    {
        // Manage session of current user
        if (!empty($request->session()->get('username'))) {
            return view('user.createLibrary');
        }
        return redirect::to("/")->withSuccess('Oopps! You do not have access');
    }

    //save library
    public function saveLibrary(Request $request)
    {
        $request->validate([
            'name'=>'nullable',
            'user_name' => 'required',
            'company_name' => 'nullable',
            'email' => 'email|required',
            'phone_number' => 'numeric',
        ]);

        $exist = Library::where('name','=',$request->get('name'))
                        ->where('user_name','=',$request->get('user_name'))
                        ->where('company_name','=',$request->get('company_name'))
                        ->where('email','=',$request->get('email'))
                        ->where('phone_number','=',$request->get('phone_number'))
                                                    ->get()->first();

        if ($exist != null) {
            $message = 'these informations already exists';

            return redirect('/store-library')->with('message',$message);
        }
        else
        {
            $library = new Library([
                'name' => $request->get('name'),
                'user_name' => $request->get('user_name'),
                'company_name' => $request->get('company_name'),
                'email' => $request->get('email'),
                'phone_number' => $request->get('phone_number'),
            ]);

            $library->save();
            return redirect('/user')->with('success', 'New Business card saved!');
        }
                                            
    }

    public function showAllLibrary(Request $request)
    {
        // Manage session of current user
        if (!empty($request->session()->get('username'))) {

            $library = Library::paginate(15);
            return view('user.showLibrary', compact('library'));
        }
        return redirect::to("/")->withSuccess('Oopps! You do not have access');
    }
}
