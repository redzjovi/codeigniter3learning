<?php
class Users_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert('users', $data);
    }

    public function update($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update("users", $data);
    }

    public function delete($id)
    {
        $this->db->delete('users', array('id' => $id));
    }

}
?>
