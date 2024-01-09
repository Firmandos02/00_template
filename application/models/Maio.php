<?php
class Maio extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function get_stat($stat)
	{
		$query  = $this->db->query(
			"
             SELECT id, description FROM stat WHERE id = '$stat'
            "
		);
		return $query->row_array();
	}
	public function get_stat_pm($stat)
	{
		$query  = $this->db->query(
			"
             SELECT id, ket_pm FROM stat_pm WHERE id = '$stat'
            "
		);
		return $query->row_array();
	}
	public function get_stat_all()
	{
		$query  = $this->db->query(
			"
             SELECT id, description, color_bg FROM stat 
            "
		);
		return $query->result_array();
	}
	public function get_stat_all_pm()
	{
		$query  = $this->db->query(
			"
             SELECT id, ket_pm, color_bg FROM stat_pm 
            "
		);
		return $query->result_array();
	}
	public function get_ch_area()
	{
		$query  = $this->db->query(
			"
			SELECT id, area, lini, mesin FROM transct_area
        "
		);
		return $query->result_array();
	}

	public function get_area()
	{
		$query  = $this->db->query(
			"
			SELECT DISTINCT area
			FROM transct_area
			ORDER BY area ASC
        "
		);
		return $query->result_array();
	}
	public function get_lini()
	{
		$query  = $this->db->query(
			"
			SELECT DISTINCT lini
			FROM transct_area
			ORDER BY lini ASC
        "
		);
		return $query->result_array();
	}
	public function get_item()
	{
		$query  = $this->db->query(
			"
			SELECT DISTINCT a.item 
			FROM transct_sheet AS a
			WHERE a.std_stat = '1'
        "
		);
		return $query->result_array();
	}
	public function get_point()
	{
		$query  = $this->db->query(
			"
			SELECT DISTINCT a.point
			FROM transct_sheet AS a
			WHERE a.std_stat = '1'
        "
		);
		return $query->result_array();
	}
	public function get_metode()
	{
		$query  = $this->db->query(
			"
			SELECT DISTINCT a.metode
			FROM transct_sheet AS a
			WHERE a.std_stat = '1'
        "
		);
		return $query->result_array();
	}


	public function get_csheet()
	{
		$query  = $this->db->query(
			"
			SELECT a.*,
			b.area, b.lini,b.mesin
			FROM transct_sheet AS a
			LEFT JOIN transct_area AS b
			ON a.id_doc = b.id_doc
			WHERE a.std_stat = '1'
			
        "
		);
		return $query->result_array();
	}
}
