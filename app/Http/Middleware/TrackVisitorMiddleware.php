<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the visitor's IP address
        $ipAddress = $request->ip();

        // Check if the IP address exists in the database
        $visitor = Visitor::where('ip_address', $ipAddress)->first();

        if (!isset($visitor)) {
            // If the IP address doesn't exist, create a new record
            Visitor::create([
                'ip_address' => $ipAddress,
            ]);
        } 

        return $next($request);
    }
}
