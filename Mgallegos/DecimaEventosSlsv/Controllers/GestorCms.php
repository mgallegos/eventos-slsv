<?php
/**
 * @file
 * Initial Acounting Setup Controller.
 *
 * All DecimaAccounting code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

namespace Mgallegos\DecimaEventosSlsv\Controllers;

use Mgallegos\DecimaCms\Cms\Services\SettingManagement\SettingManagementInterface;

use Mgallegos\DecimaSale\Sale\Services\ClientManagement\ClientManagementInterface;

use Illuminate\Session\SessionManager;

use Illuminate\Http\Request;

use Illuminate\View\Factory;

use Illuminate\Filesystem\Filesystem;

use Illuminate\Database\DatabaseManager;

use Illuminate\Database\Eloquent\Collection;

use Illuminate\Mail\Mailer;

use Maatwebsite\Excel\Excel;

use Mgallegos\LaravelJqgrid\Facades\GridEncoder;

use App\Http\Controllers\Controller;

class GestorCms extends Controller {

	/**
	 * Setting Manager Service
	 *
	 * @var Mgallegos\DecimaCms\Cms\Services\SettingManagement\SettingManagementInterface
	 *
	 */
	protected $SettingManagerService;

	/**
	 * Client Manager Service
	 *
	 * @var Mgallegos\DecimaSale\Sale\Services\ClientManagement\ClientManagementInterface
	 *
	 */
	protected $ClientManagerService;

	/**
	 * View
	 *
	 * @var Illuminate\View\Factory
	 *
	 */
	protected $View;

	/**
	 * Input
	 *
	 * @var Illuminate\Http\Request
	 *
	 */
	protected $Input;

	/**
	 * Session
	 *
	 * @var Illuminate\Session\SessionManager
	 *
	 */
	protected $Session;

	/**
	 * File
	 *
	 * @var Illuminate\Filesystem\Filesystem
	 *
	 */
	protected $File;

	/**
	* Excel
	*
	* @var Maatwebsite\Excel\Excel
	*/
	protected $Excel;

	/**
	 * Mailer
	 *
	 * @var Illuminate\Mail\Mailer
	 */
	protected $Mailer;

	public function __construct(SettingManagementInterface $SettingManagerService, ClientManagementInterface $ClientManagerService, Factory $View, Request $Input, SessionManager $Session, Filesystem $File, Excel $Excel, DatabaseManager $DB, Mailer $Mailer)
	{
		$this->SettingManagerService = $SettingManagerService;

		$this->ClientManagerService = $ClientManagerService;

		$this->View = $View;

		$this->Input = $Input;

		$this->Session = $Session;

		$this->File = $File;

		$this->Excel = $Excel;

		$this->DB = $DB;

		$this->Mailer = $Mailer;

		$this->OrganizationId = 1; /*5 antes de dar push*/
	}

	public function getIndex()
	{
			// return $this->View->make('decima-eventos-slsv::intro')
			// 			->with('theme', 'bootstrap-simplex-theme');
	}

	public function postAfiliado()
	{
		$input = $this->Input->json()->all();

		$currentSettingConfiguration = $this->SettingManagerService->getCurrentSettingConfiguration($this->OrganizationId);

		// var_dump($currentSettingConfiguration);die();

		$this->Mailer->send('decima-eventos-slsv::emails.afiliados', array('input' => $input), function($message) use ($currentSettingConfiguration)
		{
			$message->to($currentSettingConfiguration['user_for_notification'])
				->subject('Solictud de afiliación ' . date('d/m/Y'))
				->replyTo($currentSettingConfiguration['user_for_notification'], 'Cabal')
				->bcc('freelance@mariogallegos.com');
		});

		return json_encode(array('success' => true));
	}

	public function postCliente()
	{
		$input = $this->Input->json()->all();

		// $currentSettingConfiguration = $this->SettingManagerService->getCurrentSettingConfiguration($this->OrganizationId);

		$currentSettingConfiguration['user_for_notification'] = 'monge.sylvana@gmail.com';
		// $currentSettingConfiguration['user_for_notification'] = 'freelance@mariogallegos.com';

		$this->Mailer->send('decima-eventos-slsv::emails.clientes', array('input' => $input), function($message) use ($currentSettingConfiguration)
		{
			$message->to($currentSettingConfiguration['user_for_notification'])
				->subject('Solictud de inscripción a lista de correo ' . date('d/m/Y'))
				->replyTo($currentSettingConfiguration['user_for_notification'], 'Ob\'s World')
				->bcc('freelance@mariogallegos.com');
		});

		return json_encode(array('success' => true));
	}
}
