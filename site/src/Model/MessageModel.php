<?php
namespace Flutterderp\Component\HelloWorld\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Model\ItemModel;
use Joomla\CMS\Language\Text;

/**
 * @package     Joomla.Site
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2021 Otterly Useless. All rights reserved.
 * @license     MIT License; see LICENSE
 */

/**
 * Hello World Message Model
 * @since 0.0.5
 */

class MessageModel extends ItemModel
{
	/**
	 * Returns a message for display
	 * @param integer $pk Primary key of the “message item”, currently unused
	 * @return object Message object
	 */
	public function getItem($pk = null): object
	{
		$item = new \stdClass();
		$item->message = Text::_('COM_HELLOWORLD_MSG_GREETING');
		return $item;
	}
}
