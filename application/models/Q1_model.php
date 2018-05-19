<?php

class Q1_model extends CI_Model {

    public $tableMetal = 'q1_metal';
    public $tableCoating = 'q1_coating';

    function __construct() {
        parent::__construct();
    }

    function getMetal($conditions = array()) {
        $this->db->select('*');
        $this->db->from($this->tableMetal);
        if (!empty($conditions)) {
            foreach ($conditions as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        $query = $this->db->get();
//        echo $this->db->last_query();exit;
        $result = $query->result_array();
        return $result;
        
    }
    function getCoating($conditions = array()) {
        $this->db->select('*');
        $this->db->from($this->tableCoating);
        if (!empty($conditions)) {
            foreach ($conditions as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
        
    }
    

}

