<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('formatPhone', function ($expression) {
            return "<?php 
                \$phone = $expression;
                if (empty(\$phone)) {
                    echo '';
                } else {
                    \$digits = preg_replace('/[^0-9]/', '', \$phone);
                    \$length = strlen(\$digits);
                    
                    if (\$length === 11) {
                        // Celular: (11) 95859-5849
                        echo '('.substr(\$digits, 0, 2).') '.substr(\$digits, 2, 5).'-'.substr(\$digits, 7);
                    } elseif (\$length === 10) {
                        // Fixo: (11) 2553-9224
                        echo '('.substr(\$digits, 0, 2).') '.substr(\$digits, 2, 4).'-'.substr(\$digits, 6);
                    } elseif (\$length === 8 || \$length === 9) {
                        // Sem DDD: 2553-9224 ou 95859-5849
                        echo (\$length === 8) 
                            ? substr(\$digits, 0, 4).'-'.substr(\$digits, 4)
                            : substr(\$digits, 0, 5).'-'.substr(\$digits, 5);
                    } else {
                        // Fallback - return original if doesn't match expected patterns
                        echo \$phone;
                    }
                }
            ?>";
        });
    }
}
