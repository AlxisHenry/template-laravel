<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use  Illuminate\Contracts\View\Factory;
use  Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function __construct()
    {
        # AuthController will be use AuthSystem middleware for all routes where he's called
        $this->middleware('auth.system');
    }

    /*
     * @Route("/sign-in")
     * */
    public function SignIn(): Factory|View|Application
    {
        return view('auth', [
            'auth_type' => 'sign-in'
        ]);
    }

    /*
     * @Route("/sign-up")
     * */
    public function SignUp(): Factory|View|Application
    {
        return view('auth', [
            'auth_type' => 'sign-up',
            'password_min_val' => $this->passwordMinLength()
        ]);
    }


    /*
     * Globals functions for Auth system
     * */

    public function passwordMinLength():int {
        # Get the min length of password in register form
        return 8;
    }

    public function LoginUser(array $user): Redirector|RedirectResponse|Application
    {
        if (Auth::attempt($user)) {
            Session::put('connected', true);
            return redirect('/')
                ->with('action', 'sign-in');
        }
        return redirect()
            ->back()
            ->withInput()
            ->with('auth_failed', true);
    }

    public function RegisterUser(Request $request): Redirector|Application|RedirectResponse
    {

        Validator::extend('check_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        $validate = Validator::make($request->all(), [
            'username' => 'required|between:2,25|unique:users,username|alpha',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|between:'. $this->passwordMinLength() .',255'
        ],
        [
            'username.alpha' => 'Whitespace not allowed'
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()
                ->withErrors($validate)
                ->withInput();
        }

        User::create($request->all());

        $user = [
          'username' => $request->input('username'),
          'password' => $request->input('password')
        ];

        if (Auth::attempt($user)) {
            Session::put('connected', true);
            return redirect('/')
                ->with('action', 'sign-up');
        }

        return redirect()
            ->back()
            ->withInput();

    }

    public function LogoutUser(): Redirector|Application|RedirectResponse
    {
        Auth::logout();
        return redirect('/')
            ->with('action', 'logout');
    }

    /*
     * @Route("/auth/{type}")
     * */
    public function Auth(string $type, Request $request): Redirector|Application|RedirectResponse
    {
        # Check if parameter {type} is valid
        return match ($type) {
            'sign-in' => $this->LoginUser([
                'username' => $request->input('username'),
                'password' => $request->input('password')
            ]),
            'sign-up' => $this->RegisterUser($request),
            'logout' => $this->LogoutUser(),
            # If not, the user is redirected with an error
            default => redirect()->back()->with('auth_parameters_error', true)
        };
    }
}
