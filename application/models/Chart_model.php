<?php
class Chart_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function get_country() {
    	$this->db->select('LAND1, count(*) AS total');
    	$this->db->group_by('LAND1');
    	$this->db->order_by('total','desc');
    	$query = $this->db->get('KNA1', 7, 0);
    	return $query->result();
    }

}
?>