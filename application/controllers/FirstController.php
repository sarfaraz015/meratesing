<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstController extends CI_Controller {

       function index(){
          $this->load->library('authentication');
          $this->load->model('auth_model');
            echo "Hello first controller";
       }

}


?>