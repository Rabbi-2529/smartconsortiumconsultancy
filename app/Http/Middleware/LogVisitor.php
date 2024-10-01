<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Log;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $ipAddress = $request->ip();
        $userAgent = $request->header('User-Agent');

        // Check if the visitor already exists
        $existingVisitor = Visitor::where('ip_address', $ipAddress)
            ->where('user_agent', $userAgent)
            ->whereDate('visited_at', now()->toDateString())
            ->first();

        if (!$existingVisitor) {
            // Create a new Visitor record if not found
            Visitor::create([
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent,
                'visited_at' => now(),
            ]);
        }

        // Log visitor information
        Log::info('Visitor IP: ' . $ipAddress . ', URL: ' . $request->url());

        return $next($request);
    }
}
