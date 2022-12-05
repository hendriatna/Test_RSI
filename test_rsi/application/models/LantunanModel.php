<?php
class LantunanModel extends CI_Model{
	function getLantunan(){
		// $result = $this->db->get('tbl_app_lantunan');
		$sql = "SELECT ln.NAMA as nama,
					ln.LINK_URL as url,
					lg.LAGAM_NAME as lagam 
				FROM tbl_app_lantunan ln
				left join tbl_app_lagam lg on lg.LAGAM_CODE = ln.lagam
				order by SURAT_IDX asc";
		$query = $this->db->query($sql);     
        $result = $query->result_array();    
        return $result;
	}
}

?>