<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
public function index()
{
    return view('index');
}
public function login()
{
    return view('login');

}
public function showlogin(Request $request)
{
  $credentials=$request->only('email','password') ;
    if(Auth::attempt($credentials))
      {
         $request->session()->regenerate();
          return redirect()->route('userhome');
       }
           return back()->withErrors([
            'emsil'=> 'credential donot match'
             ]);
}
public function userhome()
{
  return view('user_home');
}
public function view()
{
  $view=User::all();
  return view('view',compact('view'));

}
 public function user_profile()
    {
        $view = Auth::user();
        return view('user_profile', compact('view'));
    }
public function delete($id)
{
  User::find($id)->delete();
  return redirect()->route('view');
}
public function edit($id)
{
  $data=User::find($id);
  return view('edit',compact('data'));
  
}
public function update(Request $request,$id)
{
  $data=User::find($id);
  $request-> validate([
    'email'=>'email',
    'mobile'=>'max:10',
  ]);
  $data->name=$request->input('name');
  $data->email=$request->input('email');
  $data->password=$request->input('password');
  $data->place=$request->input('place');
  $data->update();
  return redirect()->route('view')->with('success','updated successfully');

}
}
