<?php defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    public function index()
    {
        $dado['conteudo'] = "home";
        $this->load->view('template/layout', $dado);

    }

}
