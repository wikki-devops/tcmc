<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Admin extends CI_Controller
{
    private $upload_path = './assets/uploads/';
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(['session', 'form_validation']);
        $this->load->helper(['form', 'url', 'file']);
        $this->load->model("GetAdminData");
        $this->load->model('GetData');

        $allowed_methods = ['login', 'register', 'adminLogin', 'adminRegister']; // Methods that don't require login
        $current_method = $this->router->fetch_method();

        if (!$this->session->userdata('logged_in') && !in_array($this->router->fetch_method(), $allowed_methods)) {
            if ($current_method !== 'index') {
                $this->session->set_flashdata('danger', 'You must log in first.');
            }
            redirect(base_url('admin/login'));
            exit;
        }

        // Prevent access to login/register if already logged in
        if ($this->session->userdata('logged_in') && in_array($this->router->fetch_method(), $allowed_methods)) {
            redirect(base_url('admin/dashboard'));
            exit;
        }
    }

    public function index()
    {
        $data['pagetitle'] = 'Admin Dashboard';
        $data['maintitle'] = 'Section';

        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();

        $data['updates'] = $this->GetData->getupdates();
        $data['areaglance'] = $this->GetData->getareaglance();
        $data['commissioner'] = $this->GetData->getpeople();
        $data['application'] = $this->GetData->getapplication();
        $data['quick'] = $this->GetData->getquicklinks();
        $data['news'] = array_slice($this->GetData->getnews(), 0, 6); // Take only the first 6 rows


        $data['footers'] = $this->GetData->getfooter();

        $data['viewpage'] = 'admin/home'; // Loads dashboard inside index.php
        $this->load->view('admin/index', $data);
    }

    public function user()
    {
        $data["users"] = $this->GetData->users();
        $data["view_page"] = "user";
        $this->load->view("welcome_message", $data);
    }

    public function dashboard()
    {
        $data['pagetitle'] = 'Admin Dashboard';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['viewpage'] = 'admin/dashboard'; // Loads dashboard inside index.php
        $this->load->view('admin/index', $data);
    }

    public function adminLogin()
    {
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Reload login page with errors
            redirect(base_url('admin/login'));
        } else {
            // Get form input
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);

            // ✅ Load the correct model
            $user = $this->GetAdminData->adminLogin($username, $password);

            if ($user) {
                // ✅ Set session data
                $user_data = [
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'logged_in' => true
                ];
                $this->session->set_userdata($user_data); // Store session

                // Redirect to dashboard
                $this->session->set_flashdata('success', 'Welcome, ' . $user->username);
                redirect(base_url('admin/'));
            } else {
                // Invalid credentials
                $this->session->set_flashdata('danger', 'Invalid username or password!');
                redirect(base_url('admin/login'));
            }
        }
    }

    public function adminRegister()
    {
        // Load form helper and form validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            // Load the registration view with errors
            $this->load->view('admin/register');
        } else {
            // Get form data
            $username = $this->input->post('username', true);
            $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT); // Secure password

            // Prepare data for insertion
            $adminData = [
                'username' => $username,
                'password' => $password, // Store hashed password
            ];

            // Insert into database
            $insert_id = $this->GetAdminData->registerAdmin($adminData);

            if ($insert_id) {
                $this->session->set_flashdata('success', 'Registration successful! You can now log in.');
                redirect(base_url('admin/login'));
            } else {
                $this->session->set_flashdata('danger', 'Registration failed. Please try again.');
                redirect(base_url('admin/register'));
            }
        }
    }

    public function updateData()
    {
        header('Content-Type: application/json'); // Set response type

        $id = $this->input->post("id");
        $table = $this->input->post("table"); // Get table name

        if (!$id || !$table) {
            echo json_encode(["status" => "error", "message" => "ID or table name missing"]);
            return;
        }

        $updateData = $this->input->post();
        unset($updateData['id']); // Remove ID from update array
        unset($updateData['table']); // Remove table name from update array

        $updated = $this->GetAdminData->updateRow($table, $id, $updateData);

        echo json_encode(["status" => $updated ? "success" : "error"]);
    }

    public function deleteRow()
    {
        header('Content-Type: application/json');

        $id = $this->input->post('id');
        $table = $this->input->post('table');

        if (!$id || !$table) {
            echo json_encode(["status" => "error", "message" => "Missing parameters"]);
            return;
        }

        $delete = $this->GetAdminData->deleteRow($id, $table);

        if ($delete) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Delete failed"]);
        }
    }




    public function login()
    {
        $this->load->view('admin/login');
    }

    // ✅ Register Page (Separate Page)
    public function register()
    {
        $this->load->view('admin/register');
    }

    // ✅ Logout Function
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'You have been logged out.');
        redirect(base_url('admin/login'));
    }

    private function get_files()
    {
        $files = scandir($this->upload_path);
        $files = array_diff($files, array('.', '..'));

        $file_list = array();
        foreach ($files as $file) {
            $file_path = $this->upload_path . $file;
            $file_list[] = array(
                'name' => $file,
                'size' => filesize($file_path),
                'path' => base_url('assets/uploads/' . $file)
            );
        }
        return $file_list;
    }

    public function upload()
    {
        if (!empty($_FILES)) {
            $config['upload_path'] = $this->upload_path;
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx|zip';
            $config['max_size'] = 2048; // 2MB

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                echo json_encode(array('status' => 'success'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => $this->upload->display_errors()));
            }
        }
    }

    public function delete()
    {
        $filename = $this->input->post('filename');
        $file_path = $this->upload_path . $filename;

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo json_encode(array('status' => 'success'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Delete failed'));
            }
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'File not found'));
        }
    }



    public function home()
    {
        $data['maintitle'] = 'Section';
        $data['pagetitle'] = 'Home';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['updates'] = $this->GetData->getupdates();
        $data['areaglance'] = $this->GetData->getareaglance();
        $data['commissioner'] = $this->GetData->getpeople();
        $data['application'] = $this->GetData->getapplication();
        $data['quick'] = $this->GetData->getquicklinks();
        $data['news'] = array_slice($this->GetData->getnews(), 0, 6); // Take only the first 6 rows
        $data['viewpage'] = 'admin/home'; // Loads home inside index.php
        $this->load->view('admin/index', $data);
    }

    //ABOUT US
    public function about_city()
    {
        $data['maintitle'] = 'About us';
        $data['pagetitle'] = 'About City';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/about-city'; // Loads aboutcity inside index.php
        $this->load->view('admin/index', $data);
    }

    public function how_to_reach()
    {
        $data['maintitle'] = 'About us';
        $data['pagetitle'] = 'How to Reach';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/how-to-reach'; // Loads howtoreach inside index.php
        $this->load->view('admin/index', $data);
    }

    public function place_of_interest()
    {
        $data['maintitle'] = 'About us';
        $data['pagetitle'] = 'Place of Interest';
        $data['tablename'] = 'place_of_interest';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['poi'] = $this->GetData->getplaces();
        $data['viewpage'] = 'admin/place-of-interest'; // Loads placeofinterest inside index.php
        $this->load->view('admin/index', $data);
    }

    public function contact_us()
    {
        $data['maintitle'] = 'About us';
        $data['pagetitle'] = 'Contact Us';
        $data['tablename'] = 'contact';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['contacts'] = $this->GetData->getcontacts();
        $data['viewpage'] = 'admin/contact-us'; // Loads contactus inside index.php
        $this->load->view('admin/index', $data);
    }


    //INFORMATION
    public function e_governance()
    {
        $data['maintitle'] = 'Information';
        $data['pagetitle'] = 'E-Governance';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/egovernance'; // Loads aboutcity inside index.php
        $this->load->view('admin/index', $data);
    }

    public function citizen_charter()
    {
        $data['maintitle'] = 'Information';
        $data['pagetitle'] = 'Citizen Charter';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/citizen-charter'; // Loads howtoreach inside index.php
        $this->load->view('admin/index', $data);
    }

    public function officer_details()
    {
        $data['maintitle'] = 'Information';
        $data['pagetitle'] = 'Officer Details';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/officer-details'; // Loads howtoreach inside index.php
        $this->load->view('admin/index', $data);
    }

    public function whos_who()
    {
        $data['maintitle'] = 'Information';
        $data['pagetitle'] = 'Who\'s Who';
        $data['tablename'] = 'whos_who';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['people'] = $this->GetData->getpeople();
        $data['viewpage'] = 'admin/whos-who'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    //DEPARTMENTS
    public function general_section()
    {
        $data['maintitle'] = 'Departments';
        $data['pagetitle'] = 'General Section';
        $data['tablename'] = 'general_section';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['general'] = $this->GetData->getgeneral();
        $data['viewpage'] = 'admin/general-section'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function revenue_section()
    {
        $data['maintitle'] = 'Departments';
        $data['pagetitle'] = 'Revenue Section';
        $data['tablename'] = 'revenue_section';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['revenue'] = $this->GetData->getrevenue();
        $data['viewpage'] = 'admin/revenue-section'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function town_planning_section()
    {
        $data['maintitle'] = 'Departments';
        $data['pagetitle'] = 'Town Planning Section';
        $data['tablename'] = 'town_planning_section';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['tps'] = $this->GetData->gettownplanning();
        $data['viewpage'] = 'admin/town-planning-section'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function engineering_section()
    {
        $data['maintitle'] = 'Departments';
        $data['pagetitle'] = 'Engineering Section';
        $data['tablename'] = 'engineering_section';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['engineering'] = $this->GetData->getengineeringsection();
        $data['viewpage'] = 'admin/engineering-section'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function public_health_section()
    {
        $data['maintitle'] = 'Departments';
        $data['pagetitle'] = 'Public Health Section';
        $data['tablename'] = 'public_health_section';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['public'] = $this->GetData->getpublichealth();
        $data['viewpage'] = 'admin/public-health-section'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function information_technology_section()
    {
        $data['maintitle'] = 'Departments';
        $data['pagetitle'] = 'Information Technology Section';
        $data['tablename'] = 'information_technology_section';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['its'] = $this->GetData->getinformationtechnology();
        $data['viewpage'] = 'admin/information-technology'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }


    //PUBLICATIONS

    public function administrative_reports()
    {
        $data['maintitle'] = 'Publications';
        $data['pagetitle'] = 'Administrative Reports';
        $data['tablename'] = 'administrativereport';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['administrative'] = $this->GetData->getadministrativereports();
        $data['viewpage'] = 'admin/administrative-reports'; // Loads administrativereports inside index.php
        $this->load->view('admin/index', $data);
    }

    public function audited_financial_statement()
    {
        $data['maintitle'] = 'Publications';
        $data['pagetitle'] = 'Audited Financial Statement';
        $data['tablename'] = 'audited_financial_statement';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['financial'] = $this->GetData->getfinancial();
        $data['viewpage'] = 'admin/audited-financial-statement'; // Loads auditedfinancialstatement inside index.php
        $this->load->view('admin/index', $data);
    }

    public function budget_details()
    {
        $data['maintitle'] = 'Publications';
        $data['pagetitle'] = 'Budget Details';
        $data['tablename'] = 'budget';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['budget'] = $this->GetData->getbudget();
        $data['viewpage'] = 'admin/budget-details'; // Loads budgetdetails inside index.php
        $this->load->view('admin/index', $data);
    }

    public function council_resolution()
    {
        $data['maintitle'] = 'Publications';
        $data['pagetitle'] = 'Council Resolution';
        $data['tablename'] = 'council_resolution';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['council'] = $this->GetData->getcouncil();
        $data['viewpage'] = 'admin/council-resolution'; // Loads councilresolution inside index.php
        $this->load->view('admin/index', $data);
    }

    public function solid_waste_management()
    {
        $data['maintitle'] = 'Publications';
        $data['pagetitle'] = 'Solid Waste Management';
        $data['tablename'] = 'solid_waste_management';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['swm'] = $this->GetData->getswm();
        $data['viewpage'] = 'admin/solid-waste-management'; // Loads solidwastemanagement inside index.php
        $this->load->view('admin/index', $data);
    }

    // GENERAL INFO

    public function population()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Population';
        $data['tablename'] = 'population';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['population'] = $this->GetData->getpopulation();
        $data['viewpage'] = 'admin/population';
        $this->load->view('admin/index', $data);
    }

    public function voters_details()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Voters Details';
        $data['tablename'] = 'voters_details';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['voters'] = $this->GetAdminData->getVoters();
        $data['viewpage'] = 'admin/voters-details';

        $this->load->view('admin/index', $data);
    }

    public function sewerage()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Sewerage';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/sewerage';

        $this->load->view('admin/index', $data);
    }

    public function roads()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Roads';
        $data['tablename'] = 'road_project';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['roadproject'] = $this->GetData->getroadproject();
        $data['viewpage'] = 'admin/roads';

        $this->load->view('admin/index', $data);
    }

    public function bus_stand()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Bus Stand';
        $data['tablename'] = 'bus_stand';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['busstand'] = $this->GetData->getbusstand();
        $data['viewpage'] = 'admin/bus-stand';

        $this->load->view('admin/index', $data);
    }

    public function storm_water_drains()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Storm Water Drains';
        $data['tablename'] = 'storm_water_drains';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['swd'] = $this->GetData->getswd();
        $data['viewpage'] = 'admin/storm-water-drains';

        $this->load->view('admin/index', $data);
    }

    public function parks()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Parks';
        $data['tablename'] = 'parks';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['parks'] = $this->GetData->getparks();
        $data['viewpage'] = 'admin/parks';

        $this->load->view('admin/index', $data);
    }

    public function street_lights()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Street Lights';
        $data['tablename'] = 'street_light';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['streetlight'] = $this->GetData->getstreetlights();
        $data['viewpage'] = 'admin/street-lights';

        $this->load->view('admin/index', $data);
    }

    public function toilet()
    {
        $data['maintitle'] = 'General Info';
        $data['pagetitle'] = 'Toilet';
        $data['tablename'] = 'toilet';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['toilet'] = $this->GetData->gettoilet();
        $data['viewpage'] = 'admin/toilet';

        $this->load->view('admin/index', $data);
    }

    //CITY SERVICES
    public function helpline()
    {
        $data['maintitle'] = 'City Services';
        $data['pagetitle'] = 'Helpline';
        $data['tablename'] = 'helpline';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['helpline'] = $this->GetData->gethelpline();
        $data['viewpage'] = 'admin/helpline'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function important_contacts()
    {
        $data['maintitle'] = 'City Services';
        $data['pagetitle'] = 'Important Contacts';
        $data['tablename'] = 'important_contacts';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['impcontacts'] = $this->GetData->getimportantcontact();
        $data['viewpage'] = 'admin/important-contacts'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function hospitals()
    {
        $data['maintitle'] = 'City Services';
        $data['pagetitle'] = 'Hospitals';
        $data['tablename'] = 'hospitals';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['hospital'] = $this->GetData->gethospitals();
        $data['viewpage'] = 'admin/hospitals'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function educational_institutions()
    {
        $data['maintitle'] = 'City Services';
        $data['pagetitle'] = 'Educational Institutions';
        $data['tablename'] = 'education';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['education'] = $this->GetData->geteducation();
        $data['viewpage'] = 'admin/educational-institutions'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    public function knowledge_center()
    {
        $data['maintitle'] = 'City Services';
        $data['pagetitle'] = 'Knowledge Center';
        $data['tablename'] = 'knowledge_center';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['knowledge'] = $this->GetData->getknowledgecenter();
        $data['viewpage'] = 'admin/knowledge-center'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }


    //SCHEMES
    public function tnsudp()
    {
        $data['maintitle'] = 'Schemes';
        $data['pagetitle'] = 'TNSUDP';
        $data['tablename'] = 'tnsudp';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['tnsudp'] = $this->GetData->gettnsudp();
        $data['viewpage'] = 'admin/tnsudp'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }


    public function amrut_reforms()
    {
        $data['maintitle'] = 'Schemes';
        $data['pagetitle'] = 'Amrut Reforms';
        $data['tablename'] = 'amrut_reforms';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['amrut'] = $this->GetData->getamrut();
        $data['viewpage'] = 'admin/amrut-reforms'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }


    public function all_other_schemes()
    {
        $data['maintitle'] = 'Schemes';
        $data['pagetitle'] = 'All Other Schemes';
        $data['tablename'] = 'allscheme';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['allschemes'] = $this->GetData->getschemes();
        $data['viewpage'] = 'admin/all-other-schemes'; // Loads whoswho inside index.php
        $this->load->view('admin/index', $data);
    }

    //GALLERY
    public function gallery()
    {
        $data['maintitle'] = 'Gallery';
        $data['pagetitle'] = 'Gallery';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/gallery'; // Loads gallery inside index.php
        $this->load->view('admin/index', $data);
    }

    //Footer

    public function public_disclosure()
    {
        $data['maintitle'] = 'Footer';
        $data['pagetitle'] = 'Public Disclosure';
        $data['tablename'] = 'public_disclosure';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/public-disclosure'; // Loads publicdisclosure inside index.php
        $this->load->view('admin/index', $data);
    }

    public function master_plan_and_land_use()
    {
        $data['maintitle'] = 'Footer';
        $data['pagetitle'] = 'Master Plan and Land Use';
        $data['tablename'] = 'master_plan';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['reports'] = $this->GetData->getReports();
        $data['viewpage'] = 'admin/master-plan-and-land-use'; // Loads masterplanandlanduse inside index.php
        $this->load->view('admin/index', $data);
    }

    public function by_law()
    {
        $data['maintitle'] = 'Footer';
        $data['pagetitle'] = 'By Law';
        $data['tablename'] = 'by_law';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['law'] = $this->GetData->getlaws();
        $data['viewpage'] = 'admin/by-law'; // Loads bylay inside index.php
        $this->load->view('admin/index', $data);
    }

    public function service_level_bench_mark()
    {
        $data['maintitle'] = 'Footer';
        $data['pagetitle'] = 'Service Level Bench Mark';
        $data['tablename'] = 'service_level_bench_mark';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['slbm'] = $this->GetData->getslbm();
        $data['viewpage'] = 'admin/service-level-bench-mark'; // Loads servicelevelbench inside index.php
        $this->load->view('admin/index', $data);
    }
    public function finance_commission_grant()
    {
        $data['maintitle'] = 'Footer';
        $data['pagetitle'] = 'Finance Commission Grant';
        $data['tablename'] = 'fcg';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['fcg'] = $this->GetData->getfcg();
        $data['viewpage'] = 'admin/finance-commission-grant'; // Loads financecommissiongrant inside index.php
        $this->load->view('admin/index', $data);
    }

    public function bribery_is_against_the_law()
    {
        $data['maintitle'] = 'Footer';
        $data['pagetitle'] = 'Bribery is Against the Law';
        $data['tablename'] = 'bribery_is_against_the_law';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['viewpage'] = 'admin/bribery-is-against-the-law'; // Loads briberyisagainstthelaw inside index.php
        $this->load->view('admin/index', $data);
    }

    public function important_gos_and_notifications()
    {
        $data['maintitle'] = 'Footer';
        $data['pagetitle'] = 'Important GOs and Notifications';
        $data['tablename'] = 'gos-and-notifications';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['footers'] = $this->GetData->getfooter();
        $data['gos'] = $this->GetData->getgo();
        $data['viewpage'] = 'admin/important-gos-and-notifications'; // Loads importantgosandnotifications inside index.php
        $this->load->view('admin/index', $data);
    }
    //FILE MANAGER
    public function file_manager()
    {
        $data['maintitle'] = 'File Manager';
        $data['pagetitle'] = 'File Manager';
        $data['menus'] = $this->GetAdminData->getMenusWithSubmenus();
        $data['files'] = $this->get_files();
        $data['viewpage'] = 'admin/file-manager'; // Loads gallery inside index.php
        $this->load->view('admin/index', $data);
    }
}
