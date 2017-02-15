<?php

trait FlightTbo {

    public static function getFlights() {
        // Body Code
        
        
//        $url = '';
//        $postData = array();
//        $this->getCurlRequerst($url,$postData);
        
        
        
        echo 'hello brij';
        
        
        //$this->load->library('curl'); 
        //$this->load->library('curl');
        
      //  echo $this->curl->simple_get('https://www.google.co.in/?gfe_rd=cr&ei=OKWiWM_7CePs8AffvL2QDw&gws_rd=ssl');
        
       // die;
        
        
//        $url = "http://url/checkweb.php";
//        $post_data = array(
//            "foo" => "bar",
//            "query" => "Nettuts",
//            "action" => "Submit"
//        );
//        $output = $this->curl->simple_post($url, $post_data);
//        
        
        
        
        
        
    }

    public function getFlightFare() {
        // Body Code
    }

    public function getFlightFareBreakdown() {
        // Body Code
    }

    public function getFlightFareRules() {
        // Body Code
    }

    public function getFlightSegments() {
        // Body Code
    }

    public function getFlight_SSR_LCC_Baggage() {
        // Body Code
    }

    public function getFlight_SSR_MealDynamic() {
        // Body Code
    }

    public function getFlight_SSR_Non_LCC_Meal() {
        // Body Code
    }

    public function getFlight_SSR_Non_LCC_Seat_Preference() {
        // Body Code
//          
//          $params = array(
//   "name" => "Ravishanker Kusuma",
//   "age" => "32",
//   "location" => "India"
//);
// 
//echo httpPost("http://hayageek.com/examples/php/curl-examples/post.php",$params);
    }
    
    
    
    private function  getCurlRequerst($url , $postData){
        
    }

//    private function httpCulrPost($url, $params) {
//        $postData = '';
//        //create name value pairs seperated by &
//        foreach ($params as $k => $v) {
//            $postData .= $k . '=' . $v . '&';
//        }
//        $postData = rtrim($postData, '&');
//
//        $ch = curl_init();
//
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HEADER, false);
//        curl_setopt($ch, CURLOPT_POST, count($postData));
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
//
//        $output = curl_exec($ch);
//
//        curl_close($ch);
//        return $output;
//    }

//    public function curl($url, $postParam) {
//
//        $data = array("name" => "Hagrid", "age" => "36");
//        $data_string = json_encode($data);
//        
//        
//        //  $headers= array('Accept: application/json','Content-Type: application/json'); 
//        
//        
//        $ch = curl_init('http://api.local/rest/users');
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//            'Content-Type: application/json',
//            'Content-Length: ' . strlen($data_string))
//        );
//
//        $result = curl_exec($ch);
//    }
    
    
    
    
//    
//    $url = 'http://yourdomain.com';
//$jsonString = json_encode(array("key" => "value"));
//
//// You can directly replace your JSON string with $jsonString variable.
//$ch = curl_init();
//$timeout = 0; // Set 0 for no timeout.
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
//curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//'Content-Type: application/json',
//'Content-Length: ' . strlen($jsonString),)
//);
//curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
//$result = curl_exec($ch);
//curl_close($ch);
    
//    function getCounters($url, $data_string) 
//{
//  $ch = curl_init();
//  $format="json";
//  $ch = curl_init($url);                                                                      
//  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
//  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
//  curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
//      'Content-Type: application/json',                                                                                
//      'Content-Length: ' . strlen($data_string))                                                                       
//  );                                                                                                                   
//  $result = curl_exec($ch);
//  curl_close($ch);
//  $obj = (array)json_decode($result);
//  return $obj['payload'];
//}

//$data = array("org_id" => $org);     
//$data_string = json_encode($data);
//$payload= getCounters($api_url, $data_string);






//
////API Url
//$url = 'http://example.com/api/JSON/create';
//
////Initiate cURL.
//$ch = curl_init($url);
//
////The JSON data.
//$jsonData = array(
//    'username' => 'MyUsername',
//    'password' => 'MyPassword'
//);
//
////Encode the array into JSON.
//$jsonDataEncoded = json_encode($jsonData);
//
////Tell cURL that we want to send a POST request.
//curl_setopt($ch, CURLOPT_POST, 1);
//
////Attach our encoded JSON string to the POST fields.
//curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
//
////Set the content type to application/json
//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
//
////Execute the request
//$result = curl_exec($ch);
    
