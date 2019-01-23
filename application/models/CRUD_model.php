<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_model extends CI_Model {

	public function __construct()
    {
        $this->load->database();
    }

    public function createData()
    {
        $data=$arrayName = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Birth_Date' => $this->input->post('BirthDate'),
            'Phone' => $this->input->post('Phone'),
            'Bio' => $this->input->post('Bio')
        );

        $this->db->insert('persons',$data);
    }

    public function getAllData()
    {
        $query = $this->db->query('SELECT * FROM persons');

        return $query->result();
    }

    public function getData($id)
    {
        $query = $this->db->query('SELECT * FROM persons WHERE id='.$id);

        return $query->row();
    }

    public function updateData($id)
    {
        $data=$arrayName = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Birth_Date' => $this->input->post('BirthDate'),
            'Phone' => $this->input->post('Phone'),
            'Bio' => $this->input->post('Bio')
        );

        $this->db->where('id',$id);
        $this->db->update('persons',$data);
    }

    public function deleteData($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('persons');
    }
}
