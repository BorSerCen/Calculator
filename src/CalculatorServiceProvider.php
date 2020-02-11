<?php

namespace Borsercen\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider {
	/**
	 * Register services.
	 *
	 * @return void
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	public function register() {
		$this->app->make('Borsercen\Calculator\CalculatorController');
		$this->loadViewsFrom(__DIR__.'/views', 'calculator');
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
		include __DIR__ . '/Routes.php';
	}
}
