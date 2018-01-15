<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('script', function ($expression) {
            return "<?php \$__env->startPush('page-scripts'); ?>
                    <script src=\"<?php echo e(asset(\"assets/{$expression}\")); ?>\"></script>
                    <?php \$__env->stopPush(); ?>";
        });

        Blade::directive('style', function ($expression) {
            return "<?php \$__env->startPush('page-styles'); ?>
                    <link rel=\"stylesheet\" href=\"<?php echo e(asset(\"assets/{$expression}\")); ?>\"></script>
                    <?php \$__env->stopPush(); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
