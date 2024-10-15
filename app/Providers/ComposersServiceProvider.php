<?php

namespace App\Providers;

use Roots\Acorn\ServiceProvider;
use App\View\Composers\Listing;

class ComposersServiceProvider extends ServiceProvider
{
  /**
   * Register the application's view composers.
   *
   * @return void
   */
  public function boot()
  {
    // Register Listing Composer
    $this->app['view']->composer(['single-listing', 'partials.content-listing'], Listing::class);
  }
}
