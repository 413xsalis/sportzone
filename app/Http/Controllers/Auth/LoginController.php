<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Valida los campos del login (incluyendo el rol)
     */
protected function validateLogin(Request $request)
{
    $request->validate([
        $this->username() => 'required|string|email',
        'password' => 'required|string',
        'role' => 'required|in:administrador,colaborador,instructor' // Ajustado
    ]);
}

    /**
     * Maneja el intento de login
     */
    public function login(Request $request)
    {
        // Validar los campos primero
        $this->validateLogin($request);

        // Intentar autenticación
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // Si falla la autenticación
        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Redirección después de autenticación exitosa
     */
    protected function authenticated(Request $request, $user)
    {
        $selectedRole = $request->input('role');
        
        // Verificar que el rol seleccionado coincida con el del usuario
        if ($user->role !== $selectedRole) {
            $this->guard()->logout();
            return redirect()->route('login')
                ->withErrors(['role' => 'El rol seleccionado no coincide con tu perfil de usuario.'])
                ->withInput($request->only('email', 'remember'));
        }

        // Redirección basada en el rol
        switch ($selectedRole) {
            case 'administrador':
                return redirect()->route('administrador.admin.principal');
            case 'colaborador':
                return redirect()->route('administrador.Gestion_usuarios.principal');
            case 'instructor':
                return redirect()->route('instructor.dashboard');
            default:
                return redirect($this->redirectTo);
        }
    }

    /**
     * Mensaje cuando falla el login
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                $this->username() => __('auth.failed'),
            ]);
    }
}