//    function xy() {
//
//
//        $err_status = "";
//        /* Define the URL endpoint where you will get JSON data from */
//        $apifullurl = "https://www.somesite.com/endpoint";
//        /* Define an array with which to place name-value data you wish to send */
//        $apipostdata = Array();
//        $apipostdataencoded = "";
//        /* Add data to that array */
//        $apipostdata = Array(
//            'param1' => $param1value
//            , 'param2' => $param2value
//            , 'param3' => $param3value
//        );
//        /* JSON Specific Request Search Parameters Modification */
//        $tmp_apipostdata = Array();
//        $tmp_apipostdata = $apipostdata;
//        unset($apipostdata);
//        $apipostdataencoded = json_encode((array) $tmp_apipostdata);
//        unset($tmp_apipostdata);
//        /* JSON Request Specific Content Header */
//        $apihttpheader = Array(
//            'Content-Type: application/json'
//            , 'Accept: application/json'
//            , 'Content-Length: ' . strlen($apipostdataencoded)
//        );
//        /* Create the CURL Handler */
//        $curl = curl_init();
//        curl_setopt($curl, CURLOPT_URL, $apifullurl);
//        curl_setopt($curl, CURLOPT_HTTPHEADER, $apihttpheader);
//        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
//        curl_setopt($curl, CURLOPT_MAXREDIRS, 2);
//        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE); /* Follow redirects, the number of which is defined in CURLOPT_MAXREDIRS */
//        curl_setopt($curl, CURLOPT_FORBID_REUSE, TRUE);
//        curl_setopt($curl, CURLOPT_FRESH_CONNECT, TRUE);
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
//        curl_setopt($curl, CURLOPT_POST, TRUE);
//        curl_setopt($curl, CURLOPT_POSTFIELDS, $apipostdataencoded);
//        $response = curl_exec($curl);
//        $err_status = curl_error($curl);
//        curl_close($curl);
//        /* Handle Response */
//        if (strlen($err_status) == 0) {
//            if (strlen($response) > 0) {
//                /* Read the JSON, if any */
//                $apiresponse = json_decode($response, TRUE);
//                if (sizeof($apiresponse) > 0) {
//                    /* There may be other data aside from the main JSON message, in the JSON response so the example below just shows getting a simple name-value pair */
//                    $apiresponsecode = $apiresponse["responsecode"];
//                    /* The main JSON message (it may or may not be referenced as "results" in your case) */
//                    for ($j = 0; $j < sizeof($apiresponse["results"]); $j++) {
//                        /* Get name-value data of this array object */
//                        if (isset($apiresponse["results"][$j]["model"])) {
//                            print "Model = " . htmlspecialchars($apiresponse["results"][$j]["model"]) . "<br />";
//                        }
//                        if (isset($apiresponse["results"][$j]["description"])) {
//                            print "Description = " . htmlspecialchars($apiresponse["results"][$j]["description"]) . "<br />";
//                        }
//                        /* An array may be embedded with this array object; if so, grab that array data */
//                        if (isset($apiresponse["results"][$j]["attributes"])) {
//                            $attributes = Array();
//                            $attributes = $apiresponse["results"][$j]["attributes"];
//                            /* Step through array data */
//                            for ($a = 0; $a < sizeof($attributes); $a++) {
//                                $attributeset = Array();
//                                $attributeset = $attributes[$a];
//                                foreach ($attributeset AS $name => $value) {
//                                    print "Name = " . htmlspecialchars($name) . ", Value = " . htmlspecialchars($value) . "<br />";
//                                }
//                                unset($attributeset);
//                            }
//                            unset($attributes);
//                        }
//                    }
//                } else {
//                    print "We got a response but it does not appear to be JSON.";
//                }
//            } else {
//                print "There was no error but there was no response either.";
//            }
//        } else {
//            print $err_status;
//        }
//    }

}
