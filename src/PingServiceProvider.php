<?php

namespace Koduarve\Ping;

use Illuminate\Support\ServiceProvider;

class PingServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;
	protected $host;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('ping', function ($app) {
			return new Ping($this->host);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['ping'];
	}
}
