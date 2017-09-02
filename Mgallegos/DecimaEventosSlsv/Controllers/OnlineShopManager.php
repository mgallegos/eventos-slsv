<?php
/**
 * @file
 * Account Manager Controller.
 *
 * All DecimaAccounting code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Mgallegos\DecimaEventosSlsv\Controllers;

use Illuminate\Session\SessionManager;

use Illuminate\Http\Request;

use Illuminate\View\Factory;

use App\Http\Controllers\Controller;

use Mgallegos\DecimaInventory\Inventory\Services\ArticleManagement\ArticleManagementInterface;

use Mgallegos\DecimaInventory\Inventory\Services\ArticleTypeManagement\ArticleTypeManagementInterface;

use Mgallegos\DecimaInventory\Inventory\Services\CategoryManagement\CategoryManagementInterface;

use Mgallegos\DecimaCms\Cms\Services\OnlineShopManagement\OnlineShopManagementInterface;

use Mgallegos\DecimaCms\Cms\Services\SettingManagement\SettingManagementInterface;

use App\Kwaai\Organization\Services\OrganizationManagement\OrganizationManagementInterface;

class OnlineShopManager extends Controller {

	/**
	 * Article Manager Service
	 *
	 * @var Mgallegos\DecimaInventory\Inventory\Services\ArticleManagement\ArticleManagementInterface
	 *
	 */
	protected $ArticleManagerService;

	/**
	 * Account Manager Service
	 *
	 * @var Mgallegos\DecimaInventory\Inventory\Services\ArticleTypeManagement\ArticleTypeManagementInterface
	 *
	 */
	protected $ArticleTypeManagerService;

	/**
	 * Account Manager Service
	 *
	 * @var Mgallegos\DecimaInventory\Inventory\Services\CategoryManagement\CategoryManagementInterface
	 *
	 */
	protected $CategoryManagerService;

	/**
	 * Account Manager Service
	 *
	 * @var Mgallegos\DecimaCms\Cms\Services\OnlineShopManagement\OnlineShopManagementInterface
	 *
	 */
	protected $OnlineShopManagerService;

	/**
	 * Setting Manager Service
	 *
	 * @var Vendor\DecimaModule\Module\Services\SettingManagement\SettingManagementInterface
	 *
	 */
	protected $SettingManagerService;

	/**
	 * Organization Manager Service
	 *
	 * @var App\Kwaai\Organization\Services\OrganizationManagement\OrganizationManagementInterface
	 *
	 */
	protected $OrganizationManagerService;

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

	public function __construct(ArticleManagementInterface $ArticleManagerService, ArticleTypeManagementInterface $ArticleTypeManagerService, CategoryManagementInterface $CategoryManagerService, OnlineShopManagementInterface $OnlineShopManagerService, SettingManagementInterface $SettingManagerService, OrganizationManagementInterface $OrganizationManagerService, Factory $View, Request $Input, SessionManager $Session)
	{
		$this->ArticleManagerService = $ArticleManagerService;

		$this->ArticleTypeManagerService = $ArticleTypeManagerService;

		$this->CategoryManagerService = $CategoryManagerService;

		$this->OnlineShopManagerService = $OnlineShopManagerService;

		$this->SettingManagerService = $SettingManagerService;

		$this->OrganizationManagerService = $OrganizationManagerService;

		$this->View = $View;

		$this->Input = $Input;

		$this->Session = $Session;
	}

	public function getIndex()
	{
		// $organizationId = 6;
		$organizationId = 1;
		$currentSettingConfiguration = $this->SettingManagerService->getCurrentSettingConfiguration($organizationId);
		$articlesPerPage = $currentSettingConfiguration['articles_per_page'];

		return $this->View->make('decima-eventos-slsv::online-shop')
			->with('articlesPerPage', $articlesPerPage)
			->with('organizationId', $organizationId)
			->with('addCartButtonExtraClass', 'btn-block')
			->with('organizationCurrencySymbol', $this->OrganizationManagerService->getOrganizationCurrencySymbol($organizationId))
			->with('currentSettingConfiguration', $currentSettingConfiguration)
			->with('articles', $this->ArticleManagerService->getOnlineShopArticles($articlesPerPage, 1, null, $organizationId, $currentSettingConfiguration['only_show_articles_with_stock'], '', '', true))
			->with('categories', $this->CategoryManagerService->getSaleClassCategories($organizationId))
			->with('articleTypes', $this->ArticleTypeManagerService->getArticleTypes($organizationId))
			->with('paymentMethod', $this->SettingManagerService->getSettingPurchaseMethods($organizationId))
			->with('shippingMethod', $this->OnlineShopManagerService->getShippingMethod($currentSettingConfiguration))
			->with('newModuleAppAction', $this->Session->get('newModuleAppAction', false))
			->with('editModuleAppAction', $this->Session->get('editModuleAppAction', false))
			->with('deleteModuleAppAction', $this->Session->get('deleteModuleAppAction', false));
	}
}
