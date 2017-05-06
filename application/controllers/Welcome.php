<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
    $config["parent_tag_open"]       = '<li class="dropdown-submenu">';
    $config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';
    $config["children_tag_open"]     = '<ul class="dropdown-menu">';

		$data = array(
		    array(
		        'id' => 1,
		        'name' => 'First Menu',
		        'parent' => null,
		        'slug' => 'menu-1',
		        'icon' => 'fa fa-trash' // <--
		    ),
				array(
		        'id' => 2,
		        'name' => 'First Menu',
		        'parent' => null,
		        'slug' => 'menu-1',
		        'icon' => 'fa fa-trash' // <--
		    ),
				array(
						'id' => 3,
						'name' => 'First Menu',
						'parent' => 1,
						'slug' => 'menu-1',
						'icon' => 'fa fa-trash' // <--
				),
		);

		$this->load->library("multi_menu");
    $this->multi_menu->initialize($config);
		$this->multi_menu->set_items($data);

		$this->load->view('welcome_message');
	}
}
