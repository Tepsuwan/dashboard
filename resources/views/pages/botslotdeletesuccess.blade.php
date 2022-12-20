@extends('layouts.app', ['page' => __('Bot slot delete success'), 'pageSlug' => 'botslotdeletesucess'])

@section('content')


<div class="col-md-9 ml-auto mr-auto">
    <div class="card">
      <div class="card-body">
        <div class="places-buttons">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <h2 class="card-title">
                Delete brand 
              </h2>
            </div>
          </div>

                
                  
                 <?php
                   if (isset($_GET['brand'])) {
                       $brand = $_GET['brand'];  
                   }
                 ?>
                 <?php
                         $postData = [
                            "key"=> "RACHA99STATSa379441bb6d145ecfc65d7b988",
                                "brand"=> $brand,
                               
                        ];

                        $curl = curl_init();

                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'https://api.slotracha.vip/stats/botslotdelete',
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
                            'Cookie: connect.sid=s%3AXyk9g5YlswKa6p5N1rncwOS_JNcGS7bH.5WL3Om7cx3Shvr4p9ED7xDrxmZ6afq8PjIw%2FvvindaE'
                          ),
                        ));
                        $response = curl_exec($curl);
                        curl_close($curl);
                        
                       
                ?>
                        
                        <h2 class="card-title">
                            Delete brand {{$brand}} success.
                        </h2>

                        <a  href="{{ route('pages.botslot')  }}" class="btn btn-success btn-lg mb-1 ">Back</a>
            
        </div>
      </div>
    </div>
  </div>
       
@endsection
