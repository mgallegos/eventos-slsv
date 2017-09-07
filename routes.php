<?php
// var_dump('Hola decima web');
/**
 * @file
 * Application Routes.
 *
 * All DecimaCms code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

/*
|--------------------------------------------------------------------------
| Package Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//https://laravel.com/docs/5.1/controllers
// Route::put('/cms/decimaerp/{id}', 'Mgallegos\DecimaWeb\Controllers\GestorCms@getIndex');

Route::controller('/cms/sfd2017/login', 'Mgallegos\DecimaEventosSlsv\Controllers\LoginManager');

Route::controller('/cms/sfd2017', 'Mgallegos\DecimaEventosSlsv\Controllers\InicioManager');

Route::controller('/cms/eventos-slsv', 'Mgallegos\DecimaEventosSlsv\Controllers\GestorCms');
