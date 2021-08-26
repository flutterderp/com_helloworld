<?php
namespace Flutterderp\Component\HelloWorld\Administrator\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2021 Otterly Useless. All rights reserved.
 * @license     MIT License; see LICENSE
 */

/**
 * Default Controller of HelloWorld component
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 */
class DisplayController extends BaseController
{
	/**
	 * The default view for the display method.
	 *
	 * @var string
	 */
	protected $default_view = 'hello';

	public function display($cacheable = false, $urlparams = array())
	{
		return parent::display($cacheable, $urlparams);
	}
}
