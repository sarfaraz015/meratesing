<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model{

   
       public function queries($username,$password){ 

               $row = $this->db->where('username',$username)
                              ->get('users')
                              ->row(); 
               return $row;             
       }

       public function storeToken($data){
          $this->db->insert('my_users_tokens', $data);
          return $this->db->insert_id();
       }


       
}



?>