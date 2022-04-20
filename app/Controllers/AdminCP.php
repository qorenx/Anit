<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4 - Anitium
 * --------------------------------------------------------------------
 *
 *  Burası Admin Panel Gösterildiği Kısımdır.
 *  Routers üzerinden Role 1'de ayarları bulunmaktadır.
 *  Yölendirmeleri ise
 *  view/backend/admin/admin_home.php
 *  templates içinde ise footer ve header bulunmaktadır.
 *  Ayarlar için oraya bakabilirsiniz. 
 * 
 * 
 */

 namespace App\Controllers;

class AdminCP extends BaseController
{
	private $model;

	public function __construct(){
		
	}

	public function index()   // Admin Sayfası İlk Kısmıdır.
	{
		$data = [];

		echo view('backend/admin/templates/header', $data);
		echo view('backend/admin/admin_home');
		echo view('backend/admin/templates/footer');
	}

   



}
