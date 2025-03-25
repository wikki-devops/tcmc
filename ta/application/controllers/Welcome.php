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


    //About us
    public function about_city()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'நகரத்தைப் பற்றி';
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
        $data['pagetitle'] = 'நகரத்தை அடைவது எப்படி';
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
        $data['pagetitle'] = 'காண வேண்டிய இடங்கள்';
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
        $data['pagetitle'] = 'தொடர்பு கொள்ள';
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
        $data['pagetitle'] = 'மின் ஆளுமை';
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
        $data['pagetitle'] = 'குடியுரிமை சாசனம்';
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
        $data['pagetitle'] = 'அலுவலர்கள் விவரம்';
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
        $data['pagetitle'] = "நிர்வாக அதிகாரிகள்";
        $data['viewpgae'] = 'whos-who';
        $this->load->view('welcome_message', $data);
    }
    //Department
    public function general_section()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['general'] = $this->GetData->getgeneral();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'பொது பிரிவு';
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
        $data['pagetitle'] = 'வருவாய் பிரிவு';
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
        $data['pagetitle'] = 'நகரமைப்பு பிரிவு';
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
        $data['pagetitle'] = 'பொறியியல் பிரிவு';
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
        $data['pagetitle'] = 'பொது சுகாதாரப் பிரிவு';
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
        $data['pagetitle'] = 'தகவல் தொழில்நுட்பப் பிரிவு';
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
        $data['pagetitle'] = 'நிர்வாக அறிக்கைகள்';
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
        $data['pagetitle'] = 'நிதி தணிக்கை அறிக்கை';
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
        $data['pagetitle'] = 'வரவு செலவு விவரங்கள்';
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
        $data['pagetitle'] = 'மன்றத் தீர்மானங்கள்';
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
        $data['pagetitle'] = 'திடக்கழிவு மேலாண்மை';
        $data['viewpgae'] = 'solid-waste-management';
        $this->load->view('welcome_message', $data);
    }
    //general info
    public function population()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['population'] = $this->GetData->getpopulation();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'மக்கள் தொகை';
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
        $data['pagetitle'] = 'வாக்காளர் விவரங்கள்';
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
        $data['pagetitle'] = 'கழிவுநீர் விவரங்கள்';
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
        $data['pagetitle'] = 'சாலைகள்';
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
        $data['pagetitle'] = 'பேருந்து நிலையம்';
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
        $data['pagetitle'] = 'மழைநீர் வடிகால்';
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
        $data['pagetitle'] = 'பூங்காக்கள்';
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
        $data['pagetitle'] = 'தெரு விளக்குகள்';
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
        $data['pagetitle'] = 'கழிப்பறைகள்';
        $data['viewpgae'] = 'toilet';
        $this->load->view('welcome_message', $data);
    }

    //city services
    public function helpline()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['helpline'] = $this->GetData->gethelpline();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'உதவி மையம்';
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
        $data['pagetitle'] = 'முக்கிய தொடர்புகள்';
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
        $data['pagetitle'] = 'மருத்துவமனைகள்';
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
        $data['pagetitle'] = 'கல்வி நிறுவனங்கள்';
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
        $data['pagetitle'] = 'அறிவு மையம்';
        $data['viewpgae'] = 'knowledge-center';
        $this->load->view('welcome_message', $data);
    }

    //schemes
    public function all_other_schemes()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['schemes'] = $this->GetData->getschemes();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'திட்டங்கள்';
        $data['viewpgae'] = 'all-other-schemes';
        $this->load->view('welcome_message', $data);
    }
    //gallery
    public function gallery()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'புகைப்பட தொகுப்பு';
        $data['viewpgae'] = 'gallery';
        $this->load->view('welcome_message', $data);
    }
    //footer
    public function public_disclosure()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'பொது வெளிப்படுத்தல்';
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
        $data['pagetitle'] = 'முதன்மைத் திட்டம் மற்றும் நில பயன்பாடு';
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
        $data['pagetitle'] = 'சட்டப்படி';
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
        $data['pagetitle'] = 'சேவை நிலை குறிக்கோள்';
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
        $data['pagetitle'] = 'அம்ருத் சீர்திருத்தங்கள்';
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
        $data['pagetitle'] = '14 வது நிதி ஆணைய மானியம்(FFC)';
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
        $data['pagetitle'] = 'லஞ்சம் சட்டத்திற்கு எதிரானது';
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
        $data['pagetitle'] = 'முக்கியமான G.Os மற்றும் அறிவிப்புகள்';
        $data['viewpgae'] = 'important-gos-and-notifications';
        $this->load->view('welcome_message', $data);
    }
    //Screen Reader
    public function screen_reader()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['downloads'] = $this->GetData->getdownloads();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'திரை வாசிப்பான்';
        $data['viewpgae'] = 'screen-reader';
        $this->load->view('welcome_message', $data);
    }
    //not in use pages
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
    public function environmental_assessment_report()
    {
        $data['menus'] = $this->GetData->getmenu_with_submenus();
        $data['marquees'] = $this->GetData->getmarquee();
        $data['footer'] = $this->GetData->getfooter();
        $data['tnsudp'] = $this->GetData->gettnsudp();
        $visitorCount = $this->Visitor_model->increment_count();
        $data['visitor_count'] = $visitorCount;
        $data['pagetitle'] = 'சுற்றுச்சூழல் ஆய்வறிக்கை';
        $data['viewpgae'] = 'environmental-assessment-report';
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
}
