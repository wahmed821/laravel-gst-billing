<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function changePassword()
    {
        return view("user.change-password");
    }

    public function changePasswordSubmit(Request $request)
    {
        $user_id = Auth::user()->id;
        if (!Auth::attempt(['id' => $user_id, 'password' => $request->current_pass])) {
            return redirect()->back()->withError(__('Current password is wrong'));
        }

        if ($request->current_pass == $request->new_pass) {
            return redirect()->back()->withError(__('Current password and new password should be different'));
        }

        $user = new User;
        $user = $user::findOrFail($user_id);
        $user->password = Hash::make($request->new_pass);
        $user->update();

        return redirect()->back()->withStatus(__('Password has been successfully changed'));
    }
}
