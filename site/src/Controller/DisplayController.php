<?php
namespace Flutterderp\Component\HelloWorld\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;

/**
 * @package     Joomla.Site
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2021 Otterly Useless. All rights reserved.
 * @license     MIT License; see LICENSE
 */

/**
 * HelloWorld Component Controller
 * @since  0.0.2
 */
class DisplayController extends BaseController
{
	public function display($cacheable = false, $urlparams = array())
	{
		$document   = Factory::getDocument();
		$viewName   = $this->input->getCmd('view', 'login');
		$viewFormat = $document->getType();

		$view = $this->getView($viewName, $viewFormat);

		$view->document = $document;
		$view->display();
	}
}
