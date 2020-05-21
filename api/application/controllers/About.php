<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class About extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        $this->load->model('CRUD');
    }

    /**
     * Posts View Function
     */
    public function index_get(){
        $query = $this->CRUD->GetData('tbl_aboutme')->result();

        // Jika data tidak kosong, maka akan menampilkan data.
        if (!empty($query)) {
            $this->response([
                'data'   => $query, # Isi data.
                'status' => 200 # Kode pesan.
            ], 200);
        }
        // Jika kosong, maka akan mengembalikan pesan "Empty data"
        else {
            $this->response([
                'data'    => null, # Isi data.
                'message' => 'Empty data', # Isi pesan.
                'status'  => 200 # Kode pesan.
            ], 200);
        }
    }


    /**
     * Posts Add Function
     */
    public function index_post(){
        $add = array(
            "aboutme_id"          => '',
            "aboutme_name"        => $this->post('aboutme_name'),
            "aboutme_description" => $this->post('aboutme_description'),
            "aboutme_photo"       => $this->post('aboutme_photo')
        );

        $query = $this->CRUD->AddData('tbl_aboutme', $add);

        if($query > 0){
            $this->response([
                'message' => 'Input success.',
                'status'  => 201
            ], 201);
        }
        else{
            $this->response([
                'message' => 'Error input.',
                'status'  => 500
            ], 500);
        }
    }

    public function index_put(){
        $id = $this->put('aboutme_id');

        $update = array(
            "aboutme_name"        => $this->put('aboutme_name'),
            "aboutme_description" => $this->put('aboutme_description'),
            "aboutme_photo"       => $this->put('aboutme_photo')
        );

        $query = $this->CRUD->UpdateData('tbl_aboutme', 'aboutme_id', $id, $update);

        if($query > 0){
            $this->response([
                'message' => 'Update success.',
                'status'  => 201
            ], 201);
        }
        else{
            $this->response([
                'message' => 'Error update.',
                'status'  => 500
            ], 500);
        }
    }
}