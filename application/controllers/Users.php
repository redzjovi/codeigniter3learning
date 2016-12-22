<?php
class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_Model');
        $this->output->enable_profiler(ENVIRONMENT == 'development');
    }

    public function index()
    {
        $query = $this->db->get("users");
        $data['users'] = $query->result();

        $this->load->view('users/read', $data);
    }

    public function create()
    {
        $this->load->view('users/create');
    }

    public function create_action()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password')
        );

        $this->Users_Model->insert($data);

        redirect('users');
    }

    public function update()
    {
        $id = $this->uri->segment('3');
        $query = $this->db->get_where("users", array("id" => $id));
        $data['users'] = $query->row();
        $data['id'] = $id;
        $this->load->view('users/update', $data);
    }

    public function update_action()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'name' => $this->input->post('name'),
            'password' => $this->input->post('password')
        );

        $id = $this->input->post('id');
        $this->Users_Model->update($data, $id);

        redirect('users');
    }

    public function delete_action()
    {
        $id = $this->uri->segment('3');
        $this->Users_Model->delete($id);

        redirect('users');
    }

}
?>
