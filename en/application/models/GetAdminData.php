<?php
class GetAdminData extends CI_Model
{
    public function adminLogin($username, $password)
    {
        $this->load->database();

        // Get the user by username
        $this->db->where("username", $username);
        $query = $this->db->get("users");

        if ($query->num_rows() == 1) {
            $user = $query->row(); // Fetch user details

            // ✅ Verify the hashed password
            if (password_verify($password, $user->password)) {
                return $user; // Return user data if password is correct
            } else {
                return false; // Password incorrect
            }
        } else {
            return false; // Username not found
        }
    }

    public function updateRow($table, $id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }

    public function deleteRow($id, $table)
    {
        return $this->db->where('id', $id)->delete($table);
    }

    public function registerAdmin($data)
    {
        return $this->db->insert('users', $data); // Insert admin data into the 'admin' table
    }

    public function user($username, $password)
    {
        $this->db->where("username", $username);
        $this->db->where("password", md5($password)); // Ensure hashing matches DB
        $query = $this->db->get("users"); // Fetch from users table

        if ($query->num_rows() == 1) {
            return $query->row_array(); // ✅ Return user data
        } else {
            return false; // ❌ If no match, return false
        }
    }

    public function getMenusWithSubmenus()
    {
        // Fetch main menu
        $this->db->select('*');
        $this->db->from('menu');
        $query = $this->db->get();
        $menus = $query->result_array();

        // Fetch submenus for each menu
        foreach ($menus as $key => $menu) {
            $this->db->select('*');
            $this->db->from('submenu');
            $this->db->where('menu_id', $menu['id']);
            $submenu_query = $this->db->get();
            $menus[$key]['submenus'] = $submenu_query->result_array();
        }
        return $menus;
    }

    public function getVoters()
    {
        $this->db->select('*');
        $this->db->from('voters_details');
        $query = $this->db->get();
        return $query->result_array();
    }

}

?>