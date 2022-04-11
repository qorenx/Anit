<?php

/**
 * --------------
 * CODEIGNITER 4 
 * --------------
 *
 *  Admin Panel
 * 
 * 
 */

 namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('templates/header', $data);
		echo view('admin');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
