@extends('layouts.app', ['page' => __('BOT SLOT CONFIG'), 'pageSlug' => 'botslot'])


@section('content')



  <div class="col-md-12 ">
    
    <div class="card ">
      <div class="table-wrapper" style="width: auto">
  <div class="md-card-content" style="overflow-y: auto;">
      <div class="card-body ">
      
      <div class="col-md-6 ml-auto mr-auto text-center">
              <h1 class="card-title">
                Brand config
              </h1>
            </div>
                
                  <a  href="botslotadd" class="btn btn-success">Add Brand</a>
                
                  <div class="places-buttons ">
         
             
                
                        <div class="row ">
                            <table class="table">
                              <thead>
                                <tr>
                                <th scope="col">Brand</th>
                                <th scope="col">Activate</th>
                                <th scope="col">Chech interval</th>
                                <th scope="col">Calperiod</th>
                                <th scope="col">Target loss</th>
                                <th scope="col">Target return</th>
                                <th scope="col">Return now</th>
                                <th scope="col">Rannon</th>
                                <th scope="col">Rancon</th>
                                <th scope="col">Allnon</th>
                                <th scope="col">Allcon</th>
                                <th scope="col">Rancon min</th>
                                <th scope="col">Rancon max</th>
                                <th scope="col">Allcon min</th>
                                <th scope="col">Allcon max</th>
                                <th scope="col">Isparate percent</th>
                                <th scope="col">Time2actime</th>
                                <th scope="col">Random percent</th>
                               
                              
                                
                                </tr>
                              </thead>
                                  <tbody>
                                          <?php

                                              $curl = curl_init();

                                              curl_setopt_array($curl, array(
                                                CURLOPT_URL => 'https://api.slotracha.vip/stats/botslot',
                                                CURLOPT_RETURNTRANSFER => true,
                                                CURLOPT_ENCODING => '',
                                                CURLOPT_MAXREDIRS => 10,
                                                CURLOPT_TIMEOUT => 0,
                                                CURLOPT_FOLLOWLOCATION => true,
                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                CURLOPT_CUSTOMREQUEST => 'POST',
                                                CURLOPT_POSTFIELDS =>'{
                                                  "key": "RACHA99STATSa379441bb6d145ecfc65d7b988"
                                                
                                              }',
                                                CURLOPT_HTTPHEADER => array(
                                                  'x-api-slotracha: 1a09e4a379441bb6d145ecfc65d7b9c5',
                                                  'Content-Type: application/json',
                                                  'Cookie: connect.sid=s%3AgwtJA-W_uB9hq9YH2iWjzNLOt2C_SLDe.V3OchR%2FREdd6Pgxy%2FdRPbwZhbYqPXW%2BCcz%2F0PjYrmgU'
                                                ),
                                              ));

                                              $response = curl_exec($curl);
                                              $obj = json_decode($response, true);

                                              $html = "";
                                                  for ($i = 0; $i < count($obj['data']) ; $i++){
                                                    
                                                    $brand = ($obj['data'][$i]['brand']);
                                                    $activate = ($obj['data'][$i]['activate']);
                                                    $chkinterval = ($obj['data'][$i]['chkinterval']);
                                                    $calperiod = ($obj['data'][$i]['calperiod']);
                                                    $targetloss = ($obj['data'][$i]['targetloss']);
                                                    $targetreturn = ($obj['data'][$i]['targetreturn']);
                                                    $returnnow = ($obj['data'][$i]['returnnow']);
                                                    $rannon = ($obj['data'][$i]['rannon']);
                                                    $rancon = ($obj['data'][$i]['rancon']);
                                                    $allnon = ($obj['data'][$i]['allnon']);
                                                    $allcon = ($obj['data'][$i]['allcon']);
                                                    $rancon_min = ($obj['data'][$i]['rancon_min']);
                                                    $rancon_max = ($obj['data'][$i]['rancon_max']);
                                                    $allcon_min = ($obj['data'][$i]['allcon_min']);
                                                    $allcon_max = ($obj['data'][$i]['allcon_max']);
                                                    $isparatepercent = ($obj['data'][$i]['isparatepercent']);
                                                    $time2activate = ($obj['data'][$i]['time2activate']);
                                                    $randompercent = ($obj['data'][$i]['randompercent']);
                                                  

                                                    $html .= '<tr>
                                                            <th><font color="#FFF">'.$brand.'</th>
                                                            <th><font color="#FFF">'.$activate.'</th>
                                                            <th><font color="#FFF">'.$chkinterval.'</th>
                                                            <th><font color="#FFF">'.$calperiod.'</th>
                                                            <th><font color="#FFF">'.$targetloss.'</th>
                                                            <th><font color="#FFF">'.$targetreturn.'</th>
                                                            <th><font color="#FFF">'.$returnnow.'</th>
                                                            <th><font color="#FFF">'.$rannon.'</th>
                                                            <th><font color="#FFF">'.$rancon.'</th>
                                                            <th><font color="#FFF">'.$allnon.'</th>
                                                            <th><font color="#FFF">'.$allcon.'</th>
                                                            <th><font color="#FFF">'.$rancon_min.'</th>
                                                            <th><font color="#FFF">'.$rancon_max.'</th>
                                                            <th><font color="#FFF">'.$allcon_min.'</th>
                                                            <th><font color="#FFF">'.$allcon_max.'</th>
                                                            <th><font color="#FFF">'.$isparatepercent.'</th>
                                                            <th><font color="#FFF">'.$time2activate.'</th>
                                                            <th><font color="#FFF">'.$randompercent.'</th>
                                                            <th><a  href="botslotedit" class="btn btn-info type="button">Edit </a></th>
                                                            <th><a  href="botslotdelete" class="btn btn-danger type="button">Delete </a></th>
                                                            <tr>';
                                                    } 
                                                   
                                                    
                                                  
                                               
                                                    
                                              echo $html;
                                            
                                              curl_close($curl);
                                             
                                            
                                          ?>

                                  </tbody>
                                  
                            </table>
                       </div>
                </div>
              </div>
         </div>
    </div>
  </div>
                                                  </div>
                                                 

  
 
@endsection
