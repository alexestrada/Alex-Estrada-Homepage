<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	private $data;
	
    public function __construct() {
        parent::__construct();
        $this->twig->add_function('resource_url');
	}
	
    public function index() {
        $this->data['title'] = "Alex Estrada";
        $this->twig->display('pages/home.php', $this->data);
    }
}