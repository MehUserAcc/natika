<?php
/**
 * Part of phoenix project. 
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Controller\Notifications;

use Phoenix\Controller\Display\ListDisplayController;

/**
 * The GetController class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class GetController extends ListDisplayController
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'notifications';

	/**
	 * Property itemName.
	 *
	 * @var  string
	 */
	protected $itemName = 'notification';

	/**
	 * Property listName.
	 *
	 * @var  string
	 */
	protected $listName = 'notifications';
}