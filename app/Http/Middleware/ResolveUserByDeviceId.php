<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ResolveUserByDeviceId
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Try several common header casings
        $deviceId = $request->headers->get('device_id')
            ?? $request->headers->get('Device-Id')
            ?? $request->headers->get('X-Device-Id');

        if (is_string($deviceId)) {
            $deviceId = trim($deviceId);
        }

        if (empty($deviceId)) {
            abort(403);
        }

        $user = User::query()->where('device_id', $deviceId)->first();

        if (!$user) {
            // Prepare a placeholder unique email based on device id
            $base = preg_replace('/[^a-z0-9._-]/i', '', (string) $deviceId) ?: 'device';
            $email = strtolower($base).'@device.local';

            if (User::query()->where('email', $email)->exists()) {
                $email = strtolower($base).'+'.Str::lower(Str::random(6)).'@device.local';
            }

            $user = User::create([
                'name' => 'Device '.$deviceId,
                'email' => $email,
                // User model casts will hash the password automatically
                'password' => Str::random(32),
                'device_id' => $deviceId,
            ]);
        }

        // Put into request attributes as requested
        $request->attributes->set('custom_user', $user);

        return $next($request);
    }
}
