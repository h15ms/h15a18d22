var BASEURL = 'http://localhost/h15a18d22/';


angular
        .module('admin', [])
        .run(function ($rootScope) {
            $rootScope.title = 'Doctor ';
        })
        .controller('countryController', ['$scope','$http', '$sce',
            function ($scope,$http, $sce) {

                $scope.countryList = [
                    {name: 'Afghanistan', code: 'AF'},
                    {name: 'Åland Islands', code: 'AX'},
                    {name: 'Albania', code: 'AL'},
                    {name: 'Algeria', code: 'DZ'},
                    {name: 'American Samoa', code: 'AS'},
                    {name: 'AndorrA', code: 'AD'},
                    {name: 'Angola', code: 'AO'},
                    {name: 'Anguilla', code: 'AI'},
                    {name: 'Antarctica', code: 'AQ'},
                    {name: 'Antigua and Barbuda', code: 'AG'},
                    {name: 'Argentina', code: 'AR'},
                    {name: 'Armenia', code: 'AM'},
                    {name: 'Aruba', code: 'AW'},
                    {name: 'Australia', code: 'AU'},
                    {name: 'Austria', code: 'AT'},
                    {name: 'Azerbaijan', code: 'AZ'},
                    {name: 'Bahamas', code: 'BS'},
                    {name: 'Bahrain', code: 'BH'},
                    {name: 'Bangladesh', code: 'BD'},
                    {name: 'Barbados', code: 'BB'},
                    {name: 'Belarus', code: 'BY'},
                    {name: 'Belgium', code: 'BE'},
                    {name: 'Belize', code: 'BZ'},
                    {name: 'Benin', code: 'BJ'},
                    {name: 'Bermuda', code: 'BM'},
                    {name: 'Bhutan', code: 'BT'},
                    {name: 'Bolivia', code: 'BO'},
                    {name: 'Bosnia and Herzegovina', code: 'BA'},
                    {name: 'Botswana', code: 'BW'},
                    {name: 'Bouvet Island', code: 'BV'},
                    {name: 'Brazil', code: 'BR'},
                    {name: 'British Indian Ocean Territory', code: 'IO'},
                    {name: 'Brunei Darussalam', code: 'BN'},
                    {name: 'Bulgaria', code: 'BG'},
                    {name: 'Burkina Faso', code: 'BF'},
                    {name: 'Burundi', code: 'BI'},
                    {name: 'Cambodia', code: 'KH'},
                    {name: 'Cameroon', code: 'CM'},
                    {name: 'Canada', code: 'CA'},
                    {name: 'Cape Verde', code: 'CV'},
                    {name: 'Cayman Islands', code: 'KY'},
                    {name: 'Central African Republic', code: 'CF'},
                    {name: 'Chad', code: 'TD'},
                    {name: 'Chile', code: 'CL'},
                    {name: 'China', code: 'CN'},
                    {name: 'Christmas Island', code: 'CX'},
                    {name: 'Cocos (Keeling) Islands', code: 'CC'},
                    {name: 'Colombia', code: 'CO'},
                    {name: 'Comoros', code: 'KM'},
                    {name: 'Congo', code: 'CG'},
                    {name: 'Congo, The Democratic Republic of the', code: 'CD'},
                    {name: 'Cook Islands', code: 'CK'},
                    {name: 'Costa Rica', code: 'CR'},
                    {name: 'Cote D\'Ivoire', code: 'CI'},
                    {name: 'Croatia', code: 'HR'},
                    {name: 'Cuba', code: 'CU'},
                    {name: 'Cyprus', code: 'CY'},
                    {name: 'Czech Republic', code: 'CZ'},
                    {name: 'Denmark', code: 'DK'},
                    {name: 'Djibouti', code: 'DJ'},
                    {name: 'Dominica', code: 'DM'},
                    {name: 'Dominican Republic', code: 'DO'},
                    {name: 'Ecuador', code: 'EC'},
                    {name: 'Egypt', code: 'EG'},
                    {name: 'El Salvador', code: 'SV'},
                    {name: 'Equatorial Guinea', code: 'GQ'},
                    {name: 'Eritrea', code: 'ER'},
                    {name: 'Estonia', code: 'EE'},
                    {name: 'Ethiopia', code: 'ET'},
                    {name: 'Falkland Islands (Malvinas)', code: 'FK'},
                    {name: 'Faroe Islands', code: 'FO'},
                    {name: 'Fiji', code: 'FJ'},
                    {name: 'Finland', code: 'FI'},
                    {name: 'France', code: 'FR'},
                    {name: 'French Guiana', code: 'GF'},
                    {name: 'French Polynesia', code: 'PF'},
                    {name: 'French Southern Territories', code: 'TF'},
                    {name: 'Gabon', code: 'GA'},
                    {name: 'Gambia', code: 'GM'},
                    {name: 'Georgia', code: 'GE'},
                    {name: 'Germany', code: 'DE'},
                    {name: 'Ghana', code: 'GH'},
                    {name: 'Gibraltar', code: 'GI'},
                    {name: 'Greece', code: 'GR'},
                    {name: 'Greenland', code: 'GL'},
                    {name: 'Grenada', code: 'GD'},
                    {name: 'Guadeloupe', code: 'GP'},
                    {name: 'Guam', code: 'GU'},
                    {name: 'Guatemala', code: 'GT'},
                    {name: 'Guernsey', code: 'GG'},
                    {name: 'Guinea', code: 'GN'},
                    {name: 'Guinea-Bissau', code: 'GW'},
                    {name: 'Guyana', code: 'GY'},
                    {name: 'Haiti', code: 'HT'},
                    {name: 'Heard Island and Mcdonald Islands', code: 'HM'},
                    {name: 'Holy See (Vatican City State)', code: 'VA'},
                    {name: 'Honduras', code: 'HN'},
                    {name: 'Hong Kong', code: 'HK'},
                    {name: 'Hungary', code: 'HU'},
                    {name: 'Iceland', code: 'IS'},
                    {name: 'India', code: 'IN'},
                    {name: 'Indonesia', code: 'ID'},
                    {name: 'Iran, Islamic Republic Of', code: 'IR'},
                    {name: 'Iraq', code: 'IQ'},
                    {name: 'Ireland', code: 'IE'},
                    {name: 'Isle of Man', code: 'IM'},
                    {name: 'Israel', code: 'IL'},
                    {name: 'Italy', code: 'IT'},
                    {name: 'Jamaica', code: 'JM'},
                    {name: 'Japan', code: 'JP'},
                    {name: 'Jersey', code: 'JE'},
                    {name: 'Jordan', code: 'JO'},
                    {name: 'Kazakhstan', code: 'KZ'},
                    {name: 'Kenya', code: 'KE'},
                    {name: 'Kiribati', code: 'KI'},
                    {name: 'Korea, Democratic People\'S Republic of', code: 'KP'},
                    {name: 'Korea, Republic of', code: 'KR'},
                    {name: 'Kuwait', code: 'KW'},
                    {name: 'Kyrgyzstan', code: 'KG'},
                    {name: 'Lao People\'S Democratic Republic', code: 'LA'},
                    {name: 'Latvia', code: 'LV'},
                    {name: 'Lebanon', code: 'LB'},
                    {name: 'Lesotho', code: 'LS'},
                    {name: 'Liberia', code: 'LR'},
                    {name: 'Libyan Arab Jamahiriya', code: 'LY'},
                    {name: 'Liechtenstein', code: 'LI'},
                    {name: 'Lithuania', code: 'LT'},
                    {name: 'Luxembourg', code: 'LU'},
                    {name: 'Macao', code: 'MO'},
                    {name: 'Macedonia, The Former Yugoslav Republic of', code: 'MK'},
                    {name: 'Madagascar', code: 'MG'},
                    {name: 'Malawi', code: 'MW'},
                    {name: 'Malaysia', code: 'MY'},
                    {name: 'Maldives', code: 'MV'},
                    {name: 'Mali', code: 'ML'},
                    {name: 'Malta', code: 'MT'},
                    {name: 'Marshall Islands', code: 'MH'},
                    {name: 'Martinique', code: 'MQ'},
                    {name: 'Mauritania', code: 'MR'},
                    {name: 'Mauritius', code: 'MU'},
                    {name: 'Mayotte', code: 'YT'},
                    {name: 'Mexico', code: 'MX'},
                    {name: 'Micronesia, Federated States of', code: 'FM'},
                    {name: 'Moldova, Republic of', code: 'MD'},
                    {name: 'Monaco', code: 'MC'},
                    {name: 'Mongolia', code: 'MN'},
                    {name: 'Montserrat', code: 'MS'},
                    {name: 'Morocco', code: 'MA'},
                    {name: 'Mozambique', code: 'MZ'},
                    {name: 'Myanmar', code: 'MM'},
                    {name: 'Namibia', code: 'NA'},
                    {name: 'Nauru', code: 'NR'},
                    {name: 'Nepal', code: 'NP'},
                    {name: 'Netherlands', code: 'NL'},
                    {name: 'Netherlands Antilles', code: 'AN'},
                    {name: 'New Caledonia', code: 'NC'},
                    {name: 'New Zealand', code: 'NZ'},
                    {name: 'Nicaragua', code: 'NI'},
                    {name: 'Niger', code: 'NE'},
                    {name: 'Nigeria', code: 'NG'},
                    {name: 'Niue', code: 'NU'},
                    {name: 'Norfolk Island', code: 'NF'},
                    {name: 'Northern Mariana Islands', code: 'MP'},
                    {name: 'Norway', code: 'NO'},
                    {name: 'Oman', code: 'OM'},
                    {name: 'Pakistan', code: 'PK'},
                    {name: 'Palau', code: 'PW'},
                    {name: 'Palestinian Territory, Occupied', code: 'PS'},
                    {name: 'Panama', code: 'PA'},
                    {name: 'Papua New Guinea', code: 'PG'},
                    {name: 'Paraguay', code: 'PY'},
                    {name: 'Peru', code: 'PE'},
                    {name: 'Philippines', code: 'PH'},
                    {name: 'Pitcairn', code: 'PN'},
                    {name: 'Poland', code: 'PL'},
                    {name: 'Portugal', code: 'PT'},
                    {name: 'Puerto Rico', code: 'PR'},
                    {name: 'Qatar', code: 'QA'},
                    {name: 'Reunion', code: 'RE'},
                    {name: 'Romania', code: 'RO'},
                    {name: 'Russian Federation', code: 'RU'},
                    {name: 'RWANDA', code: 'RW'},
                    {name: 'Saint Helena', code: 'SH'},
                    {name: 'Saint Kitts and Nevis', code: 'KN'},
                    {name: 'Saint Lucia', code: 'LC'},
                    {name: 'Saint Pierre and Miquelon', code: 'PM'},
                    {name: 'Saint Vincent and the Grenadines', code: 'VC'},
                    {name: 'Samoa', code: 'WS'},
                    {name: 'San Marino', code: 'SM'},
                    {name: 'Sao Tome and Principe', code: 'ST'},
                    {name: 'Saudi Arabia', code: 'SA'},
                    {name: 'Senegal', code: 'SN'},
                    {name: 'Serbia and Montenegro', code: 'CS'},
                    {name: 'Seychelles', code: 'SC'},
                    {name: 'Sierra Leone', code: 'SL'},
                    {name: 'Singapore', code: 'SG'},
                    {name: 'Slovakia', code: 'SK'},
                    {name: 'Slovenia', code: 'SI'},
                    {name: 'Solomon Islands', code: 'SB'},
                    {name: 'Somalia', code: 'SO'},
                    {name: 'South Africa', code: 'ZA'},
                    {name: 'South Georgia and the South Sandwich Islands', code: 'GS'},
                    {name: 'Spain', code: 'ES'},
                    {name: 'Sri Lanka', code: 'LK'},
                    {name: 'Sudan', code: 'SD'},
                    {name: 'Suriname', code: 'SR'},
                    {name: 'Svalbard and Jan Mayen', code: 'SJ'},
                    {name: 'Swaziland', code: 'SZ'},
                    {name: 'Sweden', code: 'SE'},
                    {name: 'Switzerland', code: 'CH'},
                    {name: 'Syrian Arab Republic', code: 'SY'},
                    {name: 'Taiwan, Province of China', code: 'TW'},
                    {name: 'Tajikistan', code: 'TJ'},
                    {name: 'Tanzania, United Republic of', code: 'TZ'},
                    {name: 'Thailand', code: 'TH'},
                    {name: 'Timor-Leste', code: 'TL'},
                    {name: 'Togo', code: 'TG'},
                    {name: 'Tokelau', code: 'TK'},
                    {name: 'Tonga', code: 'TO'},
                    {name: 'Trinidad and Tobago', code: 'TT'},
                    {name: 'Tunisia', code: 'TN'},
                    {name: 'Turkey', code: 'TR'},
                    {name: 'Turkmenistan', code: 'TM'},
                    {name: 'Turks and Caicos Islands', code: 'TC'},
                    {name: 'Tuvalu', code: 'TV'},
                    {name: 'Uganda', code: 'UG'},
                    {name: 'Ukraine', code: 'UA'},
                    {name: 'United Arab Emirates', code: 'AE'},
                    {name: 'United Kingdom', code: 'GB'},
                    {name: 'United States', code: 'US'},
                    {name: 'United States Minor Outlying Islands', code: 'UM'},
                    {name: 'Uruguay', code: 'UY'},
                    {name: 'Uzbekistan', code: 'UZ'},
                    {name: 'Vanuatu', code: 'VU'},
                    {name: 'Venezuela', code: 'VE'},
                    {name: 'Viet Nam', code: 'VN'},
                    {name: 'Virgin Islands, British', code: 'VG'},
                    {name: 'Virgin Islands, U.S.', code: 'VI'},
                    {name: 'Wallis and Futuna', code: 'WF'},
                    {name: 'Western Sahara', code: 'EH'},
                    {name: 'Yemen', code: 'YE'},
                    {name: 'Zambia', code: 'ZM'},
                    {name: 'Zimbabwe', code: 'ZW'}
                ];



                $scope.states = {
                    "IN": { "AP": "Andhra Pradesh","AR": "Arunachal Pradesh", "AS": "Assam", "BR": "Bihar",  "CG": "Chhattisgarh", "Chandigarh": "Chandigarh", "DN": "Dadra and Nagar Haveli", "DD": "Daman and Diu", "DL": "Delhi", "GA": "Goa", "GJ": "Gujarat", "HR": "Haryana","HP": "Himachal Pradesh", "JK": "Jammu and Kashmir", "JH": "Jharkhand", "KA": "Karnataka", "KL": "Kerala", "MP": "Madhya Pradesh", "MH": "Maharashtra", "MN": "Manipur",  "ML": "Meghalaya","MZ": "Mizoram",  "NL": "Nagaland","OR": "Orissa", "PB": "Punjab", "PY": "Pondicherry",  "RJ": "Rajasthan", "SK": "Sikkim","TN": "Tamil Nadu","TR": "Tripura","UP": "Uttar Pradesh", "UK": "Uttarakhand", "WB": "West Bengal"} 

//                  ,
//                    'AU': {'New South Wales': ['Sydney'], 'Victoria': ['Melbourne'] }
                };
                
                $scope.GetState = function () {
                   // console.log($scope.states[$scope.country]);
                    var option = '';
                    var html = '<select class="form-control" ng-init="state ='+'HR'+'" ng-model="state" name="state" id="state">';
                    angular.forEach($scope.states[$scope.country], function (value, key) {
                        //console.log(value + ": --  " + key);
                        if(key == 'HR'){
                            option += '<option value="' + key + '" selected>' + value + '</option>'; 
                        }else{
                             option += '<option value="' + key + '">' + value + '</option>';
                        }
                       
                    });

                    if (option != '' && $scope.country !== undefined) {
                        html = html + option + '</select>';
                    } else {
                        html = '<input type="text" class="form-control" name="state" ng-init="state ='+'HR'+'" ng-model="state" id="state" value="" placeholder="State" required>';
                    }
                    return  $scope.htmlAdText = $sce.trustAsHtml(html);
                };
                
                
                
            }
        ]).controller('appointmentController', ['$scope','$http', '$sce','$filter',function ($scope,$http, $sce,$filter) {
                
                
                $http.get(BASEURL + "admin/doctor/slotTime/2").then(
                        function (response) {
                            
                             $scope.timeTableDoc = response.data;
                            
//                              angular.forEach(response.data, function (value, key) {
//                                      console.log(value + ": ===> " + key);
//                            });
                            
                            
                   //         var html_appointment = '<div id="timeTable">';
                   // angular.forEach(response.data, function (value, key) {
                   //     html_appointment += "<p ng-show = 'IsVisible8' class='apt-active' id='aptm_" + value.id + "'>" + value.shift +'  '+ value.slot + "</p>";
                   // });

                   // html_appointment += '</div>';
                    
                   // $scope.timeTable = $sce.trustAsHtml(html_appointment);
                    
                   // console.log(html_appointment);
                    //alert(html_appointment);
                            
                            
                            
                });
                
             // var fff =   $(this).validate();
             //   alert(fff);
                
               console.log('====');
            
            $scope.today = new Date();
            $scope.currentTime = $filter('date')(new Date(), 'hh:mm:ss a');
                 
                
                 
//                 var timeNow = new Date().getTime();
//                 var twoHoursIntoFuture = new Date(timeNow + 1000 * 60 * 60 * 2);
//                 var timeNow = new Date(timeNow);
//                 if(timeNow < twoHoursIntoFuture){
//                     alert('lesss timeNow');
//                 }else{
//                     alert('!=');
//                 }
                 
                 
                 
                 
                 
            var responseRowData =    [{"id":"101","type":"1","shift":"MORNING","days":"Su","doctor_id":"2","hospital_id":"0","slot":"9:30:AM"},
                                {"id":"102","type":"1","shift":"MORNING","days":"Su","doctor_id":"2","hospital_id":"0","slot":"10:30:AM"},
                                {"id":"103","type":"1","shift":"MORNING","days":"Su","doctor_id":"2","hospital_id":"0","slot":"10:45:AM"},
                                {"id":"104","type":"1","shift":"MORNING","days":"Su","doctor_id":"2","hospital_id":"0","slot":"11:30:AM"},
                                {"id":"105","type":"1","shift":"AFTERNOON","days":"Su","doctor_id":"2","hospital_id":"0","slot":"1:15:PM"},
                                {"id":"106","type":"1","shift":"AFTERNOON","days":"Su","doctor_id":"2","hospital_id":"0","slot":"1:45:PM"},
                                {"id":"107","type":"1","shift":"EVENING","days":"Su","doctor_id":"2","hospital_id":"0","slot":"6:45:PM"},
                                {"id":"108","type":"1","shift":"NIGHT","days":"Su","doctor_id":"2","hospital_id":"0","slot":"10:45:PM"},
                                {"id":"109","type":"1","shift":"MORNING","days":"Mo","doctor_id":"2","hospital_id":"0","slot":"9:30:AM"},
                                {"id":"110","type":"1","shift":"MORNING","days":"Mo","doctor_id":"2","hospital_id":"0","slot":"10:00:AM"},
                                {"id":"111","type":"1","shift":"AFTERNOON","days":"Mo","doctor_id":"2","hospital_id":"0","slot":"2:45:PM"},
                                {"id":"112","type":"1","shift":"EVENING","days":"Mo","doctor_id":"2","hospital_id":"0","slot":"6:45:PM"},
                                {"id":"113","type":"1","shift":"EVENING","days":"Mo","doctor_id":"2","hospital_id":"0","slot":"7:15:PM"},
                                {"id":"114","type":"1","shift":"EVENING","days":"Mo","doctor_id":"2","hospital_id":"0","slot":"7:30:PM"},
                                {"id":"115","type":"1","shift":"MORNING","days":"Tu","doctor_id":"2","hospital_id":"0","slot":"9:30:AM"},
                                {"id":"116","type":"1","shift":"AFTERNOON","days":"Tu","doctor_id":"2","hospital_id":"0","slot":"1:15:PM"},
                                {"id":"117","type":"1","shift":"AFTERNOON","days":"Tu","doctor_id":"2","hospital_id":"0","slot":"1:30:PM"},
                                {"id":"118","type":"1","shift":"AFTERNOON","days":"Tu","doctor_id":"2","hospital_id":"0","slot":"1:45:PM"},
                                {"id":"119","type":"1","shift":"EVENING","days":"Tu","doctor_id":"2","hospital_id":"0","slot":"5:30:PM"},
                                {"id":"120","type":"1","shift":"EVENING","days":"Tu","doctor_id":"2","hospital_id":"0","slot":"5:45:PM"},
                                {"id":"121","type":"1","shift":"EVENING","days":"Tu","doctor_id":"2","hospital_id":"0","slot":"6:00:PM"},
                                {"id":"122","type":"1","shift":"NIGHT","days":"Tu","doctor_id":"2","hospital_id":"0","slot":"9:15:PM"},
                                {"id":"123","type":"1","shift":"MORNING","days":"We","doctor_id":"2","hospital_id":"0","slot":"9:30:AM"},
                                {"id":"124","type":"1","shift":"MORNING","days":"We","doctor_id":"2","hospital_id":"0","slot":"9:45:AM"},
                                {"id":"125","type":"1","shift":"MORNING","days":"We","doctor_id":"2","hospital_id":"0","slot":"10:00:AM"},
                                {"id":"126","type":"1","shift":"AFTERNOON","days":"We","doctor_id":"2","hospital_id":"0","slot":"11:45:AM"},
                                {"id":"127","type":"1","shift":"AFTERNOON","days":"We","doctor_id":"2","hospital_id":"0","slot":"12:45:PM"},
                                {"id":"128","type":"1","shift":"EVENING","days":"We","doctor_id":"2","hospital_id":"0","slot":"5:00:PM"},
                                {"id":"129","type":"1","shift":"MORNING","days":"Th","doctor_id":"2","hospital_id":"0","slot":"9:30:AM"},
                                {"id":"130","type":"1","shift":"MORNING","days":"Th","doctor_id":"2","hospital_id":"0","slot":"9:45:AM"},
                                {"id":"131","type":"1","shift":"MORNING","days":"Th","doctor_id":"2","hospital_id":"0","slot":"10:00:AM"},
                                {"id":"132","type":"1","shift":"AFTERNOON","days":"Th","doctor_id":"2","hospital_id":"0","slot":"11:45:AM"},
                                {"id":"133","type":"1","shift":"AFTERNOON","days":"Th","doctor_id":"2","hospital_id":"0","slot":"12:15:PM"},
                                {"id":"134","type":"1","shift":"EVENING","days":"Th","doctor_id":"2","hospital_id":"0","slot":"4:00:PM"},
                                {"id":"135","type":"1","shift":"EVENING","days":"Th","doctor_id":"2","hospital_id":"0","slot":"4:15:PM"},
                                {"id":"136","type":"1","shift":"NIGHT","days":"Th","doctor_id":"2","hospital_id":"0","slot":"7:45:PM"},
                                {"id":"137","type":"1","shift":"NIGHT","days":"Th","doctor_id":"2","hospital_id":"0","slot":"10:45:PM"},
                                {"id":"138","type":"1","shift":"MORNING","days":"Fr","doctor_id":"2","hospital_id":"0","slot":"9:30:AM"},
                                {"id":"139","type":"1","shift":"MORNING","days":"Sa","doctor_id":"2","hospital_id":"0","slot":"10:30:AM"},
                                {"id":"140","type":"1","shift":"AFTERNOON","days":"Sa","doctor_id":"2","hospital_id":"0","slot":"1:45:PM"},
                                {"id":"141","type":"1","shift":"AFTERNOON","days":"Sa","doctor_id":"2","hospital_id":"0","slot":"2:30:PM"},
                                {"id":"142","type":"1","shift":"EVENING","days":"Sa","doctor_id":"2","hospital_id":"0","slot":"5:30:PM"},
                                {"id":"143","type":"1","shift":"EVENING","days":"Sa","doctor_id":"2","hospital_id":"0","slot":"5:45:PM"},
                                {"id":"144","type":"1","shift":"EVENING","days":"Sa","doctor_id":"2","hospital_id":"0","slot":"6:00:PM"},
                                {"id":"145","type":"1","shift":"NIGHT","days":"Sa","doctor_id":"2","hospital_id":"0","slot":"9:15:PM"}
                            ];
                 
                 
                 
                 
                  
                 var html_appointment = '<ul class="apt">';
                    angular.forEach(responseRowData, function (value, key) {
                        html_appointment += "<li ng-show = 'IsVisible8' class='apt-active' id='aptm_" + value.id + "'>" + value.shift +'  '+ value.slot + "</li>";
                    });

                    html_appointment += '</ul>';

                 
               //  alert(html_appointment);
                 
                 
                  $scope.Getappoinment = function () {
                      console.log(html_appointment);
                  return  $scope.apt = $sce.trustAsHtml(html_appointment);
              }
                 
                 
                 
                 
                 
                 
                 //$scope.IsVisible = false;
                 var clickCounter = 1;
                 
                 
               /********Default Case ********/  
                 
                $scope.IsVisible1 = true;
                $scope.IsVisible2 = true;
                $scope.IsVisible3 = true;
                $scope.IsVisible4 = false;
                $scope.IsVisible5 = false;
                $scope.IsVisible6 = false;
                $scope.IsVisible7 = false;
                $scope.IsVisible8 = false;
                $scope.IsVisible9 = false;
                $scope.next = true;
                $scope.privious = false;
             /********End here ********/ 
                
               var doctor_id = angular.element('#appointmentTime').val(); 
               // alert($scope.appointmentTime);
            
            $scope.ShowHide = function () {
                //If DIV is visible it will be hidden and vice versa.
                //$scope.IsVisible = $scope.IsVisible ? false : true;
                if(clickCounter < 3){
                     clickCounter = clickCounter +1;
                }
               
                 if (clickCounter == 1) {
                    $scope.IsVisible1 = true;
                    $scope.IsVisible2 = true;
                    $scope.IsVisible3 = true;
                    $scope.IsVisible4 = false;
                    $scope.IsVisible5 = false;
                    $scope.IsVisible6 = false;
                    $scope.IsVisible7 = false;
                    $scope.IsVisible8 = false;
                    $scope.IsVisible9 = false;
                    // hide scope
                    $scope.next = true;
                    $scope.privious = false;

                }

                if (clickCounter == 2) {
                    $scope.IsVisible1 = false;
                    $scope.IsVisible2 = false;
                    $scope.IsVisible3 = false;
                    $scope.IsVisible4 = true;
                    $scope.IsVisible5 = true;
                    $scope.IsVisible6 = true;
                    $scope.IsVisible7 = false;
                    $scope.IsVisible8 = false;
                    $scope.IsVisible9 = false;
                    // hide scope
                    $scope.next = true;
                    $scope.privious = true;
                }


                if (clickCounter == 3) {
                    $scope.IsVisible1 = false;
                    $scope.IsVisible2 = false;
                    $scope.IsVisible3 = false;
                    $scope.IsVisible4 = false;
                    $scope.IsVisible5 = false;
                    $scope.IsVisible6 = false;
                    $scope.IsVisible7 = true;
                    $scope.IsVisible8 = true;
                    $scope.IsVisible9 = true;
                    // hide scope
                    $scope.next = false;
                    $scope.privious = true;
                }

                
              

        }
        
            $scope.ShowHideMinuse = function () {
                //If DIV is visible it will be hidden and vice versa.
                //$scope.IsVisible = $scope.IsVisible ? false : true;
                if(clickCounter > 1){
                   clickCounter = clickCounter -1; 
                } 
                //alert(clickCounter);
                if (clickCounter == 1) {
                    $scope.IsVisible1 = true;
                    $scope.IsVisible2 = true;
                    $scope.IsVisible3 = true;
                    $scope.IsVisible4 = false;
                    $scope.IsVisible5 = false;
                    $scope.IsVisible6 = false;
                    $scope.IsVisible7 = false;
                    $scope.IsVisible8 = false;
                    $scope.IsVisible9 = false;
                    // hide scope
                    $scope.next = true;
                    $scope.privious = false;

                }

                if (clickCounter == 2) {
                    $scope.IsVisible1 = false;
                    $scope.IsVisible2 = false;
                    $scope.IsVisible3 = false;
                    $scope.IsVisible4 = true;
                    $scope.IsVisible5 = true;
                    $scope.IsVisible6 = true;
                    $scope.IsVisible7 = false;
                    $scope.IsVisible8 = false;
                    $scope.IsVisible9 = false;
                    // hide scope
                    $scope.next = true;
                    $scope.privious = true;
                }


                if (clickCounter == 3) {
                    $scope.IsVisible1 = false;
                    $scope.IsVisible2 = false;
                    $scope.IsVisible3 = false;
                    $scope.IsVisible4 = false;
                    $scope.IsVisible5 = false;
                    $scope.IsVisible6 = false;
                    $scope.IsVisible7 = true;
                    $scope.IsVisible8 = true;
                    $scope.IsVisible9 = true;
                    // hide scope
                    $scope.next = false;
                    $scope.privious = true;
                }


                            

        }
            
            
                 
                
                  
                 //  Appointment
                 
                 console.log($scope.date);
                

//                $scope.appointmentList = [
//                    {name: 'Afghanistan', code: 'AF'},
//                    {name: 'Zimbabwe', code: 'ZW'}
//                ];
                
            }
        ]);

