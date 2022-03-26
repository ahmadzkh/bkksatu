<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';
    protected $username;

    public function __construct() {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUsername();
    }

    public function findUsername()
    {
        $login = request()->input('login');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$fieldType => $login]);

        return $fieldType;
    }

    public function username()
    {
        return $this->username;
    }

    /**
     * Halaman Login
     */
    public function index()
    {
        return view('auth/login');
    }

    /**
     * Proses Login
     */
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'login'    => 'required',
            'password' => 'required',
        ]);

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL )
            ? 'email'
            : 'username';

        $request->merge([
            $login_type => $request->input('login')
        ]);

        // dd($login_type);

        if (Auth::attempt($request->only($login_type, 'password'))) {
            /**
             * Login dengan level admin
             */
            if (auth()->user()->id_level === '1') {
                return redirect()->route('admin.home');
            }

            /**
             * Login dengan level alumni
             */
            else if (auth()->user()->id_level === '2') {
                return redirect()->route('home');
            }

            /**
             * Login dengan level mitra
             */
            else if (auth()->user()->id_level === '3') {
                return redirect()->route('mitra.home');
            }
            // dd(auth()->user()->id_level);
        }

        return redirect()->back()
            ->withInput()
            ->with('login', 'These credentials do not match our records.');
    }

    /**
     * Function Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
