<?php

class Doctor extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');
        // Load session library
        $this->load->library('session');
        // Load database
        $this->load->model('admin/Doctor_model', 'app');
    }

    public function index() {
        $doctors = $this->app->fetchAll();
        
        
        
        $dataCollection = array('headlines' => 'All Doctor', 'doctors' => $doctors);
        $title = array('page_title' => "All Doctor | MiConsulting");
        
        
        $this->load->view('admin/temp/headercrm', $title);
        $this->load->view('admin/doctor/index', $dataCollection);
        $this->load->view('admin/temp/footercrm');
    }

    public function add() {
//        if (isset($_POST['send']) && ($_POST['send'] == "1")) {
//            $hospList = $this->app->addhospitalDetail($_POST);
//        }

        //$hospList = $this->app->gethospitallist();
        
        
        
         
         $data = array();
         
         
        // $addDoctor = $this->app->add($data);
//        
//        
//        $hosId = explode('_', $arr['hospitalssel']);
//
//        
//        
//
//        $sess = $this->session->userdata();
//
//        
//        
//        $data = array(
//            'hospital_id' => $hosId[0],
//            'address' => $arr['address'],
//            'city' => $arr['city'],
//            'state' => $arr['state'],
//            'phone_no' => $arr['phone_no'],
//            'email' => $arr['email'],
//            'website' => $arr['website'],
//            'rating' => $arr['rating'],
//            'distance_from_airport' => $arr['distance_from_airport'],
//            'emergency_services' => $arr['emergency_services'],
//            'hospital_type' => $arr['hospital_type'],
//            'specialization' => $arr['specialization'],
//            'createdtime' => time(),
//            'createdby' => $sess['logged_in']['user_id']);
//        
//        
//        
        
        
         
         
         if ($this->input->server('REQUEST_METHOD') === 'POST') {
            if ($this->form_validation->run('add') === FALSE) {
                $this->add(); // reload the method/form for errors.
            } else {
                $this->_process(); // private function for inserting the data.
            }
        }
        
        
//        else {
//            $this->load->view('add_form');
//        }



         
        $title = array('page_title' => "Add Doctor | MiConsulting");
        $js = array('js' => "doctor.js");  //  Angular Js file name
        
        $doctors = array();
        
       $states =  $this->state_city_india();
        $dataCollection = array('headline' => 'Add Doctor','states'=>$states, 'doctor' => $doctors);
        
        $this->load->view('admin/temp/headercrm', $title);
        $this->load->view('admin/doctor/add', $dataCollection);
        
        $this->load->view('admin/temp/footercrm',$js );


//        $this->load->view('admin/temp/headercrm', $title);
//        $this->load->view('admin/doctor/add', $dataCollection);
//        $this->load->view('admin/temp/footercrm');
        
        
        
    }
    
    
    private function _process(){
        
        
        
    }
    
    
    
    
   private function country_code_to_country( $code ){
    $code = strtoupper($code);
    $country = '';
    if( $code == 'AF' ) $country = 'Afghanistan';
    if( $code == 'AX' ) $country = 'Aland Islands';
    if( $code == 'AL' ) $country = 'Albania';
    if( $code == 'DZ' ) $country = 'Algeria';
    if( $code == 'AS' ) $country = 'American Samoa';
    if( $code == 'AD' ) $country = 'Andorra';
    if( $code == 'AO' ) $country = 'Angola';
    if( $code == 'AI' ) $country = 'Anguilla';
    if( $code == 'AQ' ) $country = 'Antarctica';
    if( $code == 'AG' ) $country = 'Antigua and Barbuda';
    if( $code == 'AR' ) $country = 'Argentina';
    if( $code == 'AM' ) $country = 'Armenia';
    if( $code == 'AW' ) $country = 'Aruba';
    if( $code == 'AU' ) $country = 'Australia';
    if( $code == 'AT' ) $country = 'Austria';
    if( $code == 'AZ' ) $country = 'Azerbaijan';
    if( $code == 'BS' ) $country = 'Bahamas the';
    if( $code == 'BH' ) $country = 'Bahrain';
    if( $code == 'BD' ) $country = 'Bangladesh';
    if( $code == 'BB' ) $country = 'Barbados';
    if( $code == 'BY' ) $country = 'Belarus';
    if( $code == 'BE' ) $country = 'Belgium';
    if( $code == 'BZ' ) $country = 'Belize';
    if( $code == 'BJ' ) $country = 'Benin';
    if( $code == 'BM' ) $country = 'Bermuda';
    if( $code == 'BT' ) $country = 'Bhutan';
    if( $code == 'BO' ) $country = 'Bolivia';
    if( $code == 'BA' ) $country = 'Bosnia and Herzegovina';
    if( $code == 'BW' ) $country = 'Botswana';
    if( $code == 'BV' ) $country = 'Bouvet Island (Bouvetoya)';
    if( $code == 'BR' ) $country = 'Brazil';
    if( $code == 'IO' ) $country = 'British Indian Ocean Territory (Chagos Archipelago)';
    if( $code == 'VG' ) $country = 'British Virgin Islands';
    if( $code == 'BN' ) $country = 'Brunei Darussalam';
    if( $code == 'BG' ) $country = 'Bulgaria';
    if( $code == 'BF' ) $country = 'Burkina Faso';
    if( $code == 'BI' ) $country = 'Burundi';
    if( $code == 'KH' ) $country = 'Cambodia';
    if( $code == 'CM' ) $country = 'Cameroon';
    if( $code == 'CA' ) $country = 'Canada';
    if( $code == 'CV' ) $country = 'Cape Verde';
    if( $code == 'KY' ) $country = 'Cayman Islands';
    if( $code == 'CF' ) $country = 'Central African Republic';
    if( $code == 'TD' ) $country = 'Chad';
    if( $code == 'CL' ) $country = 'Chile';
    if( $code == 'CN' ) $country = 'China';
    if( $code == 'CX' ) $country = 'Christmas Island';
    if( $code == 'CC' ) $country = 'Cocos (Keeling) Islands';
    if( $code == 'CO' ) $country = 'Colombia';
    if( $code == 'KM' ) $country = 'Comoros the';
    if( $code == 'CD' ) $country = 'Congo';
    if( $code == 'CG' ) $country = 'Congo the';
    if( $code == 'CK' ) $country = 'Cook Islands';
    if( $code == 'CR' ) $country = 'Costa Rica';
    if( $code == 'CI' ) $country = 'Cote d\'Ivoire';
    if( $code == 'HR' ) $country = 'Croatia';
    if( $code == 'CU' ) $country = 'Cuba';
    if( $code == 'CY' ) $country = 'Cyprus';
    if( $code == 'CZ' ) $country = 'Czech Republic';
    if( $code == 'DK' ) $country = 'Denmark';
    if( $code == 'DJ' ) $country = 'Djibouti';
    if( $code == 'DM' ) $country = 'Dominica';
    if( $code == 'DO' ) $country = 'Dominican Republic';
    if( $code == 'EC' ) $country = 'Ecuador';
    if( $code == 'EG' ) $country = 'Egypt';
    if( $code == 'SV' ) $country = 'El Salvador';
    if( $code == 'GQ' ) $country = 'Equatorial Guinea';
    if( $code == 'ER' ) $country = 'Eritrea';
    if( $code == 'EE' ) $country = 'Estonia';
    if( $code == 'ET' ) $country = 'Ethiopia';
    if( $code == 'FO' ) $country = 'Faroe Islands';
    if( $code == 'FK' ) $country = 'Falkland Islands (Malvinas)';
    if( $code == 'FJ' ) $country = 'Fiji the Fiji Islands';
    if( $code == 'FI' ) $country = 'Finland';
    if( $code == 'FR' ) $country = 'France, French Republic';
    if( $code == 'GF' ) $country = 'French Guiana';
    if( $code == 'PF' ) $country = 'French Polynesia';
    if( $code == 'TF' ) $country = 'French Southern Territories';
    if( $code == 'GA' ) $country = 'Gabon';
    if( $code == 'GM' ) $country = 'Gambia the';
    if( $code == 'GE' ) $country = 'Georgia';
    if( $code == 'DE' ) $country = 'Germany';
    if( $code == 'GH' ) $country = 'Ghana';
    if( $code == 'GI' ) $country = 'Gibraltar';
    if( $code == 'GR' ) $country = 'Greece';
    if( $code == 'GL' ) $country = 'Greenland';
    if( $code == 'GD' ) $country = 'Grenada';
    if( $code == 'GP' ) $country = 'Guadeloupe';
    if( $code == 'GU' ) $country = 'Guam';
    if( $code == 'GT' ) $country = 'Guatemala';
    if( $code == 'GG' ) $country = 'Guernsey';
    if( $code == 'GN' ) $country = 'Guinea';
    if( $code == 'GW' ) $country = 'Guinea-Bissau';
    if( $code == 'GY' ) $country = 'Guyana';
    if( $code == 'HT' ) $country = 'Haiti';
    if( $code == 'HM' ) $country = 'Heard Island and McDonald Islands';
    if( $code == 'VA' ) $country = 'Holy See (Vatican City State)';
    if( $code == 'HN' ) $country = 'Honduras';
    if( $code == 'HK' ) $country = 'Hong Kong';
    if( $code == 'HU' ) $country = 'Hungary';
    if( $code == 'IS' ) $country = 'Iceland';
    if( $code == 'IN' ) $country = 'India';
    if( $code == 'ID' ) $country = 'Indonesia';
    if( $code == 'IR' ) $country = 'Iran';
    if( $code == 'IQ' ) $country = 'Iraq';
    if( $code == 'IE' ) $country = 'Ireland';
    if( $code == 'IM' ) $country = 'Isle of Man';
    if( $code == 'IL' ) $country = 'Israel';
    if( $code == 'IT' ) $country = 'Italy';
    if( $code == 'JM' ) $country = 'Jamaica';
    if( $code == 'JP' ) $country = 'Japan';
    if( $code == 'JE' ) $country = 'Jersey';
    if( $code == 'JO' ) $country = 'Jordan';
    if( $code == 'KZ' ) $country = 'Kazakhstan';
    if( $code == 'KE' ) $country = 'Kenya';
    if( $code == 'KI' ) $country = 'Kiribati';
    if( $code == 'KP' ) $country = 'Korea';
    if( $code == 'KR' ) $country = 'Korea';
    if( $code == 'KW' ) $country = 'Kuwait';
    if( $code == 'KG' ) $country = 'Kyrgyz Republic';
    if( $code == 'LA' ) $country = 'Lao';
    if( $code == 'LV' ) $country = 'Latvia';
    if( $code == 'LB' ) $country = 'Lebanon';
    if( $code == 'LS' ) $country = 'Lesotho';
    if( $code == 'LR' ) $country = 'Liberia';
    if( $code == 'LY' ) $country = 'Libyan Arab Jamahiriya';
    if( $code == 'LI' ) $country = 'Liechtenstein';
    if( $code == 'LT' ) $country = 'Lithuania';
    if( $code == 'LU' ) $country = 'Luxembourg';
    if( $code == 'MO' ) $country = 'Macao';
    if( $code == 'MK' ) $country = 'Macedonia';
    if( $code == 'MG' ) $country = 'Madagascar';
    if( $code == 'MW' ) $country = 'Malawi';
    if( $code == 'MY' ) $country = 'Malaysia';
    if( $code == 'MV' ) $country = 'Maldives';
    if( $code == 'ML' ) $country = 'Mali';
    if( $code == 'MT' ) $country = 'Malta';
    if( $code == 'MH' ) $country = 'Marshall Islands';
    if( $code == 'MQ' ) $country = 'Martinique';
    if( $code == 'MR' ) $country = 'Mauritania';
    if( $code == 'MU' ) $country = 'Mauritius';
    if( $code == 'YT' ) $country = 'Mayotte';
    if( $code == 'MX' ) $country = 'Mexico';
    if( $code == 'FM' ) $country = 'Micronesia';
    if( $code == 'MD' ) $country = 'Moldova';
    if( $code == 'MC' ) $country = 'Monaco';
    if( $code == 'MN' ) $country = 'Mongolia';
    if( $code == 'ME' ) $country = 'Montenegro';
    if( $code == 'MS' ) $country = 'Montserrat';
    if( $code == 'MA' ) $country = 'Morocco';
    if( $code == 'MZ' ) $country = 'Mozambique';
    if( $code == 'MM' ) $country = 'Myanmar';
    if( $code == 'NA' ) $country = 'Namibia';
    if( $code == 'NR' ) $country = 'Nauru';
    if( $code == 'NP' ) $country = 'Nepal';
    if( $code == 'AN' ) $country = 'Netherlands Antilles';
    if( $code == 'NL' ) $country = 'Netherlands the';
    if( $code == 'NC' ) $country = 'New Caledonia';
    if( $code == 'NZ' ) $country = 'New Zealand';
    if( $code == 'NI' ) $country = 'Nicaragua';
    if( $code == 'NE' ) $country = 'Niger';
    if( $code == 'NG' ) $country = 'Nigeria';
    if( $code == 'NU' ) $country = 'Niue';
    if( $code == 'NF' ) $country = 'Norfolk Island';
    if( $code == 'MP' ) $country = 'Northern Mariana Islands';
    if( $code == 'NO' ) $country = 'Norway';
    if( $code == 'OM' ) $country = 'Oman';
    if( $code == 'PK' ) $country = 'Pakistan';
    if( $code == 'PW' ) $country = 'Palau';
    if( $code == 'PS' ) $country = 'Palestinian Territory';
    if( $code == 'PA' ) $country = 'Panama';
    if( $code == 'PG' ) $country = 'Papua New Guinea';
    if( $code == 'PY' ) $country = 'Paraguay';
    if( $code == 'PE' ) $country = 'Peru';
    if( $code == 'PH' ) $country = 'Philippines';
    if( $code == 'PN' ) $country = 'Pitcairn Islands';
    if( $code == 'PL' ) $country = 'Poland';
    if( $code == 'PT' ) $country = 'Portugal, Portuguese Republic';
    if( $code == 'PR' ) $country = 'Puerto Rico';
    if( $code == 'QA' ) $country = 'Qatar';
    if( $code == 'RE' ) $country = 'Reunion';
    if( $code == 'RO' ) $country = 'Romania';
    if( $code == 'RU' ) $country = 'Russian Federation';
    if( $code == 'RW' ) $country = 'Rwanda';
    if( $code == 'BL' ) $country = 'Saint Barthelemy';
    if( $code == 'SH' ) $country = 'Saint Helena';
    if( $code == 'KN' ) $country = 'Saint Kitts and Nevis';
    if( $code == 'LC' ) $country = 'Saint Lucia';
    if( $code == 'MF' ) $country = 'Saint Martin';
    if( $code == 'PM' ) $country = 'Saint Pierre and Miquelon';
    if( $code == 'VC' ) $country = 'Saint Vincent and the Grenadines';
    if( $code == 'WS' ) $country = 'Samoa';
    if( $code == 'SM' ) $country = 'San Marino';
    if( $code == 'ST' ) $country = 'Sao Tome and Principe';
    if( $code == 'SA' ) $country = 'Saudi Arabia';
    if( $code == 'SN' ) $country = 'Senegal';
    if( $code == 'RS' ) $country = 'Serbia';
    if( $code == 'SC' ) $country = 'Seychelles';
    if( $code == 'SL' ) $country = 'Sierra Leone';
    if( $code == 'SG' ) $country = 'Singapore';
    if( $code == 'SK' ) $country = 'Slovakia (Slovak Republic)';
    if( $code == 'SI' ) $country = 'Slovenia';
    if( $code == 'SB' ) $country = 'Solomon Islands';
    if( $code == 'SO' ) $country = 'Somalia, Somali Republic';
    if( $code == 'ZA' ) $country = 'South Africa';
    if( $code == 'GS' ) $country = 'South Georgia and the South Sandwich Islands';
    if( $code == 'ES' ) $country = 'Spain';
    if( $code == 'LK' ) $country = 'Sri Lanka';
    if( $code == 'SD' ) $country = 'Sudan';
    if( $code == 'SR' ) $country = 'Suriname';
    if( $code == 'SJ' ) $country = 'Svalbard & Jan Mayen Islands';
    if( $code == 'SZ' ) $country = 'Swaziland';
    if( $code == 'SE' ) $country = 'Sweden';
    if( $code == 'CH' ) $country = 'Switzerland, Swiss Confederation';
    if( $code == 'SY' ) $country = 'Syrian Arab Republic';
    if( $code == 'TW' ) $country = 'Taiwan';
    if( $code == 'TJ' ) $country = 'Tajikistan';
    if( $code == 'TZ' ) $country = 'Tanzania';
    if( $code == 'TH' ) $country = 'Thailand';
    if( $code == 'TL' ) $country = 'Timor-Leste';
    if( $code == 'TG' ) $country = 'Togo';
    if( $code == 'TK' ) $country = 'Tokelau';
    if( $code == 'TO' ) $country = 'Tonga';
    if( $code == 'TT' ) $country = 'Trinidad and Tobago';
    if( $code == 'TN' ) $country = 'Tunisia';
    if( $code == 'TR' ) $country = 'Turkey';
    if( $code == 'TM' ) $country = 'Turkmenistan';
    if( $code == 'TC' ) $country = 'Turks and Caicos Islands';
    if( $code == 'TV' ) $country = 'Tuvalu';
    if( $code == 'UG' ) $country = 'Uganda';
    if( $code == 'UA' ) $country = 'Ukraine';
    if( $code == 'AE' ) $country = 'United Arab Emirates';
    if( $code == 'GB' ) $country = 'United Kingdom';
    if( $code == 'US' ) $country = 'United States of America';
    if( $code == 'UM' ) $country = 'United States Minor Outlying Islands';
    if( $code == 'VI' ) $country = 'United States Virgin Islands';
    if( $code == 'UY' ) $country = 'Uruguay, Eastern Republic of';
    if( $code == 'UZ' ) $country = 'Uzbekistan';
    if( $code == 'VU' ) $country = 'Vanuatu';
    if( $code == 'VE' ) $country = 'Venezuela';
    if( $code == 'VN' ) $country = 'Vietnam';
    if( $code == 'WF' ) $country = 'Wallis and Futuna';
    if( $code == 'EH' ) $country = 'Western Sahara';
    if( $code == 'YE' ) $country = 'Yemen';
    if( $code == 'ZM' ) $country = 'Zambia';
    if( $code == 'ZW' ) $country = 'Zimbabwe';
    if( $country == '') $country = $code;
    return $country;
} 



