<?php namespace Mgallegos\DecimaEventosSlsv;

use Illuminate\Support\ServiceProvider;

class DecimaEventosSlsvServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	* Bootstrap any application services.
	*
	* @return void
	*/
	public function boot()
	{
		include __DIR__.'/../../routes.php';

		$this->loadViewsFrom(__DIR__.'/../../views', 'decima-eventos-slsv');

		$this->loadTranslationsFrom(__DIR__.'/../../lang', 'decima-eventos-slsv');

		$this->publishes([
				__DIR__ . '/../../config/config.php' => config_path('eventos-slsv-general.php'),
		], 'config');

		$this->mergeConfigFrom(
				__DIR__ . '/../../config/config.php', 'eventos-slsv-general'
		);

		$this->publishes([
				__DIR__ . '/../../config/journal.php' => config_path('eventos-slsv-journal.php'),
		], 'config');

		$this->mergeConfigFrom(
				__DIR__ . '/../../config/journal.php', 'eventos-slsv-journal'
		);

		$this->publishes([
    __DIR__.'/../../migrations/' => database_path('/migrations')
		], 'migrations');

		$this->publishes([
    __DIR__.'/../../assets/' => public_path('/mgallegos/decima-eventos-slsv')
	], 'public');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
