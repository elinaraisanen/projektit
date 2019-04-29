<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Team extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url','url_helper'));
    }
    
    public function index() {
        $this->load->view('templates/top');
        $this->load->view('pages/team');
        $this->load->view('templates/footer');
        $this->load->view('templates/bot');
    }

}
?>