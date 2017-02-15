<?php 
class Searchhotel_ApiIntegration {
    
//    public $url='http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate';
//    public $urlHotel='http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelResult/';
//    public $userIp='180.151.8.18';
//    public $user="tripshows";   
//    public $pass="tripshows@123";
//    public $clientID='apiintegration';
   
    public function apiAuthentication($clientID,$url,$user,$pass,$userIp){
            $data = array(
                    'ClientId' => $clientID,
                    'UserName' => $user,
                    'Password' => $pass,
                    'EndUserIp' => $userIp

            );


            $data_string = json_encode($data); 

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            //curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                'Content-Type: application/json',                                                                                
                'Content-Length: ' . strlen($data_string)                                                                       
            ));       



            $output = curl_exec($ch);



            $response = json_decode($output,true); 

            return $response['TokenId'];
            curl_close($ch);
          
    } 
     
    public function apiHotelSearch($urlHotel,$userIp,$datah){
        
    
        $data_stringh = json_encode($datah); 

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlHotel);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_stringh);
        //curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_stringh)                                                                       
        ));       



       $outputH = curl_exec($ch);



       $response = json_decode($outputH,true); 
      print_r($response);  
      
        return $response;
        curl_close($ch);
   }      
 public function getHotelInfo($resultIndex,$hotelCode,$userIp,$tokenId,$traceId){
      $hotelInfoURL="http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelInfo/"; 
                $datahRoom = array(
                 "ResultIndex" => $resultIndex,
                 "HotelCode" => $hotelCode,
                 "EndUserIp" => $userIp,
                 "TokenId" => $tokenId,
                 "TraceId" => $traceId
                 );
              $data_stringh=  json_encode($datahRoom);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $hotelInfoURL);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_stringh);
                //curl_setopt($ch, CURLOPT_HEADER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                    'Content-Type: application/json',                                                                                
                    'Content-Length: ' . strlen($data_stringh)                                                                       
        ));       



     $outputH = curl_exec($ch);



       $response = json_decode($outputH,true); 

        return $response;
        curl_close($ch);

       
   }
   
  public function getHotelRoomDetail($userIp,$tokenId,$traceId,$resultIndex,$hotelCode){
        $urlHotelBook="http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelRoom/";
          
            $datahRoom = array(
             "ResultIndex" => $resultIndex,
             "HotelCode" => $hotelCode,
             "EndUserIp" => $userIp,
             "TokenId" => $tokenId,
             "TraceId" => $traceId
             );
          $data_stringh=  json_encode($datahRoom);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlHotelBook);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_stringh);
        //curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_stringh)                                                                       
));       



 $outputH = curl_exec($ch);


 
$response = json_decode($outputH,true); 

return $response;
curl_close($ch);
   } 
   
public function blockRoom($datahRoom){
      $hotelInfoURL="http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/BlockRoom/"; 

                $data_stringh=  json_encode($datahRoom,JSON_UNESCAPED_UNICODE );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $hotelInfoURL);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_stringh);
                //curl_setopt($ch, CURLOPT_HEADER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                    'Content-Type: application/json',                                                                                
                    'Content-Length: ' . strlen($data_stringh)                                                                       
        ));       



         $outputH = curl_exec($ch);



      $response = json_decode($outputH,true); 

       return $response;
        curl_close($ch);
  }    
   
   public function bookRoom($datahRoom){
      $hotelInfoURL="http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/Book/"; 

             $data_stringh=  json_encode($datahRoom,JSON_UNESCAPED_UNICODE );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $hotelInfoURL);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_stringh);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                    'Content-Type: application/json',                                                                                
                    'Content-Length: ' . strlen($data_stringh)                                                                       
        ));       



         $outputH = curl_exec($ch);



        $response = json_decode($outputH,true); 

        return $response;
        curl_close($ch);

       
   }
    public function getBookingDetails($datahRoom){
      $hotelInfoURL="http://api.tektravels.com/BookingEngineService_Hotel/HotelService.svc/rest/GetBookingDetail/"; 

                $data_stringh=  json_encode($datahRoom,JSON_UNESCAPED_UNICODE );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $hotelInfoURL);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_stringh);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                    'Content-Type: application/json',                                                                                
                    'Content-Length: ' . strlen($data_stringh)                                                                       
        ));       
        $outputH = curl_exec($ch);
        $response = json_decode($outputH,true); 
        $_SESSION['VOUCHER_DETAIL']=$response;
        print_r($_SESSION['VOUCHER_DETAIL']);
        return 1 ;
        curl_close($ch);

       
   }
}



?>