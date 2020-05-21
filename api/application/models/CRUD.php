<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class CRUD extends CI_Model{
    function AddData($table, $data=array()){
        // Syntax insert data
        $this->db->insert($table, $data);
        
        // Mengembalikan nilai berapa banyak baris 
        // yang telah ter-insert
        return $this->db->affected_rows();
    }

    function UpdateData($table, $where, $where_value, $data=array()){
        // Syntax update data
        $this->db->where($where, $where_value)->update($table, $data);

        // Mengembalikan nilai berapa banyak baris 
        // yang telah ter-update
        return $this->db->affected_rows();
    }

    function DeleteData($table, $where, $where_value){
        // Syntax delete data
        $this->db->where($where, $where_value)->delete($table);

        // Mengembalikan nilai berapa banyak baris 
        // yang telah ter-delete
        return $this->db->affected_rows();
    }

    function GetData($table, $sort_by = null, $sort_value = null, $limit = null, $offset = null){
        // Syntax select data
        $this->db->from($table);

        // Pengurutan data berdasarkan $sort_by dan diurutkan
        // dari atas ke bawah atau sebaliknya ($sort_value)
        $this->db->order_by($sort_by, $sort_value);
        
        // Limit untuk menampilkan jumlah data
        $this->db->limit($limit, $offset);
        $query = $this->db->get();

        // Mengembalikan data hasil SELECT
        return $query;
    }

    function GetDataWhere($table, $where, $value, $sort_by = null, $sort_value = null){
        $this->db->where($where, $value);
        
        // Pengurutan data berdasarkan $sort_by dan diurutkan
        // dari atas ke bawah atau sebaliknya ($sort_value)
        $this->db->order_by($sort_by, $sort_value);
        $query = $this->db->get($table);

        // Mengembalikan data hasil SELECT
        return $query;
    }

    function GetDataLike($table, $where, $sort_by = null, $sort_value = null){
        $this->db->like($where);

        // Pengurutan data berdasarkan $sort_by dan diurutkan
        // dari atas ke bawah atau sebaliknya ($sort_value)
        $this->db->order_by($sort_by, $sort_value);
        $query = $this->db->get($table);

        // Mengembalikan data hasil SELECT
        return $query;
    }

    function GetDataJoin($table, $join, $onjoin, $sort_by = null, $sort_value = null, $limit = null, $offset = null){
        // Syntax select data
        $this->db->from($table);

        // Join table
        $this->db->join($join, $onjoin);

        // Pengurutan data berdasarkan $sort_by dan diurutkan
        // dari atas ke bawah atau sebaliknya ($sort_value)
        $this->db->order_by($sort_by, $sort_value);
        
        // Limit untuk menampilkan jumlah data
        $this->db->limit($limit, $offset);
        $query = $this->db->get();

        // Mengembalikan data hasil SELECT
        return $query;
    }

    function GetDataJoinWhere($table, $join, $onjoin, $where, $value, $sort_by = null, $sort_value = null, $limit = null, $offset = null){
        // Syntax select data
        $this->db->from($table);

        // Join table
        $this->db->join($join, $onjoin);

        $this->db->where($where, $value);

        // Pengurutan data berdasarkan $sort_by dan diurutkan
        // dari atas ke bawah atau sebaliknya ($sort_value)
        $this->db->order_by($sort_by, $sort_value);
        
        // Limit untuk menampilkan jumlah data
        $this->db->limit($limit, $offset);
        $query = $this->db->get();

        // Mengembalikan data hasil SELECT
        return $query;
    }
}