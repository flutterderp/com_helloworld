<?php
namespace Flutterderp\Component\HelloWorld\Site\View\Hello;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

/**
 * @package     Joomla.Site
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2021 Otterly Useless. All rights reserved.
 * @license     MIT License; see LICENSE
 */

/**
 * View for the user identity validation form
 */

class HtmlView extends BaseHtmlView
{
	/**
	 * Display the view
	 *
	 * @param string $template The name of the layout file to parse
	 * @return void
	 */
	public function display($template = null)
	{
		// Call the parent display to display the layout file
		parent::display($template);
	}
}
