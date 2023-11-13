<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\Authentication\SignupRequest;
use App\Http\Requests\Authentication\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Exception;


class AuthenticationController extends Controller
{
    public function signUpForm()
    {
        return view('authentication.register');
    }
    public function signUpStore(SignupRequest $request)
    {
        try {
            $user = new User;
            $user->name_en = $request->Fullname;
            $user->contact_no_en = $request->contact_on_en;
            $user->email = $request->EmailAddress;
            $user->password = Hash::make($request->password);
            $user->role_id = 4;
            dd($request->all());
            if ($user->save()) {
                return redirect('login')->with('success', 'Successfully Registered');
            } else {
                return redirect('login')->with('danger', 'Please try again');
            }
        } catch (Exception $e) {
            dd($e);
            return redirect('login')->with('danger', 'Please try again');
        }
    }

    public function signInForm()
    {
        return view('authentication.login');
    }

    public function signInCheck(SigninRequest $request)
    {
        try {
            $user = User::where('contact_on_en', $request->username)->orWhere('email', $request->username)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $this->setSessin($user);
                    return redirect()->route('dashboard')->with('success', 'Successfully login');
                } else {
                    return redirect()->route('login')->with('error', 'Your phone number or password is wrong!');
                }
            } else {
                return redirect()->route('login')->with('error', 'your phone number or password is wrong!');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->route('login')->with('error', 'Your phone nember or password is Wrong!');
        }
    }

    public function setSession($user)
    {
        return request()->session()->put([
            'userId' => encryptor('encrypt', $user->id),
            'userName' => encryptor('encrypt', $user->name),
            'role' => encryptor('encrypt', $user->role->type),
            'roleIdentity' => encryptor('encrypt', $user->role->identity),
            'language' => encryptor('encrypt', $user->language),
            'image' => $user->image ?? 'no-image.png'
        ]);
    }
    public function signOut()
    {
        request()->session()->flush();
        return redirect('login')->with($this->resMessageHtml(false, 'error', currentUserId()));
    }
}
?>