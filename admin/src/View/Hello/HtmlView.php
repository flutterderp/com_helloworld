<?php
namespace Flutterderp\Component\HelloWorld\Administrator\View\Hello;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2021 Otterly Useless. All rights reserved.
 * @license     MIT License; see LICENSE
 */

/**
 * Main “Hello World” Admin View
 */
class HtmlView extends BaseHtmlView
{
	/**
	 * Display the main “Hello World”
	 *
	 * @param string $tpl The name of the template file to parse; automatically searches through the template paths
	 * @return void
	 */
	function display($tpl = null)
	{
		parent::display($tpl);
	}
}
