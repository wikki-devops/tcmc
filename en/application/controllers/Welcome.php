<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('GetData');
        $this->load->model('Visitor_model');
    }

    //home
    public function index()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['areaglance'] = $this->GetData->getareaglance();
        $data['commissioner'] = $this->GetData->getpeople();
        $data['application'] = $this->GetData->getapplication();
        $data['updates'] = $this->GetData->getupdates();
        $data['quick'] = $this->GetData->getquicklinks();
        $data['news'] = array_slice($this->GetData->getnews(), 0, 6); // Take only the first 6 rows
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['viewpgae'] = 'index';
        $this->load->view('welcome_message', $data);
    }

    public function events_festivals()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Events and Festivals';
        $data['viewpgae'] = 'events-festivals';
        $this->load->view('welcome_message', $data);
    }
    public function tourist_information()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Tourist Information';
        $data['viewpgae'] = 'tourist-information';
        $this->load->view('welcome_message', $data);
    }

    //about us
    public function about_city()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'About';
        $data['viewpgae'] = 'about';
        $this->load->view('welcome_message', $data);
    }
    public function how_to_reach()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'How to Reach';
        $data['viewpgae'] = 'how-to-reach';
        $this->load->view('welcome_message', $data);
    }
    public function place_of_interest()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['places'] = $this->GetData->getplaces();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Place of Interest';
        $data['viewpgae'] = 'place-of-interest';
        $this->load->view('welcome_message', $data);
    }
    public function contact_us()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['commissioner'] = $this->GetData->getpeople();
        $data['contacts'] = $this->GetData->getcontacts();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Contact Us';
        $data['viewpgae'] = 'contact-us';
        $this->load->view('welcome_message', $data);
    }
    //Information
    public function e_governance()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'E - Governance';
        $data['viewpgae'] = 'e-governance';
        $this->load->view('welcome_message', $data);
    }
    public function citizen_charter()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Citizen Charter';
        $data['viewpgae'] = 'citizen-charter';
        $this->load->view('welcome_message', $data);
    }
    public function officer_details()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Officer Details';
        $data['viewpgae'] = 'officer-details';
        $this->load->view('welcome_message', $data);
    }
    //Who's Who
    public function whos_who()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['commissioner'] = $this->GetData->getpeople();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = "Who's Who";
        $data['viewpgae'] = 'whos-who';
        $this->load->view('welcome_message', $data);
    }
    //Departments
    public function general_section()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['general'] = $this->GetData->getgeneral();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'General Section';
        $data['viewpgae'] = 'general-section';
        $this->load->view('welcome_message', $data);
    }

    public function revenue_section()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['revenue'] = $this->GetData->getrevenue();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Revenue Section';
        $data['viewpgae'] = 'revenue-section';
        $this->load->view('welcome_message', $data);
    }
    public function town_planning_section()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['townplanning'] = $this->GetData->gettownplanning();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Town Planning Section';
        $data['viewpgae'] = 'town-planning-section';
        $this->load->view('welcome_message', $data);
    }
    public function engineering_section()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['engineering'] = $this->GetData->getengineeringsection();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Engineering Section';
        $data['viewpgae'] = 'engineering-section';
        $this->load->view('welcome_message', $data);
    }

    public function public_health_section()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['publichealth'] = $this->GetData->getpublichealth();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Public Health Section';
        $data['viewpgae'] = 'public-health-section';
        $this->load->view('welcome_message', $data);
    }
    public function information_technology_section()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['informationtechnology'] = $this->GetData->getinformationtechnology();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Information Technology Section';
        $data['viewpgae'] = 'information-technology-section';
        $this->load->view('welcome_message', $data);
    }
    //Publications
    public function administrative_reports()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['administrative'] = $this->GetData->getadministrativereports();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Administrative Reports';
        $data['viewpgae'] = 'administrative-reports';
        $this->load->view('welcome_message', $data);
    }
    public function audited_financial_statement()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['administrative'] = $this->GetData->getfinancial();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Audited Financial Statement';
        $data['viewpgae'] = 'audited-financial-statement';
        $this->load->view('welcome_message', $data);
    }
    public function budget_details()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['budget'] = $this->GetData->getbudget();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Budget Details';
        $data['viewpgae'] = 'budget-details';
        $this->load->view('welcome_message', $data);
    }
    public function council_resolution()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['council'] = $this->GetData->getcouncil();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Council Resolution';
        $data['viewpgae'] = 'council-resolution';
        $this->load->view('welcome_message', $data);
    }
    public function solid_waste_management()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['waste'] = $this->GetData->getwastegenereation();
        $data['swm'] = $this->GetData->getswm();
        $data['swm_2'] = $this->GetData->getswm_2();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Solid Waste Management';
        $data['viewpgae'] = 'solid-waste-management';
        $this->load->view('welcome_message', $data);
    }

    //General info
    public function population()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['population'] = $this->GetData->getpopulation();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Population';
        $data['viewpgae'] = 'population';
        $this->load->view('welcome_message', $data);
    }
    public function voters_details()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['voters'] = $this->GetData->getvoters();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Voters Details';
        $data['viewpgae'] = 'voters-details';
        $this->load->view('welcome_message', $data);
    }
    public function sewerage()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Sewerage Details';
        $data['viewpgae'] = 'sewerage';
        $this->load->view('welcome_message', $data);
    }
    public function roads()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['roads'] = $this->GetData->getroads();
        $data['roadproject'] = $this->GetData->getroadproject();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Roads';
        $data['viewpgae'] = 'roads';
        $this->load->view('welcome_message', $data);
    }
    public function bus_stand()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['busstand'] = $this->GetData->getbusstand();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Bus Stand';
        $data['viewpgae'] = 'bus-stand';
        $this->load->view('welcome_message', $data);
    }
    public function storm_water_drains()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['swd'] = $this->GetData->getswd();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Storm Water Drains';
        $data['viewpgae'] = 'storm-water-drains';
        $this->load->view('welcome_message', $data);
    }
    public function parks()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['parks'] = $this->GetData->getparks();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Parks';
        $data['viewpgae'] = 'parks';
        $this->load->view('welcome_message', $data);
    }
    public function street_lights()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['lights'] = $this->GetData->getstreetlights();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Street Lights';
        $data['viewpgae'] = 'street-lights';
        $this->load->view('welcome_message', $data);
    }

    public function toilet()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['toilets'] = $this->GetData->gettoilet();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Toilets';
        $data['viewpgae'] = 'toilet';
        $this->load->view('welcome_message', $data);
    }
    //City Services
    public function helpline()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['helpline'] = $this->GetData->gethelpline();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Helpline';
        $data['viewpgae'] = 'helpline';
        $this->load->view('welcome_message', $data);
    }
    public function important_contacts()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['administrationofficials'] = $this->GetData->getadministrationofficials();
        $data['importantcontact'] = $this->GetData->getimportantcontact();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Important Contacts';
        $data['viewpgae'] = 'important-contacts';
        $this->load->view('welcome_message', $data);
    }
    public function hospitals()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['hospitals'] = $this->GetData->gethospitals();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Hospitals';
        $data['viewpgae'] = 'hospitals';
        $this->load->view('welcome_message', $data);
    }
    public function educational_institutions()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['education'] = $this->GetData->geteducation();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Educational Institutions';
        $data['viewpgae'] = 'educational-institutions';
        $this->load->view('welcome_message', $data);
    }
    public function knowledge_center()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['knowledgecenter'] = $this->GetData->getknowledgecenter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Knowledge Center';
        $data['viewpgae'] = 'knowledge-center';
        $this->load->view('welcome_message', $data);
    }

    //Schemes
    public function all_other_schemes()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['schemes'] = $this->GetData->getschemes();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'All Other Schemes';
        $data['viewpgae'] = 'all-other-schemes';
        $this->load->view('welcome_message', $data);
    }
    //Gallery
    public function gallery()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Gallery';
        $data['viewpgae'] = 'gallery';
        $this->load->view('welcome_message', $data);
    }
    //Footer
    public function public_disclosure()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Public Disclosure';
        $data['viewpgae'] = 'public-disclosure';
        $this->load->view('welcome_message', $data);
    }
    public function master_plan_and_land_use()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['reports'] = $this->GetData->getReports();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Master Plan and Land Use';
        $data['viewpgae'] = 'master-plan-and-land-use';
        $this->load->view('welcome_message', $data);
    }
    public function by_law()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['by'] = $this->GetData->getlaws();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'By Law';
        $data['viewpgae'] = 'by-law';
        $this->load->view('welcome_message', $data);
    }
    public function service_level_bench_mark()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['slbm'] = $this->GetData->getslbm();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Service Level Bench Mark';
        $data['viewpgae'] = 'service-level-bench-mark';
        $this->load->view('welcome_message', $data);
    }
    public function amrut_reforms()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['amrut'] = $this->GetData->getamrut();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Amrut Reforms';
        $data['viewpgae'] = 'amrut-reforms';
        $this->load->view('welcome_message', $data);
    }
    public function finance_commission_grant()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['fcg'] = $this->GetData->getfcg();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = '14th CFC Performance Grant';
        $data['viewpgae'] = 'finance-commission-grant';
        $this->load->view('welcome_message', $data);
    }
    public function bribery_is_against_the_law()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Bribery is against the law';
        $data['viewpgae'] = 'bribery-is-against-the-law';
        $this->load->view('welcome_message', $data);
    }
    public function important_gos_and_notifications()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['gos'] = $this->GetData->getgo();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Important GOS and Notifications';
        $data['viewpgae'] = 'important-gos-and-notifications';
        $this->load->view('welcome_message', $data);
    }
    public function screen_reader()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['downloads'] = $this->GetData->getdownloads();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Screen Reader';
        $data['viewpgae'] = 'screen-reader';
        $this->load->view('welcome_message', $data);
    }
    public function news_and_updates()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'News and updates';
        $data['viewpgae'] = 'news-and-updates';
        $this->load->view('welcome_message', $data);
    }

    public function instagram_updates()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['news'] = $this->GetData->getnews();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Instagram Updates';
        $data['viewpgae'] = 'instagram-updates';
        $this->load->view('welcome_message', $data);
    }
    public function downloads()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['downloads'] = $this->GetData->getdownloads();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Government Orders';
        $data['viewpgae'] = 'downloads';
        $this->load->view('welcome_message', $data);
    }
    public function market()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'Market';
        $data['viewpgae'] = 'market';
        $this->load->view('welcome_message', $data);
    }
}