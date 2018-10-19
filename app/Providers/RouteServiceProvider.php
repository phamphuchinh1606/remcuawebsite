<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    protected $namespaceGuest = 'App\Http\Controllers\Guest';

    protected $namespaceAdmin = 'App\Http\Controllers\Admin';

    protected $prefixAdmin = 'admin';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));

        Route::middleware('web')
            ->namespace($this->namespaceGuest)
            ->group(base_path('routes/guest/route_home.php'));

        Route::middleware('web')
            ->namespace($this->namespaceGuest)
            ->group(base_path('routes/guest/route_product.php'));

        Route::middleware('web')
            ->namespace($this->namespaceGuest)
            ->group(base_path('routes/guest/route_collection.php'));

        Route::middleware('web')
            ->namespace($this->namespaceGuest)
            ->group(base_path('routes/guest/route_blog.php'));

        Route::middleware('web')
            ->namespace($this->namespaceGuest)
            ->group(base_path('routes/guest/route_cart.php'));

        Route::middleware('web')
            ->namespace($this->namespaceGuest)
            ->group(base_path('routes/guest/route_contact.php'));

        //Router admin
        Route::middleware('web')
            ->namespace($this->namespaceAdmin)
            ->prefix($this->prefixAdmin)
            ->name($this->prefixAdmin.'.')
            ->group(base_path('routes/admin/route_common.php'));

        Route::middleware('web')
            ->namespace($this->namespaceAdmin)
            ->prefix($this->prefixAdmin)
            ->name($this->prefixAdmin.'.')
            ->group(base_path('routes/admin/route_product.php'));

        Route::middleware('web')
            ->namespace($this->namespaceAdmin)
            ->prefix($this->prefixAdmin)
            ->name($this->prefixAdmin.'.')
            ->group(base_path('routes/admin/route_vendor.php'));

        Route::middleware('web')
            ->namespace($this->namespaceAdmin)
            ->prefix($this->prefixAdmin)
            ->name($this->prefixAdmin.'.')
            ->group(base_path('routes/admin/route_setting.php'));

        Route::middleware('web')
            ->namespace($this->namespaceAdmin)
            ->prefix($this->prefixAdmin)
            ->name($this->prefixAdmin.'.')
            ->group(base_path('routes/admin/route_blog.php'));

        Route::middleware('web')
            ->namespace($this->namespaceAdmin)
            ->prefix($this->prefixAdmin)
            ->name($this->prefixAdmin.'.')
            ->group(base_path('routes/admin/route_address.php'));

        Route::middleware('web')
            ->namespace($this->namespaceAdmin)
            ->prefix($this->prefixAdmin)
            ->name($this->prefixAdmin.'.')
            ->group(base_path('routes/admin/route_contact.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