public function state_city_india(){
    $list = array(
	'Andaman and Nicobar' => array(
		'North and Middle Andaman', 'South Andaman', 'Nicobar'
	),
	'Andhra Pradesh' => array(
		'Adilabad', 'Anantapur', 'Chittoor', 'East Godavari', 'Guntur', 'Hyderabad', 'Kadapa', 'Karimnagar', 'Khammam', 'Krishna', 'Kurnool', 'Mahbubnagar', 'Medak', 'Nalgonda', 'Nellore', 'Nizamabad', 'Prakasam', 'Rangareddi', 'Srikakulam', 'Vishakhapatnam', 'Vizianagaram', 'Warangal', 'West Godavari'
	),
	'Arunachal Pradesh' => array(
		'Anjaw', 'Changlang', 'East Kameng', 'Lohit', 'Lower Subansiri', 'Papum Pare', 'Tirap', 'Dibang Valley', 'Upper Subansiri', 'West Kameng'
	),
	'Assam' => array(
		'Barpeta', 'Bongaigaon', 'Cachar', 'Darrang', 'Dhemaji', 'Dhubri', 'Dibrugarh', 'Goalpara', 'Golaghat', 'Hailakandi', 'Jorhat', 'Karbi Anglong', 'Karimganj', 'Kokrajhar', 'Lakhimpur', 'Marigaon', 'Nagaon', 'Nalbari', 'North Cachar Hills', 'Sibsagar', 'Sonitpur', 'Tinsukia'
	),
	'Bihar' => array(
		'Araria', 'Aurangabad', 'Banka', 'Begusarai', 'Bhagalpur', 'Bhojpur', 'Buxar', 'Darbhanga', 'Purba Champaran', 'Gaya', 'Gopalganj', 'Jamui', 'Jehanabad', 'Khagaria', 'Kishanganj', 'Kaimur', 'Katihar', 'Lakhisarai', 'Madhubani', 'Munger', 'Madhepura', 'Muzaffarpur', 'Nalanda', 'Nawada', 'Patna', 'Purnia', 'Rohtas', 'Saharsa', 'Samastipur', 'Sheohar', 'Sheikhpura', 'Saran', 'Sitamarhi', 'Supaul', 'Siwan', 'Vaishali', 'Pashchim Champaran'
	),
	'Chandigarh' => array(),
	'Chhattisgarh' => array(
		'Bastar', 'Bilaspur', 'Dantewada', 'Dhamtari', 'Durg', 'Jashpur', 'Janjgir-Champa', 'Korba', 'Koriya', 'Kanker', 'Kawardha', 'Mahasamund', 'Raigarh', 'Rajnandgaon', 'Raipur', 'Surguja'
	),
	'Dadra and Nagar Haveli' => array(),
	'Daman and Diu' => array(
		'Diu', 'Daman'
	),
	'Delhi' => array(
		'Central Delhi', 'East Delhi', 'New Delhi', 'North Delhi', 'North East Delhi', 'North West Delhi', 'South Delhi', 'South West Delhi', 'West Delhi'
	),
	'Goa' => array(
		'North Goa', 'South Goa'
	),
	'Gujarat' => array(
		'Ahmedabad', 'Amreli District', 'Anand', 'Banaskantha', 'Bharuch', 'Bhavnagar', 'Dahod', 'The Dangs', 'Gandhinagar', 'Jamnagar', 'Junagadh', 'Kutch', 'Kheda', 'Mehsana', 'Narmada', 'Navsari', 'Patan', 'Panchmahal', 'Porbandar', 'Rajkot', 'Sabarkantha', 'Surendranagar', 'Surat', 'Vadodara', 'Valsad'
	),
	'Haryana' => array(
		'Ambala', 'Bhiwani', 'Faridabad', 'Fatehabad', 'Gurgaon', 'Hissar', 'Jhajjar', 'Jind', 'Karnal', 'Kaithal', 'Kurukshetra', 'Mahendragarh', 'Mewat', 'Panchkula', 'Panipat', 'Rewari', 'Rohtak', 'Sirsa', 'Sonepat', 'Yamuna Nagar', 'Palwal'
	),
	'Himachal Pradesh' => array(
		'Bilaspur', 'Chamba', 'Hamirpur', 'Kangra', 'Kinnaur', 'Kulu', 'Lahaul and Spiti', 'Mandi', 'Shimla', 'Sirmaur', 'Solan', 'Una'
	),
	'Jammu and Kashmir' => array(
		'Anantnag', 'Badgam', 'Bandipore', 'Baramula', 'Doda', 'Jammu', 'Kargil', 'Kathua', 'Kupwara', 'Leh', 'Poonch', 'Pulwama', 'Rajauri', 'Srinagar', 'Samba', 'Udhampur'
	),
	'Jharkhand' => array(
		'Bokaro', 'Chatra', 'Deoghar', 'Dhanbad', 'Dumka', 'Purba Singhbhum', 'Garhwa', 'Giridih', 'Godda', 'Gumla', 'Hazaribagh', 'Koderma', 'Lohardaga', 'Pakur', 'Palamu', 'Ranchi', 'Sahibganj', 'Seraikela and Kharsawan', 'Pashchim Singhbhum', 'Ramgarh'
	),
	'Karnataka' => array(
		'Bidar', 'Belgaum', 'Bijapur', 'Bagalkot', 'Bellary', 'Bangalore Rural District', 'Bangalore Urban District', 'Chamarajnagar', 'Chikmagalur', 'Chitradurga', 'Davanagere', 'Dharwad', 'Dakshina Kannada', 'Gadag', 'Gulbarga', 'Hassan', 'Haveri District', 'Kodagu', 'Kolar', 'Koppal', 'Mandya', 'Mysore', 'Raichur', 'Shimoga', 'Tumkur', 'Udupi', 'Uttara Kannada', 'Ramanagara', 'Chikballapur', 'Yadagiri'
	),
	'Kerala' => array(
		'Alappuzha', 'Ernakulam', 'Idukki', 'Kollam', 'Kannur', 'Kasaragod', 'Kottayam', 'Kozhikode', 'Malappuram', 'Palakkad', 'Pathanamthitta', 'Thrissur', 'Thiruvananthapuram', 'Wayanad'
	),
	'Lakshadweep' => array(),
	'Madhya Pradesh' => array(
		'Alirajpur', 'Anuppur', 'Ashok Nagar', 'Balaghat', 'Barwani', 'Betul', 'Bhind', 'Bhopal', 'Burhanpur', 'Chhatarpur', 'Chhindwara', 'Damoh', 'Datia', 'Dewas', 'Dhar', 'Dindori', 'Guna', 'Gwalior', 'Harda', 'Hoshangabad', 'Indore', 'Jabalpur', 'Jhabua', 'Katni', 'Khandwa', 'Khargone', 'Mandla', 'Mandsaur', 'Morena', 'Narsinghpur', 'Neemuch', 'Panna', 'Rewa', 'Rajgarh', 'Ratlam', 'Raisen', 'Sagar', 'Satna', 'Sehore', 'Seoni', 'Shahdol', 'Shajapur', 'Sheopur', 'Shivpuri', 'Sidhi', 'Singrauli', 'Tikamgarh', 'Ujjain', 'Umaria', 'Vidisha'
	),
	'Maharashtra' => array(
		'Ahmednagar', 'Akola', 'Amrawati', 'Aurangabad', 'Bhandara', 'Beed', 'Buldhana', 'Chandrapur', 'Dhule', 'Gadchiroli', 'Gondiya', 'Hingoli', 'Jalgaon', 'Jalna', 'Kolhapur', 'Latur', 'Mumbai City', 'Mumbai suburban', 'Nandurbar', 'Nanded', 'Nagpur', 'Nashik', 'Osmanabad', 'Parbhani', 'Pune', 'Raigad', 'Ratnagiri', 'Sindhudurg', 'Sangli', 'Solapur', 'Satara', 'Thane', 'Wardha', 'Washim', 'Yavatmal'
	),
	'Manipur' => array(
		'Bishnupur', 'Churachandpur', 'Chandel', 'Imphal East', 'Senapati', 'Tamenglong', 'Thoubal', 'Ukhrul', 'Imphal West'
	),
	'Meghalaya' => array(
		'East Garo Hills', 'East Khasi Hills', 'Jaintia Hills', 'Ri-Bhoi', 'South Garo Hills', 'West Garo Hills', 'West Khasi Hills'
	),
	'Mizoram' => array(
		'Aizawl', 'Champhai', 'Kolasib', 'Lawngtlai', 'Lunglei', 'Mamit', 'Saiha', 'Serchhip'
	),
	'Nagaland' => array(
		'Dimapur', 'Kohima', 'Mokokchung', 'Mon', 'Phek', 'Tuensang', 'Wokha', 'Zunheboto'
	),
	'Orissa' => array(
		'Angul', 'Boudh', 'Bhadrak', 'Bolangir', 'Bargarh', 'Baleswar', 'Cuttack', 'Debagarh', 'Dhenkanal', 'Ganjam', 'Gajapati', 'Jharsuguda', 'Jajapur', 'Jagatsinghpur', 'Khordha', 'Kendujhar', 'Kalahandi', 'Kandhamal', 'Koraput', 'Kendrapara', 'Malkangiri', 'Mayurbhanj', 'Nabarangpur', 'Nuapada', 'Nayagarh', 'Puri', 'Rayagada', 'Sambalpur', 'Subarnapur', 'Sundargarh'
	),
	'Puducherry' => array(
		'Karaikal', 'Mahe', 'Puducherry', 'Yanam'
	),
	'Punjab' => array(
		'Amritsar', 'Bathinda', 'Firozpur', 'Faridkot', 'Fatehgarh Sahib', 'Gurdaspur', 'Hoshiarpur', 'Jalandhar', 'Kapurthala', 'Ludhiana', 'Mansa', 'Moga', 'Mukatsar', 'Nawan Shehar', 'Patiala', 'Rupnagar', 'Sangrur'
	),
	'Rajasthan' => array(
		'Ajmer', 'Alwar', 'Bikaner', 'Barmer', 'Banswara', 'Bharatpur', 'Baran', 'Bundi', 'Bhilwara', 'Churu', 'Chittorgarh', 'Dausa', 'Dholpur', 'Dungapur', 'Ganganagar', 'Hanumangarh', 'Juhnjhunun', 'Jalore', 'Jodhpur', 'Jaipur', 'Jaisalmer', 'Jhalawar', 'Karauli', 'Kota', 'Nagaur', 'Pali', 'Pratapgarh', 'Rajsamand', 'Sikar', 'Sawai Madhopur', 'Sirohi', 'Tonk', 'Udaipur'
	),
	'Sikkim' => array(
		'East Sikkim', 'North Sikkim', 'South Sikkim', 'West Sikkim'
	),
	'Tamil Nadu' => array(
		'Ariyalur', 'Chennai', 'Coimbatore', 'Cuddalore', 'Dharmapuri', 'Dindigul', 'Erode', 'Kanchipuram', 'Kanyakumari', 'Karur', 'Madurai', 'Nagapattinam', 'The Nilgiris', 'Namakkal', 'Perambalur', 'Pudukkottai', 'Ramanathapuram', 'Salem', 'Sivagangai', 'Tiruppur', 'Tiruchirappalli', 'Theni', 'Tirunelveli', 'Thanjavur', 'Thoothukudi', 'Thiruvallur', 'Thiruvarur', 'Tiruvannamalai', 'Vellore', 'Villupuram'
	),
	'Tripura' => array(
		'Dhalai', 'North Tripura', 'South Tripura', 'West Tripura'
	),
	'Uttarakhand' => array(
		'Almora', 'Bageshwar', 'Chamoli', 'Champawat', 'Dehradun', 'Haridwar', 'Nainital', 'Pauri Garhwal', 'Pithoragharh', 'Rudraprayag', 'Tehri Garhwal', 'Udham Singh Nagar', 'Uttarkashi'
	),
	'Uttar Pradesh' => array(
		'Agra', 'Allahabad', 'Aligarh', 'Ambedkar Nagar', 'Auraiya', 'Azamgarh', 'Barabanki', 'Badaun', 'Bagpat', 'Bahraich', 'Bijnor', 'Ballia', 'Banda', 'Balrampur', 'Bareilly', 'Basti', 'Bulandshahr', 'Chandauli', 'Chitrakoot', 'Deoria', 'Etah', 'Kanshiram Nagar', 'Etawah', 'Firozabad', 'Farrukhabad', 'Fatehpur', 'Faizabad', 'Gautam Buddha Nagar', 'Gonda', 'Ghazipur', 'Gorkakhpur', 'Ghaziabad', 'Hamirpur', 'Hardoi', 'Mahamaya Nagar', 'Jhansi', 'Jalaun', 'Jyotiba Phule Nagar', 'Jaunpur District', 'Kanpur Dehat', 'Kannauj', 'Kanpur Nagar', 'Kaushambi', 'Kushinagar', 'Lalitpur', 'Lakhimpur Kheri', 'Lucknow', 'Mau', 'Meerut', 'Maharajganj', 'Mahoba', 'Mirzapur', 'Moradabad', 'Mainpuri', 'Mathura', 'Muzaffarnagar', 'Pilibhit', 'Pratapgarh', 'Rampur', 'Rae Bareli', 'Saharanpur', 'Sitapur', 'Shahjahanpur', 'Sant Kabir Nagar', 'Siddharthnagar', 'Sonbhadra', 'Sant Ravidas Nagar', 'Sultanpur', 'Shravasti', 'Unnao', 'Varanasi'
	),
	'West Bengal' => array(
		'Birbhum', 'Bankura', 'Bardhaman', 'Darjeeling', 'Dakshin Dinajpur', 'Hooghly', 'Howrah', 'Jalpaiguri', 'Cooch Behar', 'Kolkata', 'Malda', 'Midnapore', 'Murshidabad', 'Nadia', 'North 24 Parganas', 'South 24 Parganas', 'Purulia', 'Uttar Dinajpur'
	)
);
//echo "<pre>here";print_r($list);

return $list;
exit;
}

    
}
