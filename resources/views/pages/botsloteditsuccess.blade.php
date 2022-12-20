@extends('layouts.app', ['page' => __('Bot slot add edit'), 'pageSlug' => 'botsloteditsucess'])

@section('content')


<div class="col-md-9 ml-auto mr-auto">
    <div class="card">
      <div class="card-body">
        <div class="places-buttons">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <h2 class="card-title">
                Add brand 
              </h2>
            </div>
          </div>

                
                  
                 <?php
                   if (
                    isset($_GET['brand']) && 
                    isset($_GET['newbrand']) && 
                    isset($_GET['activate']) &&
                    isset($_GET['chkinterval']) &&
                    isset($_GET['calperiod'])&&
                    isset($_GET['targetloss']) &&
                    isset($_GET['targetreturn']) &&
                    isset($_GET['returnnow']) &&
                    isset($_GET['rannon']) &&
                    isset($_GET['rancon']) &&
                    isset($_GET['allnon']) &&
                    isset($_GET['allnon']) &&
                    isset($_GET['allcon']) &&
                    isset($_GET['rancon_min']) &&
                    isset($_GET['rancon_max'])&&
                    isset($_GET['allcon_min']) &&
                    isset($_GET['allcon_max'])&&
                    isset($_GET['time2active'])&&
                    isset($_GET['randompercent'])
                     
                   
                   
                   )
                   {
                       
                       $brand = $_GET['brand'];
                       $newbrand = $_GET['newbrand'];
                       $activate = $_GET['activate'];
                       $chkinterval = $_GET['chkinterval'];
                        $calperiod = $_GET['calperiod'];
                        $targetloss = $_GET['targetloss'];
                        $targetreturn = $_GET['targetreturn'];
                        $returnnow = $_GET['returnnow'];
                        $rannon = $_GET['rannon'];
                        $rancon = $_GET['rancon'];
                        $allnon = $_GET['allnon'];
                        $allcon = $_GET['allcon'];
                        $rancon_min = $_GET['rancon_min'];
                        $rancon_max = $_GET['rancon_max'];
                        $allcon_min = $_GET['allcon_min'];
                        $allcon_max = $_GET['allcon_max'];
                        $time2active = $_GET['time2active'];
                        $randompercent = $_GET['randompercent'];
                   }
                
                 

                
                 ?>

                        <?php

                              $postData = [
                                                        
                                "key" => "RACHA99STATSa379441bb6d145ecfc65d7b988",
                                "brand"=> $brand,
                                "newbrand"=> $newbrand,
                                "activate" => $activate,
                                "calperiod"=> $calperiod,
                                "chkinterval" =>$chkinterval,
                                "targetloss" =>  $targetloss,
                                "targetreturn" =>   $targetreturn,
                                "returnnow"=> $returnnow,
                                "rannon" => $rannon,
                                "rancon" =>$rancon,
                                "allnon" =>   $allnon,
                                "allcon" =>  $allcon,
                                "rancon_min"=> $rancon_min,
                                "rancon_max" => $rancon_max,
                                "allcon_min" => $allcon_min,
                                "allcon_max" =>  $allcon_max,
                                "time2activate" =>   $time2active,
                                "randompercent" =>   $randompercent,
                              ];

                        $curl = curl_init();

                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'https://api.slotracha.vip/stats/botslotedit',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS =>json_encode($postData),
                          CURLOPT_HTTPHEADER => array(
                            'x-api-slotracha: 1a09e4a379441bb6d145ecfc65d7b9c5',
                            'Content-Type: application/json',
                            'Cookie: connect.sid=s%3AqnHcJ4Z9479qzFzInh33ELkc9HSPdKbg.BfkBZABWSNTAeK8zjnB1OpoC9C%2Bp9hLnYf%2BPISqrrg4'
                          ),
                        ));

                        $response = curl_exec($curl);

                        curl_close($curl);
                      
                          
                        
                                                  ?>

                        <h2 class="card-title">
                            Edit brand {{$brand}} success.
                        </h2>
                        
                        <a  href="{{ route('pages.botslot')  }}" class="btn btn-success btn-lg mb-1 ">Back</a>
          
        </div>
      </div>
    </div>
  </div>
       
@endsection
