<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Flight extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        error_reporting(0);
        $this->active['current_page'] = $this->uri->segment(1);
    }

    public function index() {
        
        
        
      $response =   $this->callCurl($url , array('1','2','3'));
      
      
      
      
      echo '<pre>';
          print_r($response);
      echo '</pre>';
      
      die;

        // echo   FlightTbo::getFlights();

       // echo Flight::getFlights();
        //die;


        $timearray = unserialize(TIME_ARRAY);
        // echo $timearray[$time];
        $timejson = json_encode($timearray);
        $data = array('timejson' => $timejson);
        $this->load->view('template/header');
        $this->load->view('hospital/index.php', $data);
        $this->load->view('template/footer', $data);
    }

    public function result() {
        $this->load->view('template/header');
        $this->load->view('hospital/result.php');
        $this->load->view('template/footer');
    }

    public function gettimearray() {
        $time = $_GET['time'];
        $timearray = unserialize(TIME_ARRAY);
        echo $timearray[$time];
        $timejson = json_encode($timearray);
    }
    
    
    
    
    private function callCurl($apifullurl , $postParam){
        
        
//        echo '<pre>';
//              print_r($postParam);
//        echo '</pre>';
        
        
        
         $err_status = "";
        /* Define the URL endpoint where you will get JSON data from */
        //$apifullurl = "https://www.somesite.com/endpoint";
        /* Define an array with which to place name-value data you wish to send */
        $apipostdata = Array();
        $apipostdataencoded = "";
        
        
        /* Add data to that array */
//        $apipostdata = Array(
//            'param1' => $param1value
//            , 'param2' => $param2value
//            , 'param3' => $param3value
//        );
        
        
        $apipostdata = $postParam;
        /* JSON Specific Request Search Parameters Modification */
        $tmp_apipostdata = Array();
        $tmp_apipostdata = $apipostdata;
        unset($apipostdata);
        $apipostdataencoded = json_encode((array) $tmp_apipostdata);
        unset($tmp_apipostdata);
        /* JSON Request Specific Content Header */
        $apihttpheader = Array(
            'Content-Type: application/json'
            , 'Accept: application/json'
            , 'Content-Length: ' . strlen($apipostdataencoded)
        );
        /* Create the CURL Handler */
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apifullurl);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $apihttpheader);
        //curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        //curl_setopt($curl, CURLOPT_MAXREDIRS, 2);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE); /* Follow redirects, the number of which is defined in CURLOPT_MAXREDIRS */
        curl_setopt($curl, CURLOPT_FORBID_REUSE, TRUE);
        curl_setopt($curl, CURLOPT_FRESH_CONNECT, TRUE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $apipostdataencoded);
        $response = curl_exec($curl);
        $err_status = curl_error($curl);
        curl_close($curl);
        
        /* Handle Response */
        if (strlen($err_status) == 0) {
            
            if (strlen($response) > 0) {
                
                /* Read the JSON, if any */
                $apiresponse = json_decode($response, TRUE);
                if (sizeof($apiresponse) > 0) {
                    
                    /**
                     * Logical Operation
                     * 
                     * 
                     * 
                     * 
                     */
                    
                    echo '<pre>';
                        print_r($apiresponse);
                    echo '</pre>';
                    
                    
                    
                    
                    
                    
                    
                    
                } else {
                    print "We got a response but it does not appear to be JSON.";
                }
            } else {
                print "There was no error but there was no response either.";
            }
            
        } else {
            print $err_status;
        }
    }

}