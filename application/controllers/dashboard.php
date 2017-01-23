<?php
class dashboard extends CI_Controller
{
    
  public function __construct(){
    parent::__construct();
    $this->active['current_page'] = $this->uri->segment(1);
    $this->load->model('dashboardModel', 'model');
  }

  public function index() 
  { 
    echo base_url().'assets/pdf/dompdf_config.inc.php';
    exit;
    $sess = $this->session->userdata();
        if($sess['logged_in']['user_id'] == ""){

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
    $pdf_content='<!DOCTYPE >
          <html >
          <style type="text/css">             
            #pdf_header, #pdf_container{ border: 1px solid #CCCCCC; padding:10px; }       
            #pdf_header{ margin:10px auto 0px; border-bottom:none; }        
            table{ width:500px; }       
            #pdf_container{margin:0px auto; }
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
                                <td width="26%"><img src="images/Ashoka-Stambh.jpg" style="width:60px; height:80px;" /></td>
                                <td width="74%" align="center" valign="middle" style="font-size:15px; font-family:Arial, Helvetica, sans-serif; color:#000000; font-weight:600;"> Embassy Of India Washington Dc <br/>
                                  <span style="font-size:12px;">Washington</span><br/>
                                  <span style="font-size:12px;">http://www.indianembassy.org/</span></td>
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
                                <td width="26%" align="center"><img src="images/profileimage.jpg" style="width:80px; height:100px;" /></td>
                                <td width="55%" align="center" valign="middle" style="font-size:16px; font-family:Arial, Helvetica, sans-serif; font-weight:900;">Visa Application Form</td>
                                <td width="16%"></td>
                              </tr>
                              <tr>
                                <td width="3%" align="left" style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#000000;">&nbsp;</td>
                                <td width="26%" align="center" style="font-size:10px; font-family:Arial, Helvetica, sans-serif;"><span style="font-size:10px; font-family:Arial, Helvetica, sans-serif; color:#000000;">AFGA11001</span></td>
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
                    font-weight:600;  padding:5px;">&nbsp;  A. Personal Particulars  ( As in Passport ) </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px; border-right:0px; padding:5px;" >&nbsp;  Surname ( As in Passport ) </td>
                    <td colspan="3" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px;border-right:0px; padding:5px;" >&nbsp;  Given Name ( As in Passport ) </td>
                    <td colspan="3" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Previous/other Name If Any </td>
                    <td colspan="3" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                 <tr>
                    <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Sex </td>
                    <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;border-right:0px;  padding:5px;">&nbsp;  Dummy </td>
                    <td width="29%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  border-top:0px; border-right:0px; padding:5px;">&nbsp;  Marital Status </td>
                    <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp; Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Date Of bith </td>
                    <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; Dummy </td>
                    <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; Religion </td>
                    <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%"  valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Place of birth Town/City </td>
                    <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="29%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Country of birth </td>
                    <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%"  valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Citizenship / National ID No </td>
                    <td width="20%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="29%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Educational Qualification </td>
                    <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Visible Identification mark </td>
                    <td colspan="3" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  None </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Current Nationality </td>
                    <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; Nationality by Birth Naturalization </td>
                    <td width="21%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Any Other Previous/Past Nationality </td>
                    <td colspan="3" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                  <tr>
                    <td colspan="4" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  B. Passport Details </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Passport No. </td>
                    <td width="20%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="29%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Date of Issue(dd/mm/yyyy) </td>
                    <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Place of Issue </td>
                    <td width="20%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;border-right:0px; padding:5px;">&nbsp; Date of expiry(dd/mm/yyyy) </td>
                    <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                  <tr>
                    <td colspan="4" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   B. Passport Details </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;border-right:0px; padding:5px;">&nbsp;  Country of Issue </td>
                    <td width="20%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;"> Dummy </td>
                    <td width="29%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Place of Issue </td>
                    <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;   Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Passport/IC No </td>
                    <td width="20%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;   Dummy </td>
                    <td width="29%" valign="middle" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;"> Date of Issue(dd/mm/yyyy) </td>
                    <td width="21%" valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp; Dummy </td>
                  </tr>
                  <tr>
                    <td width="30%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp; Nationality/Status </td>
                    <td valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                </table>
                <table width="100%"  cellpadding="0" cellspacing="0" >
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  C. Applicants Contact Details </td>
                  </tr>
                  <tr>
                    <td width="16%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Present Address </td>
                    <td width="34%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="50%" colspan="2" valign="top"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  font-weight:600; "><table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                          <td valign="middle" width="39%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px;  font-weight:600;  padding:5px;">&nbsp; Phone No</td>
                          <td valign="middle" width="61%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px;  font-weight:600; border-left:0px; padding:5px;">&nbsp; Dummy</td>
                        </tr>
                        <tr>
                          <td valign="middle" width="39%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  padding:5px;">&nbsp; Mobile/cell No</td>
                          <td valign="middle" width="61%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-left:0px; padding:5px;">&nbsp; Dummy</td>
                        </tr>
                        <tr>
                          <td valign="middle" width="39%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp; Email address</td>
                          <td valign="middle" width="61%" height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-left:0px; padding:5px;">&nbsp; Dummy</td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td width="16%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Permanent Address </td>
                    <td width="34%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="50%" colspan="2" valign="top"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;"></td>
                  </tr>
                </table>
                <div class="page-break"></div>
                <table width="100%"  cellpadding="0" cellspacing="0" >
                  <tr>
                    <td colspan="5"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600;  padding:5px; 5px 5px 5px;">&nbsp;  D. Family Details </td>
                  </tr>
                  <tr>
                    <td width="13%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Relation </td>
                    <td width="27%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Name </td>
                    <td width="19%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Nationality </td>
                    <td width="21%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Prev. Nationality </td>
                    <td width="20%" valign="top"  height="24" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  background-color:#eeeeee; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; padding:5px;">&nbsp;  Place / Country of Birth </td>
                  </tr>
                  <tr>
                    <td width="13%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;   padding:5px;">&nbsp; Father s </td>
                    <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;   padding:5px;">&nbsp;  Dummy </td>
                    <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;  padding:5px;">&nbsp;  Dummy </td>
                    <td width="21%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;  padding:5px;">&nbsp;  Dummy </td>
                    <td width="20%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  font-weight:600;  padding:5px;">&nbsp; Dummy </td>
                  </tr>
                  <tr>
                    <td width="13%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Mother s </td>
                    <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="21%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="20%" valign="top"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;  padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                  <tr>
                    <td width="13%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Spouse </td>
                    <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="21%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Dummy </td>
                    <td width="20%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px;  padding:5px;">&nbsp;  Dummy </td>
                  </tr>
                </table>
                <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Were Your Granfather/Grandmother(Paternal / Maternal) Pakistan Nationals Or belong to Pakistan held area : NO </td>
                  </tr>
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  E. Details of Visa Sought &nbsp;&nbsp;<span style="font-size:10px">(Vias shall be valid from the Date of issue and not from the date of Journey)</span></td>
                  </tr>
                  <tr>
                    <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Type of Visa Required </td>
                    <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Business Visa </td>
                    <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  No of Entries </td>
                    <td width="25%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  padding:5px;">&nbsp;  Multiple </td>
                  </tr>
                  <tr>
                    <td width="19%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Port of Arrival </td>
                    <td width="29%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  New Delhi </td>
                    <td width="27%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600; border-top:0px; border-right:0px; padding:5px;">&nbsp;  Port of Exit </td>
                    <td width="25%" valign="middle"  height="20px" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC; border-top:0px; font-weight:600;  padding:5px;">&nbsp;  New Delhi </td>
                  </tr>
                </table>
                <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="4" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Requirder Details of       BUSINESS VISA </td>
                  </tr>
                  <tr>
                    <td width="25%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Company Name </td>
                    <td height="20px" valign="middle" colspan="3"   style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; MI SOFT TECH </td>
                  </tr>
                  <tr>
                    <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-left:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Address </td>
                    <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;   border-right:1px solid #CCCCCC; font-weight:600; border-top:0px;">&nbsp; Paras Trade Center </td>
                  </tr>
                  <tr>
                    <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-left:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; Email </td>
                    <td height="20px" colspan="3"  valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border-right:1px solid #CCCCCC; font-weight:600;   border-bototm:1px solid #CCCCCC;">&nbsp; info@ </td>
                  </tr>
                  <tr>
                    <td colspan="4" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC; font-weight:600;">&nbsp; Purpose of Bisit : BUSINESS </td>
                  </tr>
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  F. Previous Visit Details</span></td>
                  </tr>
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Have You Ever Visit India ? YES </td>
                  </tr>
                  <tr>
                    <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Address wher eyou stay in india </td>
                    <td valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Dummy </td>
                  </tr>
                  <tr>
                    <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Cities In India Visited </td>
                    <td valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Dummy </td>
                  </tr>
                  <tr>
                    <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Type Of Visa </td>
                    <td width="23%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Dummy </td>
                    <td width="26%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Visa Number </td>
                    <td width="26%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Dummy </td>
                  </tr>
                  <tr>
                    <td valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Visa Issued place </td>
                    <td width="23%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Dummy </td>
                    <td width="26%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Date Of Issue </td>
                    <td width="26%" height="20px" valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Dummy </td>
                  </tr>
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Countries visited in last 10years<br/>
                      Dummy , Dummy </td>
                  </tr>
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; Have you been resused an indian visa or extension of hte same previously or deported fron India ?
                      Dummy , Dummy </td>
                  </tr>
                  <tr>
                    <td colspan="2"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp; If Yes above Mention when and by whome width control<br/>
                      No / Date </td>
                    <td colspan="2"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;"></td>
                  </tr>
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  G. Profession / Occupation Details </td>
                  </tr>
                  <tr>
                    <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Present Occupation </td>
                    <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    Dummy </td>
                    <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Designationa / Rank </td>
                    <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Dummy </td>
                  </tr>
                  <tr>
                    <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Employer name / Businesss </td>
                    <td   valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    Dummy </td>
                  </tr>
                  <tr>
                    <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Employer Address <br/>
                      Phone Number </td>
                    <td   valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    Dummy </td>
                  </tr>
                  <tr>
                    <td   valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Past Occupation if Any </td>
                    <td   valign="middle" height="20px" colspan="3"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;    Dummy </td>
                  </tr>
                  <tr>
                    <td   valign="middle" height="20px"  colspan="4" style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Are/Have you worked with Armed Forces/Police /Para Military forces ? No </td>
                  </tr>
                </table>
                <table width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="4"  valign="middle" height="20px"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; background-color:#eeeeee; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  H. Address of Place of Stay / Hotel </td>
                  </tr>
                  <tr>
                    <td width="20%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Place/Hotel Name </td>
                    <td width="47%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Address of Place / Hotel </td>
                    <td width="13%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  State </td>
                    <td width="20%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Phone No. </td>
                  </tr>
                  <tr>
                    <td width="20%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Dummy </td>
                    <td width="47%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Dummy </td>
                    <td width="13%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000; border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Dummy </td>
                    <td width="20%" height="20px"   valign="middle"  style="font-size:10px;font-family:Arial, Helvetica, sans-serif; color:#000000;  border:1px solid #CCCCCC;  border-top:0px; font-weight:600; border-top:0px; padding:5px; 5px 5px 5px;">&nbsp;  Dummy </td>
                  </tr>
                </table>
                </td>
            </tr>
           
            
            
            
          </table>


       </body></html>';
      $name = date("Ymd").rand().'.pdf';
      $reportPDF= $this->createPDF(12, $pdf_content, 'activity_Report', $name );

  } 

  function createPDF($pdf_userid, $pdf_content, $pdf_For, $filename){
    
    date_default_timezone_set('Asia/Kolkata');
    require_once (BASEPATH.'pdf/dompdf_config.inc.php');

    $dompdf=new DOMPDF();
    $dompdf->load_html($pdf_content);
    $dompdf->render();
    $output = $dompdf->output();
    return $dompdf->stream($output); 
  } 
  
  
}