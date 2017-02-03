<?php
class Dashboard extends CI_Controller
{
    
  public function __construct(){
    parent::__construct();
    error_reporting(0);
    $this->active['current_page'] = $this->uri->segment(1);
    $this->load->model('dashboardModel', 'model');
  }

  public function index() 
  { 

    $session = $this->session->userdata('logged_in');

        if($session['user_id'] == ""){
            $this->load->view('template/header' , $this->active);   
            $this->load->view('login/index');   
            $this->load->view('template/footer');    
        }
        else
        {        
            $result = $this->model->displayAll();
            $displayAll = array('displayAll' => $result->result() );
            $this->load->view('template/header' , $this->active);   
            $this->load->view('dashboard/index', $displayAll);   
            $this->load->view('template/footer');   
        }
  }

  public function visapdf()
  {
        $id = $this->uri->segment(3);
        $acquire_nationality='';
        $visa_type_display='';
           
        $out = $this->model->getCustomerData($id);
      
         $img='<img src="'.base_url().'assets/img/ashoka_stambh.jpg" style="width:60px; height:80px;" />';
         $imgprofile='<img src="'.base_url().'assets/img/photos/'.$out->picture.'" style="width:80px; height:100px;" />';

        if ($out->acquire_nationality == 'Naturalization'):
            $acquire_nationality = '<tr>
            <td width="30%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Any Other Previous/Past Nationality </td>
            <td colspan="3" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->previous_nationality . ' </td>
            </tr>';
        endif;

        if ($out->visa_type == 'BUSINESS VISA'):
            $visa_type_display = '<tr>
            <td width="25%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Company Name </td>
            <td height="20px" valign="middle" colspan="3"   style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; ' . $out->bv_company_name . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Address </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; ' . $out->bv_address . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-left:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; Phone </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-right:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; ' . $out->bv_phone . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-left:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; Email </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-right:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; ' . $out->bv_email . ' </td>
            </tr>';
        endif;

        if ($out->visa_type == 'MEDICAL VISA'):
            $visa_type_display = '<tr>
            <td colspan="4" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp;<b>Hospital Details in ' . $out->applying_country . '</b> </td></tr>

            <tr>
            <td width="25%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Hospital Name </td>
            <td height="20px" valign="middle" colspan="3"   style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; ' . $out->mv_hr_name . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Address </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; ' . $out->mv_hr_address . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-left:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; Doctor Name /Phone </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-right:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; ' . $out->mv_hr_doctor_name . ' &nbsp; ' . $out->mv_hr_phone . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-left:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; Email </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-right:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; ' . $out->mv_hr_email . ' </td>
            </tr>
            <tr>
            <td colspan="4" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border:1px solid #CCCCCC; font-weight:600; border-top:1px;">&nbsp;<b>Hospital Details in INDIA</b> </td></tr>

            <tr>
            <td width="25%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Hospital Name </td>
            <td height="20px" valign="middle" colspan="3"   style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; ' . $out->mv_hi_name . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Address </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; ' . $out->mv_hi_address . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-left:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; Doctor Name /Phone </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-right:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; ' . $out->mv_hi_doctor_name . ' &nbsp; ' . $out->mv_hi_phone . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-left:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; Email </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-right:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; ' . $out->mv_hi_email . ' </td>
            </tr>
            <tr>
            <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-left:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; Illness </td>
            <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-right:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; ' . $out->mv_hi_illness . ' </td>
            </tr>';
        endif;
        if ($out->visa_type == 'TOURIST VISA'):
            $visa_type_display = '<tr>
            <td width="25%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Places Visited </td>
            <td height="20px" valign="middle" colspan="3"   style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; ' . $out->tv_places_visited . ' </td>
            </tr>';
        endif;




        $pdf_content = '<!DOCTYPE >
          <html >
          <style type="text/css">       
          #pdf_header, #pdf_container{ border: 1px solid #CCCCCC; padding:10px; }    
          #pdf_header{ margin:10px auto 0px; border-bottom:none; }    
          body {font-size:10pt;}
          @media all {
          .page-break { display: none; }
          }

          @media print {
          .page-break { display: block; page-break-before: always; }
          }
          table {border-collapse:collapse; }
          .rpt_title{ background:#99CCFF; }               
          </style>
          <body style="font-family:Arial, Helvetica, sans-serif;">


          <table width="550" align="center" cellpadding="0" cellspacing="0"  >
          <tr>
          <td valign="top"><table width="100%"  cellpadding="0" cellspacing="0" >
          <tr>
          <td colspan="2" height="5px"></td>
          </tr>
          <tr>
          <td valign="top"  width="71%"    style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#cccccc; border-right:0px solid #cccccc; padding:5px;; "><table width="100%"  cellpadding="0" cellspacing="0">
          <tr>
          <td><table width="100%"  cellpadding="0" cellspacing="0">
          <tr>
          <td width="26%">'.$img.'</td>
          <td width="74%" align="center" valign="middle" style="font-size:15px; font-family:Arial, Helvetica, sans-serif; color:#000000; font-weight:600;"> Embassy Of India ' . $out->applying_country . ' <br/>
          <span style="font-size:12px;">' . $out->applying_country . '</span><br/><br/><br/>
          <span style="font-size:10px;"><small>http://www.Afghanistanembassy.org</small></span></td>
          </tr>
          </table></td>
          </tr>
          <tr>
          <td height="5px">&nbsp;</td>
          </tr>
          <tr>
          <td style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#000000; font-weight:500;" ><table width="100%"  cellpadding="0" cellspacing="0">
          <tr>
          <td width="3%" align="left"></td>
          <td width="26%" align="center">'.$imgprofile.'</td>
          <td width="55%" align="center" valign="middle" style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:900;">Visa Application Form</td>
          <td width="16%"></td>
          </tr>
          <tr>
          <td width="3%" align="left" style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#000000;">&nbsp;</td>
          <td width="26%" align="center" style="font-size:10px; font-family:Arial, Helvetica, sans-serif;"><span style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#000000;"> ' . $out->app_id . ' </span></td>
          <td width="55%" align="left" style="font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#000000; font-weight:500;">&nbsp;</td>
          <td style="font-size:12px; font-family:Arial, Helvetica, sans-serif; color:#000000; font-weight:500;">Signature</td>
          </tr>
          </table></td>
          </tr>
          </table></td>
          <td align="top" valign="top" width="29%"   style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #cccccc; padding:5px;"><table width="100%"  cellpadding="0" cellspacing="0">
          <tr>
          <td align="center" valign="middle" height="172"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; padding:5px;"> Paste Your unsigned <br/>
          recent color photograph<br/>
          Size : 2 X 2 </td>
          </tr>
          <tr>
          <td height="41" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px;">&nbsp;</td>
          </tr>
          </table></td>
          </tr>
          <tr>
          <td colspan="2" height="5"></td>
          </tr>
          </table></td>
          </tr>
          <tr>
          <td><table width="100%"  cellpadding="0" cellspacing="0" >
          <tr>
          <td colspan="4" valign="middle" height="26" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;
          font-weight:600;  padding:5px;">&nbsp;<b>A. Personal Particulars  ( As in Passport ) </b></td>
          </tr>
          <tr>
          <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px; border-right:0px; padding:5px;" >&nbsp;  Surname ( As in Passport ) </td>
          <td colspan="3" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->surname . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px;border-right:0px; padding:5px;" >&nbsp;  Given Name ( As in Passport ) </td>
          <td colspan="3" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->given_name . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Previous/other Name If Any </td>
          <td colspan="3" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->previous_name . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Sex </td>
          <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;border-right:0px;  padding:5px;">&nbsp;  ' . $out->sex . ' </td>
          <td width="29%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  border-top:0px; border-right:0px; padding:5px;">&nbsp;  Marital Status </td>
          <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp; ' . $out->applicant_marital_status . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Date of bith </td>
          <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; ' . $out->date_of_birth . ' </td>
          <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; Religion </td>
          <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->religion . ' </td>
          </tr>
          <tr>
          <td width="30%"  valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Place of Birth Town/City </td>
          <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->city_of_birth . ' </td>
          <td width="29%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Country of Birth </td>
          <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   ' . $out->country_of_birth . ' </td>
          </tr>
          <tr>
          <td width="30%"  valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Citizenship / National ID No </td>
          <td width="20%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->national_id . ' </td>
          <td width="29%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Educational Qualification </td>
          <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->educational_qualification . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Visible Identification marks </td>
          <td colspan="3" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->visible_identification_marks . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Current Nationality </td>
          <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->nationality . ' </td>
          <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; Nationality by Birth Naturalization </td>
          <td width="21%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   ' . $out->acquire_nationality . ' </td>
          </tr>
          ' . $acquire_nationality . '
          <tr>
          <td colspan="4" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;<b>B. Passport Details </b></td>
          </tr>
          <tr>
          <td width="30%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Passport No. </td>
          <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->passport_no . ' </td>
          <td width="29%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Date of Issue(dd/mm/yyyy) </td>
          <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   ' . $out->date_of_issue . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Place of Issue </td>
          <td width="20%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->place_of_issue . ' </td>
          <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;border-right:0px; padding:5px;">&nbsp; Date of expiry(dd/mm/yyyy) </td>
          <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->date_of_expiry . ' </td>
          </tr>
          <tr>
          <td colspan="4" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;<b>Any other Passport/Identity Certificate held (if yes, please fill in the following) &nbsp;:&nbsp; ' . $out->other_valid_passport . '</b> </td>
          </tr>
          <tr>
          <td width="30%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;border-right:0px; padding:5px;">&nbsp;  Country of Issue </td>
          <td width="20%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;"> ' . $out->other_country_of_issue . ' </td>
          <td width="29%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Place of Issue </td>
          <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   ' . $out->other_place_of_issue . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Passport/IC No </td>
          <td width="20%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   ' . $out->other_passport_no . ' </td>
          <td width="29%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;"> Date of Issue(dd/mm/yyyy) </td>
          <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp; ' . $out->other_date_of_issue . ' </td>
          </tr>
          <tr>
          <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; Nationality/Status </td>
          <td valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  ' . $out->other_nationality_mentioned . ' </td>
          </tr>
          </table>
          <table width="100%"  cellpadding="0" cellspacing="0" >
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;<b>C. Applicants Contact Details </b></td>
          </tr>
          <tr>
          <td width="16%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Present Address </td>
          <td width="34%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->street_present . '<br>&nbsp;  ' . $out->city_present . '<br>&nbsp;  ' . $out->state_present . '<br>&nbsp;  ' . $out->country_present . ', ' . $out->zip_code_present . ' </td>
          <td width="50%" colspan="2" valign="top"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  font-weight:600; "><table width="100%" cellpadding="0" cellspacing="0">
          <tr>
          <td valign="middle" width="39%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px;  font-weight:600;  padding:5px;">&nbsp; Phone No</td>
          <td valign="middle" width="61%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px;  font-weight:600; border-left:0px; padding:5px;">&nbsp; ' . $out->phone_no . '</td>
          </tr>
          <tr>
          <td valign="middle" width="39%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  padding:5px;">&nbsp; Mobile/cell No</td>
          <td valign="middle" width="61%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-left:0px; padding:5px;">&nbsp; ' . $out->mobile_no . '</td>
          </tr>
          <tr>
          <td valign="middle" width="39%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp; Email address</td>
          <td valign="middle" width="61%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-left:0px; padding:5px;">&nbsp; ' . $out->email_present . '</td>
          </tr>
          </table></td>
          </tr>
          <tr>
          <td width="16%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Permanent Address </td>
          <td width="34%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->street_permanent . '<br>&nbsp;  ' . $out->city_permanent . '<br>&nbsp;  ' . $out->state_permanent . '<br>&nbsp; </td>
          <td width="50%" colspan="2" valign="top"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;"></td>
          </tr>
          </table>
          <div class="page-break"></div>
          <table width="100%"  cellpadding="0" cellspacing="0" >
          <tr>
          <td colspan="5"  valign="middle" height="20px">&nbsp; </td>
          </tr>
          <tr>
          <td colspan="5"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:1px; font-weight:600;  padding:5px; 5px 5px 5px;">&nbsp;<b>D. Family Details </b> </td>
          </tr>
          <tr>
          <td width="13%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Relation </td>
          <td width="27%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Name </td>
          <td width="19%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Nationality </td>
          <td width="21%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Prev. Nationality </td>
          <td width="20%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Place / Country of Birth </td>
          </tr>
          <tr>
          <td width="13%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;   padding:5px;">&nbsp; Fathers </td>
          <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;   padding:5px;">&nbsp;  ' . $out->name_father . ' </td>
          <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;  padding:5px;">&nbsp;  ' . $out->nationality_father . ' </td>
          <td width="21%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;  padding:5px;">&nbsp;  ' . $out->previous_nationality_father . ' </td>
          <td width="20%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;  padding:5px;">&nbsp; ' . $out->place_of_birth_father . ' / ' . $out->country_of_birth_father . ' </td>
          </tr>
          <tr>
          <td width="13%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Mothers </td>
          <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->name_mother . ' </td>
          <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->nationality_mother . ' </td>
          <td width="21%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->previous_nationality_mother . ' </td>
          <td width="20%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;  padding:5px;">&nbsp;  ' . $out->place_of_birth_mother . ' / ' . $out->country_of_birth_mother . ' </td>
          </tr>
          <tr>
          <td width="13%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Spouse </td>
          <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->name_married . ' </td>
          <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->nationality_married . ' </td>
          <td width="21%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->previous_nationality_married . ' </td>
          <td width="20%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;  padding:5px;">&nbsp;  ' . $out->place_of_birth_married . ' / ' . $out->country_of_birth_married . ' </td>
          </tr>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; <b>Were Your Granfather/Grandmother(Paternal / Maternal) Pakistan Nationals Or belong to Pakistan held area : ' . $out->grandparents_pakistan . ' </b></td>
          </tr>
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">' . $out->grandparents_pakistan_details . ' </b></td>
          </tr>
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;<b>E. Details of Visa Sought</b> &nbsp;&nbsp;<span style="font-size:10px"><small>(Visa shall be valid from the Date of issue and not from the date of Journey)</small></span></td>
          </tr>
          <tr>
          <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Type of Visa Required </td>
          <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->visa_type . ' </td>
          <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  No of Entries </td>
          <td width="25%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  padding:5px;">&nbsp;  ' . $out->v_no_of_entries . ' </td>
          </tr>
          <tr>
          <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Period of Visa (Month) </td>
          <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; ' . $out->v_duration_of_visa . '</td>
          <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Expected Date of Journey </td>
          <td width="25%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  padding:5px;">&nbsp;  ' . $out->v_expected_date_journey . ' </td>
          </tr>
          <tr>
          <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Port of Arrival </td>
          <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  ' . $out->v_port_arrival . ' </td>
          <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Port of Exit </td>
          <td width="25%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  padding:5px;">&nbsp;  ' . $out->v_port_exit . ' </td>
          </tr>
          </table>
          <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
          <td colspan="4" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Required Details of  ' . $out->visa_type . ' </td>
          </tr>
          ' . $visa_type_display . '
          <tr>
          <td colspan="4" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC; font-weight:600;">&nbsp; Purpose of visit : ' . $out->v_purpose_of_visit . ' </td>
          </tr>
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;<b>F. Previous Visit Details</b></span></td>
          </tr>
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Have You Ever Visit India ? ' . $out->visited_india_before . ' </td>
          </tr>
          <tr>
          <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Address where you stay in india </td>
          <td valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; &nbsp; ' . $out->visited_address_1 . '<br> &nbsp; ' . $out->visited_address_2 . '<br> &nbsp; ' . $out->visited_address_3 . '</td>
          </tr>
          <tr>
          <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Cities In India Visited </td>
          <td valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; ' . $out->cities_previously_visited_india . ' </td>
          </tr>
          <tr>
          <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Type Of Visa </td>
          <td width="23%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; ' . $out->last_type_visa . ' </td>
          <td width="26%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Visa Number </td>
          <td width="26%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; ' . $out->last_indian_visa_no . ' </td>
          </tr>
          <tr>
          <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Visa Issued place </td>
          <td width="23%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; ' . $out->last_place_of_issue . ' </td>
          <td width="26%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Date Of Issue </td>
          <td width="26%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; ' . $out->last_date_of_issue . ' </td>
          </tr>
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Countries visited in last 10years<br/>&nbsp;  
          ' . $out->countries_visited_last_10_years . ' </td>
          </tr>
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Have you been resused an Indian Visa or extension of the same previously or deported from India ? ' . $out->last_visit_previously_refused . ' </td>
          </tr>
          <tr>
          <td colspan="2"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; &nbsp; If <b>Yes</b> above Mention when and by whome width control<br/>
              &nbsp; &nbsp; No / Date </td>
          <td colspan="2"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">' . $out->mention_control_no . ' , ' . $out->refused_date . '</td>
          </tr>
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;<b>G. Profession / Occupation Details </b></td>
          </tr>
          <tr>
          <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Present Occupation </td>
          <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    ' . $out->present_occupation . ' </td>
          <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Designation / Rank </td>
          <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  ' . $out->designation . ' </td>
          </tr>
          <tr>
          <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Employer name / Businesss </td>
          <td   valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    ' . $out->business_name . ' </td>
          </tr>
          <tr>
          <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Employer Address <br/> &nbsp;  Phone Number </td>
          <td   valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    ' . $out->address . ' </td>
          </tr>
          <tr>
          <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Past Occupation if Any </td>
          <td   valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    ' . $out->past_occupation . ' </td>
          </tr>
          <tr>
          <td   valign="middle" height="20px"  colspan="4" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Are/Have you worked with Armed Forces/Police /Para Military forces ? ' . $out->military . ' </td>
          </tr>
          <tr>
          <td valign="middle" height="20px"  colspan="4">
          <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
          <td width="25%"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Organisation </td>
          <td width="25%"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; ' . $out->military_organisation . ' </td>
          <td width="25%"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Designation </td>
          <td width="25%"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; ' . $out->military_designation . ' </td>
          </tr>
          <tr>
          <td width="25%"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Military Rank </td>
          <td width="25%"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    ' . $out->military_rank . ' </td>
          <td width="25%"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Place of Posting </td>
          <td width="25%"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  ' . $out->military_place_of_posting . ' </td>
          </tr>
          </table>
          </td>
          </tr >
          </table>
          <div class="page-break"></div>
          <table width="100%" cellpadding="0" cellspacing="0">

          <tr>
          <td colspan="4" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; font-weight:600; border-top:1px; padding:5px; 5px 5px 5px;">&nbsp; </td>
          </tr>

          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:1px; padding:5px; 5px 5px 5px;">&nbsp;<b>H. Address of Place of Stay / Hotel</b> </td>
          </tr>
          <tr>
          <td width="20%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Place/Hotel Name </td>
          <td width="47%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Address of Place / Hotel </td>
          <td width="13%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  State </td>
          <td width="20%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Phone No. </td>
          </tr>
          <tr>
          <td width="20%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;   </td>
          <td width="47%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;   </td>
          <td width="13%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    </td>
          <td width="20%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    </td>
          </tr>
          </table>

          <table width="100%"  cellpadding="0" cellspacing="0" >
          <tr>
          <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:1px; padding:5px; 5px 5px 5px;">&nbsp;<b>I. Details of two refrence</b> </td>
          </tr>
          <tr>
          <td  colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   font-weight:600; border-top:0px;"><table width="100%" cellpadding="0" cellspacing="0">
          <tr>
          <td><table width="100%" cellpadding="0" cellspacing="0">
          <tr>
          <td colspan="2"  valign="middle" align="center" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  In India </td>
          <td width="49%" height="20px" colspan="2" align="center"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  In ' . $out->applying_country . ' </td>
          </tr>
          <tr>
          <td width="12%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Name </td>
          <td width="39%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  ' . $out->reference_name_india . ' </td>
          <td width="49%" height="20px" colspan="2"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  ' . $out->reference_name_country . ' </td>
          </tr>
          <tr>
          <td width="12%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Address </td>
          <td width="39%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  ' . $out->reference_address_india_1 . '<br>' . $out->reference_address_india_2 . ' </td>
          <td width="49%" height="20px" colspan="2"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  ' . $out->reference_address_country_1 . '<br>' . $out->reference_address_country_2 . ' </td>
          </tr>
          <tr>
          <td width="12%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Phone </td>
          <td width="39%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  ' . $out->reference_phone_india . ' </td>
          <td width="49%" height="20px" colspan="2"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  ' . $out->reference_phone_country . ' </td>
          </tr>
          </table></td>
          </tr>
          </table></td>
          </tr>
          <tr>
          <td height="20px"  colspan="4" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;<b>J. DECLARATION :</b></td>
          </tr>
          <tr>
          <td height="20px"  width="8%"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;a.</td>
          <td height="20px"  width="92%" colspan="3" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;I do not hold any other passport(s) other than those detailed above.</td>
          </tr>
          <tr>
          <td height="20px"  width="8%"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;b.</td>
          <td height="20px"  width="92%" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;I have read and understood all the conditions for the visit to India and I am willing and able to abide fully by them.</td>
          </tr>
          <tr>
          <td height="20px"  width="8%"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;c.</td>
          <td height="20px"  width="92%"  colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;I declare that the information given in the form is complete and correct and the visit to india will be undertaken for the purpose indicate in the application</td>
          </tr>
          <tr>
          <td height="20px"  width="8%"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;d.</td>
          <td height="20px"  width="92%"  colspan="3" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;I understant that in case the information provided in the form is found to be incorrect, I will be liable for denial of visit/entry or deportation and / or other penalties during the visit as provided by  ' . $out->applying_country . ' law</td>
          </tr>
          </table>
          <table width="100%"  cellpadding="0" cellspacing="0" >
          <tr>
          <td height="80px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;"></td>
          <td height="80px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;"></td>
          </tr>
          <tr>
          <td height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">Date : ' .date('d-m-Y',$out->apply_date). '</td>
          <td height="20px"  align="right" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  font-weight:600; border-top:0px;  padding:5px; 5px 5px 5px;">Applicant Signature (as in Passport)</td>
          </tr>
          </table></td>
          </tr>
          </table>


          </body></html>';

       $reportPDF = $this->createPDF($pdf_content);
    }

    function createPDF($pdf_content) {

        date_default_timezone_set('Asia/Kolkata');
        require_once (BASEPATH . 'pdf/dompdf_config.inc.php');
        $dompdf = new DOMPDF();
        $dompdf->load_html($pdf_content);
        $dompdf->set_paper('a4', 'portrait');
        $dompdf->render();
       return $dompdf->stream("visapdf.pdf");
    }

}
