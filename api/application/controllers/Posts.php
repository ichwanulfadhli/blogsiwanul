<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Posts extends RestController {

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
        // IDs
        $v     = $this->get('view');
        $lvl   = $this->get('lvl');
        $title = $this->get('title');
        $id    = $this->get('id');

        // Jika ID['view'] tidak kosong, maka akan melakukan proses untuk.
        // menampilkan data.
        if($v !== NULL){
            // Jika isi ID['view'] adalah "all", maka akan menampilkan semua posting.
            if($v == "all" && empty($lvl)){
                $query = $this->CRUD->GetDataWhere('tbl_posts', 'post_status', '1', 'post_date', 'DESC')->result();

                // Jika data tidak kosong, maka akan menampilkan data.
                if(!empty($query)){
                    $this->response([
                        'data'   => $query, # Isi data.
                        'status' => 200 # Kode pesan.
                    ], 200);
                }
                // Jika kosong, maka akan mengembalikan pesan "Empty data"
                else{
                    $this->response([
                        'data'    => null, # Isi data.
                        'message' => 'Empty data', # Isi pesan.
                        'status'  => 200 # Kode pesan.
                    ], 200);
                }
            }
            elseif($v == "all" && (!empty($lvl) && $lvl == "admin")){
                $query = $this->CRUD->GetData('tbl_posts', 'post_date', 'DESC')->result();

                // Jika data tidak kosong, maka akan menampilkan data.
                if(!empty($query)){
                    $this->response([
                        'data'   => $query, # Isi data.
                        'status' => 200 # Kode pesan.
                    ], 200);
                }
                // Jika kosong, maka akan mengembalikan pesan "Empty data"
                else{
                    $this->response([
                        'data'    => null, # Isi data.
                        'message' => 'Empty data', # Isi pesan.
                        'status'  => 200 # Kode pesan.
                    ], 200);
                }
            }
            // Jika isi ID adalah "recent", maka akan menampilkan posting terbaru.
            elseif($v == "recent"){
                $query = $this->CRUD->GetDataWhere('tbl_posts', 'post_status', '1', 'post_date', 'DESC', 3)->result();

                // Jika data tidak kosong, maka akan menampilkan data.
                if(!empty($query)){
                    $this->response([
                        'data'   => $query, # Isi data.
                        'status' => 200 # Kode pesan.
                    ], 200);
                }
                // Jika kosong, maka akan mengembalikan pesan "Empty data"
                else{
                    $this->response([
                        'data'    => null, # Isi data.
                        'message' => 'Empty data', # Isi pesan.
                        'status'  => 200 # Kode pesan.
                    ], 200);
                }
            }
            // Jika isi ID['view'] adalah "blog" dan ID['id'] adalah id posting, maka 
            // akan menampilkan posting sesuai ID['id'] yang dipanggil.
            elseif($v == "blog" && $title !== null){
                $like = array('tbl_posts.post_url' => $title, 'tbl_posts.post_status' => '1');
                $query = $this->CRUD->GetDataLike('tbl_posts', $like, 'post_date', 'DESC')->result();
    
                // Jika data tidak kosong, maka akan menampilkan data.
                if(!empty($query)){
                    $this->response([
                        'data'   => $query, # Isi data.
                        'status' => 200 # Kode pesan.
                    ], 200);
                }
                // Jika kosong, maka akan mengembalikan pesan "Empty data"
                else{
                    $this->response([
                        'data'    => null, # Isi data.
                        'message' => 'Empty data', # Isi pesan.
                        'status'  => 200 # Kode pesan.
                    ], 200);
                }
            }
            elseif($v == "blog" && $id !== null){
                $query = $this->CRUD->GetDataWhere('tbl_posts', 'tbl_posts.post_id', $id, 'post_date', 'DESC')->result();
    
                // Jika data tidak kosong, maka akan menampilkan data.
                if(!empty($query)){
                    $this->response([
                        'data'   => $query, # Isi data.
                        'status' => 200 # Kode pesan.
                    ], 200);
                }
                // Jika kosong, maka akan mengembalikan pesan "Empty data"
                else{
                    $this->response([
                        'data'    => null, # Isi data.
                        'message' => 'Empty data', # Isi pesan.
                        'status'  => 200 # Kode pesan.
                    ], 200);
                }
            }
            else{
                $this->response([
                    'message' => 'Bad request', # Isi pesan.
                    'status'  => 400 # Kode pesan.
                ], 400);
            }
        }
        // Jika ID['view'] kosong, maka akan mengembalikan JSON 
        // dengan pesan "Bad request".
        else{
            $this->response([
                'message' => 'Bad request', # Isi pesan.
                'status'  => 400 # Kode pesan.
            ], 400);
        }
    }


    /**
     * Posts Add Function
     */
    public function index_post(){
        $add = array(
            "post_id"          => '',
            "post_cover"       => $this->post('post_cover'),
            "post_title"       => $this->post('post_title'),
            "post_url"         => strtolower(preg_replace('/\s/', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $this->post('post_title')))),
            "post_description" => $this->post('post_description'),
            "post_content"     => $this->post('post_content'),
            "post_keywords"    => $this->post('post_keywords'),
            "post_date"        => date('Y-m-d H:i:s'),
            "post_status"      => $this->post('post_status'),
            "login_id"         => $this->post('login_id')
        );

        $query = $this->CRUD->AddData('tbl_posts', $add);

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
        $id = $this->put('post_id');

        $update = array(
            "post_cover"       => $this->put('post_cover'),
            "post_title"       => $this->put('post_title'),
            "post_url"         => strtolower(preg_replace('/\s/', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $this->put('post_title')))),
            "post_description" => $this->put('post_description'),
            "post_content"     => $this->put('post_content'),
            "post_keywords"    => $this->put('post_keywords'),
            "post_status"      => $this->put('post_status'),
            // "post_date"        => ($this->put('post_status') == "0") ? date('Y-m-d H:i:s') : '',
            "login_id"         => $this->put('login_id')
        );

        // Jika status post '0', makan tanggal blog akan ter-update.
        if($this->put('post_status') == "0"){
            $update['post_date'] = date('Y-m-d H:i:s');
        }

        $query = $this->CRUD->UpdateData('tbl_posts', 'post_id', $id, $update);

        if($query > 0){
            $this->response([
                'message' => 'Update success.',
                'status'  => 201
            ], 201);
        }

        // Disini akan terjadi error kalau berusaha untuk mengupdate data
        // tetapi datanya tidak ada perubahan sama sekali.
        else{
            $this->response([
                'message' => 'Error update.',
                'status'  => 500
            ], 500);
        }
    }
}