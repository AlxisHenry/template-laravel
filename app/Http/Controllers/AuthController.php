<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use  Illuminate\Contracts\View\Factory;
use  \Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use \Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function SignIn(): Factory|View|Application
    {
        return view('auth', [
            'auth_type' => 'sign-in'
        ]);
    }

    public function SignUp(): Factory|View|Application
    {
        return view('auth', [
            'auth_type' => 'sign-up'
        ]);
    }

    public function LoginUser(array $user) {
        if (Auth::attempt($user)) {
            # todo => Create session
            # todo => Create a log in database
        }
    }

    public function RegisterUser(Request $request): RedirectResponse
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required|between:2,3|alpha',
            'email' => 'required|email',
            'password' => 'required|max:255'
        ]);

        $elements = $request->all();

        if ($validate->fails()) {
            var_dump('Test');
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput()
                ->with(compact('elements'));
        }

        return 'Helllo';

        # todo => Create new user in database
        # todo => Create a log in database
        # todo => Auth user
        # todo => Create session

    }

    public function Auth(string $type, Request $request)
    {

        $types = ['sign-in', 'sign-up'];

        if (in_array($type, $types)) {
            if ($type === 'sign-in')
            {
                $this->LoginUser([
                    'username' => $request->input('username'),
                    'password' => $request->input('password')
                ]);
            }
            elseif ($type === "sign-up")
            {
                $this->RegisterUser($request);
            }
        }
        else
        {
            return redirect()
                ->back()
                ->with('auth_url_error', true);
        }
    }
}
