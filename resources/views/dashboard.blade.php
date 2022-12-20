@extends('layouts.app', ['page' => __('dashboard'), 'pageSlug' => 'dashboard'])


@section('content')

    <div class = "row">
    <div class="col-lg-6 col-md-12">
          <div class="card ">
            
                <div class="card-header">
                    <h1 class="card-title">ผู้เล่นออนไลน์</h1>
                </div>
                <div class="card-body">
               
                        
                     
                        <div class="row ">
                            <table class="table">
                            <thead class=" text-primary">
                            
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
    <div class="col-lg-6 col-md-12">
          <div class="card ">
            
                <div class="card-header">
                    <h1 class="card-title">สล็อต - คำนวน</h1>
                </div>
                <div class="card-body">
               
                <?php

                        $curl = curl_init();

                        curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://rachamaster.com/GETWAITTRANS',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        ));

                        $response = curl_exec($curl);
                        $obj = json_decode($response,true);

                        $html = "";
                        
                        $sc = number_format($obj['all']);

                        $html .= '
                        <font color="#FFF">จำนวน trans ที่รอคำนวน : 
                        <font color="#FFF">'.$sc.'
                        ';

                        echo $html;
                       
                        curl_close($curl);
                        
                        // echo $sc;
                        //echo $response;
                       

                ?>
                    
         
                </div>                     
            </div>
    </div>  

 
                                        </div>                                        
                                                  <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total Shipments</h5>
                            <h2 class="card-title">Performance</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    
                                    <label class="btn btn-sm btn-primary btn-simple active" id = "0">
                                        <input type="radio" name="options" checked>
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-single-02"></i>
                                        </span>
                                    </label>
                                    
                                    <label class="btn btn-sm btn-primary btn-simple" id="1">
                                        <input type="radio" class="d-none d-sm-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-gift-2"></i>
                                        </span>
                                    </label>
                                    
                                    <label class="btn btn-sm btn-primary btn-simple" id="2">
                                        <input type="radio" class="d-none" name="options">
                                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                                        <span class="d-block d-sm-none">
                                            <i class="tim-icons icon-tap-02"></i>
                                        </span>
                                    </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Total Shipments</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLinePurple"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Daily Sales</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="CountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Completed Tasks</h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLineGreen"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection


@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
