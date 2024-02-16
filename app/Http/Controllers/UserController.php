<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Hash;


class UserController extends Controller
{
    // show registration form
    public function register()
    {
        return view('users.register');
    }

    //Create New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            
            'name' => ['required','max:50'],
            'email' => ['required','email', Rule::unique('listings', 'email')],
            'password' => 'required|confirmed|min:8|max:12',
            'password_confirmation' => 'required|min:8|max:12'
                  
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make ($request->password);
        $user->password_confirmation = Hash::make ($request->password_confirmation);
        $user->save();


        //Hash Password
        //$user ['password'] = bcrypt($user ['password']);

        //Create User
        //$user = User::create($user);

        //Login User
        //auth()->login($user);

        if($formFields){
            return redirect('/login')->with('message', 'User Registered, SignIn!');
        }
            return back()->with('fail', 'Something is wrong!!');
    }

    //Show Login Form
    public function login()
    {
        return view('users.login');
    }

    //Authenticate User
    public function authenticate(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($user)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are logged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    //Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }
}
