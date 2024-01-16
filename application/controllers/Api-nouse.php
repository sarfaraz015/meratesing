<?php 

// application/controllers/Api.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('authentication');
    }

    public function register() {
        // echo "Hello register";
        // die;
        // Implement registration logic
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            // Add other registration data as needed
        );

        $user_id = $this->authentication->register($data);

        if ($user_id) {
            // Registration successful
            $response = array('status' => 'success', 'message' => 'Registration successful');
        } else {
            // Registration failed
            $response = array('status' => 'error', 'message' => $this->authentication->errors());
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function login() {
        // Implement login logic
        $data = array(
            'login'    => $this->input->post('username_or_email'),
            'password' => $this->input->post('password'),
        );

        if ($this->auth->login($data)) {
            // Login successful
            $response = array('status' => 'success', 'message' => 'Login successful');
        } else {
            // Login failed
            $response = array('status' => 'error', 'message' => $this->auth->errors());
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    // Add more methods as needed for your API
}




?>