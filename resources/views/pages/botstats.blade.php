@extends('layouts.app', ['page' => __('BOT State'), 'pageSlug' => 'botstate'])


@section('content')



  <div class="col-md-12 ">
    
    <div class="card ">
      <div class="table-wrapper" style="width: auto">
  <div class="md-card-content" style="overflow-y: auto;">
      <div class="card-body ">
      
      <div class="col-md-6 ml-auto mr-auto text-center">
              <h1 class="card-title">
                ผู้เล่นออนไลน์
              </h1>
            </div>
                  <div class="places-buttons ">
                        <div class="row ">
                            <table class="table">
                              <thead>
                                <tr>
                                <th scope="col">Slot</th>
                                <th scope="col">Candy</th>
                                <th scope="col">Shooter</th>
                                <th scope="col">Racing</th>
                                <th scope="col">Puzzle</th>
                                <th scope="col">multiplayer</th>
                                <th scope="col">all</th>  
                                </tr>
                              </thead>
                                  <tbody>
                                  <?php

                                        $curl = curl_init();

                                        curl_setopt_array($curl, array(
                                          CURLOPT_URL => 'https://rachamaster.com/GETONLINE',
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
                                            'Content-Type: application/json'
                                          ),
                                        ));

                                        $response = curl_exec($curl);
                                        $obj = json_decode($response, true);

                                        $html = "";
                                        for ($i = 0; $i < 1 ; $i++){
                                          
                                          $slot = ($obj['slot']);
                                          $candy = ($obj['candy']);
                                          $shooter = ($obj['shooter']);
                                          $racing = ($obj['racing']);
                                          $puzzle = ($obj['puzzle']);
                                          $multiplayer = ($obj['multiplayer']);
                                          $all = ($obj['all']);
  
                                          $html .= '<tr>
                                                  <th><font color="#FFF">'.$slot.'</th>
                                                  <th><font color="#FFF">'.$candy.'</th>
                                                  <th><font color="#FFF">'.$shooter.'</th>
                                                  <th><font color="#FFF">'.$racing.'</th>
                                                  <th><font color="#FFF">'.$puzzle.'</th>
                                                  <th><font color="#FFF">'.$multiplayer.'</th>
                                                  <th><font color="#FFF">'.$all.'</th>
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
