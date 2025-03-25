<?php
class GetData extends CI_Model
{
    public function getmenu_with_submenus()
    {
        $this->load->database();

        // Fetch all menus
        $menus = $this->db->get("menu")->result_array();

        // Fetch submenus for each menu
        foreach ($menus as &$menu) {
            $menu['submenus'] = $this->db->get_where("submenu", ['menu_id' => $menu['id']])->result_array();
        }

        return $menus;
    }
    public function getmarquee()
    {
        $this->load->database();
        return $this->db->get("marquee")->result_array();
    }
    public function getareaglance()
    {
        $this->load->database();
        return $this->db->get("area-glance")->result_array();
    }
    public function getpeople()
    {
        $this->load->database();
        return $this->db->get("people")->result_array();
    }
    public function getapplication()
    {
        $this->load->database();
        return $this->db->get("application")->result_array();
    }
    public function getcontacts()
    {
        $this->load->database();
        return $this->db->get("contact")->result_array();
    }
    public function getplaces()
    {
        $this->load->database();
        return $this->db->get("place_of_interest")->result_array();
    }
    public function getgeneral()
    {
        $this->load->database();
        return $this->db->get("general_section")->result_array();
    }
    public function getrevenue()
    {
        $this->load->database();
        return $this->db->get("revenue_section")->result_array();
    }
    public function gettownplanning()
    {
        $this->load->database();
        return $this->db->get("town_planning_section")->result_array();
    }
    public function getengineeringsection()
    {
        $this->load->database();
        return $this->db->get("engineering_section")->result_array();
    }
    public function getpublichealth()
    {
        $this->load->database();
        return $this->db->get("public_health_section")->result_array();
    }
    public function getinformationtechnology()
    {
        $this->load->database();
        return $this->db->get("information_technology_section")->result_array();
    }
    public function getadministrativereports()
    {
        $this->load->database();
        return $this->db->get("administrativereport")->result_array();
    }
    public function getbudget()
    {
        $this->load->database();
        return $this->db->get("budget")->result_array();
    }
    public function getdownloads()
    {
        $this->load->database();
        return $this->db->get("downloads")->result_array();
    }
    public function gethelpline()
    {
        $this->load->database();
        return $this->db->get("helpline")->result_array();
    }
    public function gethospitals()
    {
        $this->load->database();
        return $this->db->get("hospitals")->result_array();
    }
    public function geteducation()
    {
        $this->load->database();
        return $this->db->get("education")->result_array();
    }

    public function gettnsudp()
    {
        $this->load->database();
        return $this->db->get("tnsudp")->result_array();
    }
    public function getschemes()
    {
        $this->load->database();
        return $this->db->get("scheme")->result_array();
    }
    public function getamrut()
    {
        $this->load->database();
        return $this->db->get("amrut_reforms")->result_array();
    }
    public function getadministrationofficials()
    {
        $this->load->database();
        return $this->db->get("administration_officials")->result_array();
    }
    public function getimportantcontact()
    {
        $this->load->database();
        return $this->db->get("important_contacts")->result_array();
    }
    public function getupdates()
    {
        $this->load->database();
        return $this->db->get("updates")->result_array();
    }
    public function getquicklinks()
    {
        $this->load->database();
        return $this->db->get("quick_links")->result_array();
    }
    public function getfooter()
    {
        $this->load->database();
        return $this->db->get("footer_menu")->result_array();
    }
    public function getReports()
    {
        $this->load->database();
        return $this->db->get('master_plan')->result_array();
    }
    public function getnews()
    {
        $this->load->database();
        return $this->db->get('news')->result_array();
    }
    public function getfinancial()
    {
        $this->load->database();
        return $this->db->get('audited_financial_statement')->result_array();
    }
    public function getgo()
    {
        $this->load->database();
        return $this->db->get('gos_and_notifications')->result_array();
    }
    public function getpopulation()
    {
        $this->load->database();
        return $this->db->get('population')->result_array();
    }
    public function getvoters()
    {
        $this->load->database();
        return $this->db->get('voters_details')->result_array();
    }
    public function getroads()
    {
        $this->load->database();
        return $this->db->get('roads')->result_array();
    }
    public function getroadproject()
    {
        $this->load->database();
        return $this->db->get('road_project')->result_array();
    }
    public function getswd()
    {
        $this->load->database();
        return $this->db->get('storm_water_drains')->result_array();
    }
    public function getbusstand()
    {
        $this->load->database();
        return $this->db->get('bus_stand')->result_array();
    }
    public function getwastegenereation()
    {
        $this->load->database();
        return $this->db->get('waste_generation')->result_array();
    }
    public function getswm()
    {
        $this->load->database();
        return $this->db->get('swm')->result_array();
    }
    public function getswm_2()
    {
        $this->load->database();
        return $this->db->get('swm_2')->result_array();
    }
    public function getcouncil()
    {
        $this->load->database();
        return $this->db->get('council_resolution')->result_array();
    }
    public function getlaws()
    {
        $this->load->database();
        return $this->db->get('by_law')->result_array();
    }
    public function getslbm()
    {
        $this->load->database();
        return $this->db->get('service_level_bench_mark')->result_array();
    }
    public function getfcg()
    {
        $this->load->database();
        return $this->db->get('fcg')->result_array();
    }
    public function getknowledgecenter()
    {
        $this->load->database();
        return $this->db->get('knowledge_center')->result_array();
    }

    public function getparks()
    {
        $this->load->database();
        return $this->db->get('parks')->result_array();
    }
    public function getstreetlights()
    {
        $this->load->database();
        return $this->db->get('street_light')->result_array();
    }
    public function gettoilet()
    {
        $this->load->database();
        return $this->db->get('toilet')->result_array();
    }
}
