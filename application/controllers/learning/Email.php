<?php
class Email extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('learning/email/email_form');
    }

    public function send_mail()
    {
        $email_from = $this->input->post('email_from');
        $email_from_password = $this->input->post('email_from_password');
        $email_to = $this->input->post('email_to');
        $gmail = $this->input->post('gmail');

        $config = Array();

        if ($gmail == 1)
        {
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => $email_from,
                'smtp_pass' => $email_from_password,
                'newline'   => "\r\n"
            );
        }

        // Load email library
        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($email_from, 'Your Name');
        $this->email->to($email_to);
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        // Send mail
        if ($this->email->send())
        {
            $this->session->set_flashdata('email_sent', 'Email sent successfully.');
        }
        else
        {
            $this->session->set_flashdata('email_sent', 'Error in sending Email.');
            show_error($this->email->print_debugger());
        }

        $this->load->view('learning/email/email_form');
    }
}
?>
