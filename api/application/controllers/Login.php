<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Login extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        $this->load->model('CRUD');
    }

    /**
     * Posts Login Function
     */
    public function index_post(){
        $login = array(
            "login_username" 	=> $this->post('username'),
            "login_pwd" 		=> $this->post('pwd')
        );

        $query = $this->CRUD->GetDataWhere('tbl_login', $login, $login);

        if($query->num_rows() == 1){
            if($query->row()->login_lvl == 1){
                $this->response([
                    'message'  => 'Login success.',
                    'id'       => $query->row()->login_id,
                    'username' => $query->row()->login_username,
                    'status'   => 200
                ], 200);
            }
            elseif($query->row()->login_lvl == 0){
                $this->response([
                    'message' => 'Access denied.',
                    'status' => 200
                ], 200);
            }
        }
        else{
            $this->response([
                'message' => 'Error login.',
                'status'  => 400
            ], 400);
        }
    }
}