<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminsController extends Controller
{

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', '=', $request->username)->first();

        if($admin == '')
        {
            return back()->with('status', 'Invalid Username');
        }

        $username = $admin->username; 
        $password = $admin->password;

        if($username != '' && password_verify($request->password, $password))
        {
            $admin->is_loggedIn = 1;
            $admin->save();
            return redirect()->route('dashboard');
        }

        return back()->with('status', 'Invalid Password');
    }

    public function edit($username)
    {
        return view('editPass', ['username' => $username]);
    }

    public function editStore(Request $request, $user)
    {
        if($request->username == $user)
        {
            $request->validate([
                // 'name' => 'required|string|max:255',
                // 'username' => 'required|string|max:255|unique:admins',
                'current_password' => 'required|string|max:255',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
        }
        else
        {
            $request->validate([
                // 'name' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:admins',
                'current_password' => 'required|string|max:255',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
        }
        
        $admin = Admin::where('username', '=', $user)->first();
        // dd($request->current_password);
        if(!password_verify($request->current_password, $admin->password))
        {
            // dd($user->password);
            Alert::error('Error', 'Wrong current password');
            return back();
        }

        $admin->username = $request->username;
        $admin->password = password_hash($request->password, PASSWORD_DEFAULT);
        $admin->save();

        Alert::success('Congrats', 'You\'ve successfully updated your credentials.');

        return redirect()->route('dashboard');
    }

    public function destroy($username)
    {
        $admin = Admin::where('username', '=', $username)->first();
        $admin->is_loggedIn = 0;
        $admin->save();

        return redirect()->route('adminLogin');
    }

    public function addUser()
    {
        return view('addUser');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Admin::create([
            'username' => $request->username,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
        ]);

        Alert::success('Success', 'User Added Successfully');

        return redirect()->route('dashboard');
    }

}
