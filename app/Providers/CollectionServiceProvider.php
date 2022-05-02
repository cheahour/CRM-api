<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

class CollectionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Collection::macro("between_date", function(Carbon $from_date, Carbon $to_date) {
            return $this->filter(function($item) use($from_date, $to_date) {
                return $item->updated_at >= $from_date && $item->updated_at <= $to_date;
            });
        });
    }
}
