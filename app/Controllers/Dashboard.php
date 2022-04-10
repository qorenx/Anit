<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4 - SimpleAuth
 * --------------------------------------------------------------------
 *
 * This content is released under the MIT License (MIT)
 *
 * @package    SimpleAuth
 * @author     GeekLabs - Lee Skelding 
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://github.com/GeekLabsUK/SimpleAuth
 * @since      Version 1.0
 * 
 */

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('templates/header', $data);
		echo view('dashboard');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
