<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
    }

    public function index()
    {
        /* Load form helper */
        $this->load->helper(array('form'));

        /* Load form validation library */
        $this->load->library('form_validation');

        /* Set validation rule for username field in the form */
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('learning/login/index');
        }
        else
        {
            $this->load->view('learning/login/success');
        }
    }
}
?>
