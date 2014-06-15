<?php namespace Makbash\Channels\Controllers\Admin;
/**
 * Part of the Platform application.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Platform
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Platform\Admin\Controllers\Admin\AdminController;
use View;

class ChannelsController extends AdminController {

	/**
	 * Return the main administration screen.
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return View::make('makbash/channels::index');
	}

}
