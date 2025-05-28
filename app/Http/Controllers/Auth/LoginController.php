<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $role = $request->input('role');
        
        switch ($role) {
            case 'administrador':
                return redirect()->route('admin.dashboard');
            case 'colaborador':
                return redirect()->route('colaborador.dashboard');
            case 'instructor':
                return redirect()->route('instructor.dashboard');
            default:
                return redirect($this->redirectTo);
        }
    }
}


// ?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;


// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;  // Asegúrate que esta línea esté presente
// use Illuminate\Foundation\Auth\AuthenticatesUsers;  // Verifica la ortografía (debe ser AuthenticatesUsers, no AuthenticatedUsers)
// class LoginController extends Controller
// {
//     /*
//     |--------------------------------------------------------------------------
//     | Login Controller
//     |--------------------------------------------------------------------------
//     |
//     | This controller handles authenticating users for the application and
//     | redirecting them to your home screen. The controller uses a trait
//     | to conveniently provide its functionality to your applications.
//     |
//     */

//     use AuthenticatesUsers;

//     /**
//      * Where to redirect users after login.
//      *
//      * @var string
//      */
//     protected $redirectTo = '/home';

//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//         $this->middleware('auth')->only('logout');
//     }
// } 