<?php
class Default_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function get($table) {
    	$query = $this->db->get($table,25,0);
    	return $query->result();
    }

    function get_afko() {
    	$this->db->select('AUFNR,GSTRS,GLTRS,PDATV,BEDID');
    	$query = $this->db->get('afko',25,0);
    	return $query->result();
    }

    function get_mara() {
        $this->db->select('MATNR,VPSTA,PSTAT,MTART,MBRSH,MATKL,MEINS');
        $query = $this->db->get('mara',25,0);
        return $query->result();
    }
}
?>