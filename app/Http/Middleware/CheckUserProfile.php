<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Verifica se o usuário está autenticado
        if (auth()->check()) {
            $user = auth()->user();

            // Verifica se o usuário é Administrador
            if ($user->is_admin) {
                return $next($request); // Permite o acesso à rota
            }

            // Usuário logado, mas não administrador
            return redirect()->route('vdo.sobre'); // Redireciona para a rota de anônimos
        }

        // Usuário não autenticado (anônimo)
        return redirect()->route('vdo.sobre'); // Redireciona para a rota de anônimos
    }
}
