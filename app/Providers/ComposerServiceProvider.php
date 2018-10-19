<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['admin.common.__select_product_type', 'admin.common.__select_vendor',
                'guest.home.partials.__menu_sidebar','guest.common.__right_linklist_menu',
                'guest.layouts.master', 'guest.common.__search_product'],
            'App\Http\ViewComposers\ProductComposer'
        );
        //Build data tag
        View::composer(['guest.common.__tag_key_one','guest.common.__tag_key_two'],
            'App\Http\ViewComposers\TagComposer');

        //Build data blog
        View::composer(['guest.blog.__blog_new','guest.home.partials.__blog_new'],
            'App\Http\ViewComposers\BlogComposer');

        //Build data app info
        View::composer(['guest.*'],
            'App\Http\ViewComposers\AppInfoComposer');

        View::composer(['admin.layouts.partials.*'],
            'App\Http\ViewComposers\ContactComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
