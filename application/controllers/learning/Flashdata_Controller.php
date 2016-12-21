<?php
class Flashdata_Controller extends CI_Controller
{
    public function index()
    {
        //Load session library
        $this->load->library('session');

        //redirect to home page
        $this->load->view('learning/flashdata/index');
    }

    public function add()
    {
        $this->load->helper('url');

        //Load session library
        $this->load->library('session');

        //add flash data
        $this->session->set_flashdata('item', 'item-value');

        //redirect to home page
        redirect('learning/Flashdata_Controller');
    }
}
?>
