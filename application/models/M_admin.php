<?php

class M_admin extends CI_Model
{
	private $table = 'coba';
    private $select_column      = array('id', 'nama', 'no_hp', 'email');
    private $order_column       = array(null, 'nama', 'no_hp', 'email');

    public function get()
    {
        $this->db->select($this->select_column);
        $this->db->from($this->table);
        if(isset($_POST['search']['value']))
        {
            $this->db->like('nama', $_POST['search']['value']);
            $this->db->or_like('no_hp', $_POST['search']['value']);
            $this->db->or_like('email', $_POST['search']['value']);
        }
        if(isset($_POST['order']))
        {
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else
        {
            $this->db->order_by('id', 'ASC');
        }
    }

    public function datatable()
    {
        $this->get();
        if($_POST['length'] != -1)
        {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function filter_data()
    {
        $this->get();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}

?>