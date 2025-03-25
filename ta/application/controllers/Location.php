<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Location extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load database library
    }

    public function savePincode()
    {
        // Retrieve the pincode from the POST request
        $postData = json_decode(file_get_contents('php://input'), true);
        $pincode = isset($postData['pincode']) ? trim($postData['pincode']) : null;

        if (!$pincode) {
            $response = [
                'status' => 'error',
                'message' => 'Pincode is required.'
            ];
        } else {
            // Query the database for the pincode
            $this->db->where('TRIM(pincode)', $pincode);
            $query = $this->db->get('pincode');

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $response = [
                    'status' => 'success',
                    'zone' => $row->zone
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Zone not found for this pincode.'
                ];
            }
        }

        // Send the JSON response
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}