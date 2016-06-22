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

    function get_actual_prod($WERKS = '%') {
        $this->db->join('ob_rawcoal','ob_rawcoal.MATNR=actual_prod.PLNBEZ');
        $this->db->like('actual_prod.WERKS',$WERKS,'after');
        $query = $this->db->get('actual_prod');
        return $query->result();
    }

    function get_plan_prod($WERKS = '%') {
        $this->db->select('TOTAL, AUFNR, GSTRP, MAKTX');
        $this->db->like('plan_prod.WERKS',$WERKS,'after');
        $query = $this->db->get('plan_prod');
        return $query->result();
    }

}
?>