<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';
    protected $admin_home ;
    protected $user_home;

    public static function ADMIN_HOME()
    {
        self::$admin_home = env('APP_ADMIN_DOMAIN') . env('APP_ADMIN_PREFIX');

        return self::$admin_home;
    }
    public static function USER_HOME()
    {
        self::$user_home = env('APP_USER_DOMAIN') . env('APP_USER_PREFIX');

        return self::$user_home;
    }

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
            Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
            Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/user.php'));

        });
    }
}
