<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Alert;
class UserController extends Controller
{
    //


    public function showUser()
    {   
        $user = User::all();
        return view('admin.showUser',['user'=>$user]);
    }

    public function addUser()
    {
        return view('register');
    }
    
    // public function postRegister(Request $request)
    // {
    //     $user = new User;
    //     $user->username = $request->username;
    //     $user->fullname = $request->fullname;
    //     $user->email = $request->email;
    //     $user->phonenumber = $request->phonenumber;
    //     $user->password = $request->password;
    //     $user->role = $request->role;
    //     $user->save();
    //     return redirect() -> route('showUser');
    // }
    
    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.editUser',['user'=>$user]);
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect() -> route('showUser');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/showUser');
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $arr = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($arr)) {
            
            if(Auth::user()->role == 'admin') {
                $success = 'Login successfully ';
                alert()->success('Post Created', 'Successfully');
                return redirect()->route('dashboard')->with('success', $success) ;
            } else {
                return redirect()->route('index');
            }
            // return redirect()->route('index')->with('success', $success);
        } else {
            return redirect()->back()->with('error', 'Login Failed');
        }
    }

    public function logout()
    {
        return redirect()->route('index');
    }

    public function register() 
    {
        return view('register');
    }

    public function postRegister(Request $request) 
    {
        $user = new User;
        $user->username = request('username');
        $user->fullname = request('fullname');
        $user->email = request('email');
        $user->phonenumber = request('phonenumber');
        $user->password = Hash::make('password');
        // $user->role = request('role');
        $user->save();
        return redirect()->route('login');
    }
}
