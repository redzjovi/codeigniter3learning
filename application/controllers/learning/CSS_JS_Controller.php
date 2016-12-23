<?php
class CSS_JS_Controller extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('learning/css_js/index.php');
    }
}
?>
