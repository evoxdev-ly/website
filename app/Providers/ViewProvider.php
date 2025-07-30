<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['components.*', 'pages.*'], function ($view) {
            
            $view->with('settings', Setting::select(
                'logo_header',
                'logo_footer',
                'about_us',
                'phone',
                'contact_email',
                'metatag_description',
                'metatag_keywords',

                'social_facebook',
                'social_instagram',
                'social_linkedin',
                'social_twitter',
                'social_youtube',
                'social_github',
                'social_whatsapp',
                'whatsapp_floating',
                
                'head',
                'script'
            )->first());
        });
    }
}
