<?php

class Home extends CI_Controller 
{
    public function index()
    {
        $this->load->model('CrudModel');
        $results=$this->CrudModel->ShowRecord();       
        $this->load->view('index',['rd'=> $results]);
       
    }

    public function InsertPage()
    {
        $this->load->view('InsertPage');


    }
    public function Save()
    {
        
      $this->form_validation->set_rules('customername','Customer Name','required');
      $this->form_validation->set_rules('Phone','Phone','required');
      $this->form_validation->set_rules('Address','Address','required');
      $this->form_validation->set_rules('city','City','required');
      $this->form_validation->set_rules('country','Country','required');
      $this->form_validation->set_error_delimiters('<div style=color:red>', '</div>');
        if($this->form_validation->run())
        {
               $data=$this->input->post();
            $this->load->model('CrudModel');
            $this->CrudModel->InsertRecord($data);
            return redirect('Home/index');

        }
        else
        {
            $this->load->view('InsertPage');
        }
    }

   public function DeleteAction($id)
    {
        $this->load->model('CrudModel');
        $this->CrudModel->DeleteRecord($id);
        return redirect('Home/index');


    }

    public function UpdateAction($id)
    {
        $this->load->model('CrudModel');
        $abc=$this->CrudModel->getallrecord($id);
        print_r($abc);
        $this->load->view('UpdateAction',['col'=>$abc]);
       


    }

    public function editrecord($id)
    {
        $data=$this->input->post();
        $this->load->model('CrudModel');
        $this->CrudModel->updaterecord($id,$data);
        return redirect('Home/index');
       
    }
}




?>