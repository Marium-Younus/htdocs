<?php

class Home extends Ci_Controller{

    public function index()
    {
        $this->load->model('Crud_Model');
        $records = $this->Crud_Model->getrecords();
        $this->load->view('index',['rec'=>$records]);
    }
    public function create()
    {
        $this->load->view('createpage');
    }
    public function save()
    {
        $this->form_validation->set_rules('customername','Customer name','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('country','Country','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if($this->form_validation->run())
        {
          $data = $this->input->post();
          $this->load->model('Crud_Model');
            if( $this->Crud_Model->saveRecord($data)){
                $msg-"Record Successfully inserted";
            }
            else{
                $msg-"Record not Successfully inserted";
            }
            return redirect('Home/index');
        }
        else{
            $this->load->view('createpage');
        }

       
    }

    public function Delete($custid)
    {
        $this->load->model('Crud_Model');
        $this->Crud_Model->deleteRecord($custid);
        return redirect('Home/index');
    }

    public function Edit($custid){
        $this->load->model('Crud_Model');
         $rec= $this->Crud_Model->getallrecord($custid);
        $this->load->view('updatepage',['col'=>$rec]);

    }
    public function updateAction($custid){
        $this->form_validation->set_rules('customername','Customer name','required');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('country','Country','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if($this->form_validation->run())
        {
          $data = $this->input->post();
          $this->load->model('Crud_Model');
          $this->Crud_Model->updateRecord($custid,$data);
          return redirect('Home/index');   
        }
    }
}



?>