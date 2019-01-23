<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUDController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CRUD_model');
    }

	public function index()
	{
        $data['result'] = $this->CRUD_model->getAllData();
		$this->load->view('crud_view',$data);
    }
    
    public function create()
    {
        $this->CRUD_model->createData();
        redirect('CRUDController');
    }

    public function edit($id)
    {
        $data['row'] = $this->CRUD_model->getData($id);
        $this->load->view('crud_edit',$data);
    }

    public function update($id)
    {
        $this->CRUD_model->updateData($id);
        redirect('CRUDController');
    }

    public function delete($id)
    {
        $this->CRUD_model->deleteData($id);
        redirect('CRUDController');
    }
}
