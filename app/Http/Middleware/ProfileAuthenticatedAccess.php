<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfileAuthenticatedAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && auth()->user()->perfis->tipo_perfil == 'Administrador'){
            return $next($request); //admin tem acesso a tudo
        }

        if (auth()->check() && auth()->user()->perfis->tipo_perfil == 'Cliente') {
            // Clientes só podem acessar listas públicas ou suas próprias listas
            if ($request->route('lista')->is_public || $request->user()->id == $request->route('lista')->id_usuario) {
                return $next($request);
            }
        }
    
        // Usuários anônimos só podem ver listas públicas
        if ($request->route('lista')->is_public) {
            return $next($request);
        }
    
        return redirect('login');
    }
}
