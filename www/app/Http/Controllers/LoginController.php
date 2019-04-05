<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Authenticate function

    public function authenticate(Request $request){
        $rules = [
            'passcode' => ['required','numeric','exists:users,passcode'],
        ];

        $this->validate($request,$rules);

        $user = User::where("passcode", $request->passcode)->firstOrFail();

        Auth::loginUsingId($user->id);

        return redirect(route('live'));
    }
}
