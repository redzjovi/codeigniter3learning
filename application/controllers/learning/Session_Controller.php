<?php
class Session_Controller extends CI_Controller
{
    public function index()
    {
        //loading session library
        $this->load->library('session');

        //adding data to session
        $this->session->set_userdata('name', 'PHP Indonesia');

        $this->load->view('learning/session/index');
    }

    public function unset_session_data()
    {
        //loading session library
        $this->load->library('session');

        //removing session data
        $this->session->unset_userdata('name');
        $this->load->view('learning/session/index');
    }
}
?>
