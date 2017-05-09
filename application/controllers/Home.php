<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
		    array(
		        'id' => 1,
		        'name' => 'Services',
		        'parent' => null,
		        'slug' => '#services',
		    ),
				array(
		        'id' => 2,
		        'name' => 'Portfolio',
		        'parent' => null,
		        'slug' => '#portfolio',
		    ),
				array(
		        'id' => 3,
		        'name' => 'About',
		        'parent' => null,
		        'slug' => '#about',
		    ),
				array(
		        'id' => 4,
		        'name' => 'Team',
		        'parent' => null,
		        'slug' => '#team',
		    ),
				array(
		        'id' => 5,
		        'name' => 'Contact',
		        'parent' => null,
		        'slug' => '#contact',
		    ),
		);

		$this->load->library("multi_menu");
    //$this->multi_menu->initialize($config);
		$this->multi_menu->set_items($data);

		$this->load->view('layout');
	}
}
