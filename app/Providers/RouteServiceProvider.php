<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use RuntimeException;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    public const HOME = '/';

    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            foreach ($this->centralDomains() as $domain) {
                Route::middleware([
                    'api', 'api_version:v1',
                    // InitializeTenancyByDomain::class,
                    // PreventAccessFromCentralDomains::class,
                ])
                    ->prefix('api/v1')
                    ->domain($domain)
                    ->as('api.')
                    ->group(base_path('routes/api.php'));

                // Route::middleware(['api', 'api_version:v2'])
                //     ->prefix('api/v2')
                //     ->group(base_path('routes/api2.php'));

                Route::middleware('web')
                    ->domain($domain)
                    ->group(base_path('routes/web.php'));
            }
        });
    }

    protected function centralDomains(): array
    {
        $domains = config('tenancy.central_domains');

        if (! is_array($domains)) {
            throw new RuntimeException(
                message: 'Tenanct Central Domains should be an array',
            );
        }

        return (array) $domains;
    }

    protected function configureRateLimiting(): void
    {
        RateLimiter::for(
            'api',
            fn (Request $request) =>
            /** @phpstan-ignore-next-line  */
            Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip())
        );
    }
}
