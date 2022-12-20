@extends('layouts.app', ['page' => __('Racha Select date Turn over'), 'pageSlug' => 'rachaSelectTodes'])

@section('content')
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">

      

        <div class="places-buttons">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <h2 class="card-title">
                STATS RACHA
               
              </h2>
            </div>
          </div>

          

          <form action = "rachaSelectdate" method = "GET">
           
                
                  <div class = "container">
                      <div class = "row">
                        <div class = "form-group row col-lg-12 ml-auto mr-auto">
                           
                        <label  class = "col-form-label col-sm-2 " >Date start</label>
                                <div class = "col-sm-3">
                                  <input type = "date" class = "form-control input-sm" name = "from_date"/>
                                </div> 
                        <label class = "col-form-label col-sm-2">Date end</label>
                                <div class = "col-sm-3">
                                  <input type = "date" class = "form-control input-sm" name = "to_date" />
                                </div> 
                            <div class = "col-sm-2">
                              <button Type = "submit" class = "btn btn-primary" > search</button>
                            </div>
            
                        </div>
                      </div>
                  </div>
          </form>

        
                <?php
               
               if (isset($_GET['from_date']) && isset($_GET['to_date']))
                {
                    $from_Date = $_GET['from_date'];
                    $to_Date = $_GET['to_date'];
                }
                ?>
         

 
          <div class="row">
            <div class="col-lg-12 ml-auto mr-auto">
            <div class="row">
                <div class="col-md-4">
                <a  href="{{ route('pages.racha1day')  }}" class="btn btn-primary btn-block">ย้อนหลัง 1 วัน</a>
                </div>
                <div class="col-md-4">
                <a  href="{{ route('pages.racha7day')  }}" class="btn btn-primary btn-block">ย้อนหลัง 7 วัน</a>
                </div>
                <div class="col-md-4">
                  <a  href="{{ route('pages.racha30day')  }}" class="btn btn-primary btn-block">ย้อนหลัง 30 วัน</a>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">

    
      <div class="dropdown show">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" align="right">
    เรียงข้อมูลผลลัพธ์
  </a>
  <div class="dropdown-menu" >
    <a class="dropdown-item" href="{{ route('pages.rachaSelectTodes')  }}">Turn over มากไปน้อย</a>
    <a class="dropdown-item" href="{{ route('pages.rachaSelectToasc')  }}">Turn over น้อยไปมาก</a>
    <a class="dropdown-item" href="{{ route('pages.rachaSelectWindes')  }}">Win มากไปน้อย</a>
    <a class="dropdown-item" href="{{ route('pages.rachaSelectWinasc')  }}">Win น้อยไปมาก</a>
    <a class="dropdown-item" href="{{ route('pages.rachaSelectLossdes')  }}">Loss มากไปน้อย</a>
    <a class="dropdown-item" href="{{ route('pages.rachaSelectLossasc')  }}">Loss น้อยไปมาก</a>
    <a class="dropdown-item" href="{{ route('pages.rachaSelectTtdes')  }}">Total มากไปน้อย</a>
    <a class="dropdown-item" href="{{ route('pages.rachaSelectTtasc')  }}">Total น้อยไปมาก</a>
   
  </div>
</div>

        <div class="places-buttons">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <h4 class="card-title">
                STATS ย้อนหลัง 
              </h4>
              
            </div>
            
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><font color="#FFF">Name Games</th>
              <th scope="col"><font color="#FFF">Turn Over </th>
              <th scope="col"><font color="#FFF">Win</th>
              <th scope="col"><font color="#FFF">Lost</th>
              <th scope="col"><font color="#FFF">Total</th>
            </tr>
          </thead>
          <tbody>
            
          <?php
                   
                 
                    $fromDate = '2022-09-10';
                    $toDate = '2022-09-18';
                    $curl = curl_init();
                    
                    $postData = [
                        "key" => "RACHA99STATSa379441bb6d145ecfc65d7b988",
                        "agenttoken"=> "allracha",
                        "type" => 1,
                        "day" => -2,
                        "start" =>   $from_Date,
                        "end" =>   $to_Date
                    ];

                    curl_setopt_array($curl, array(
                      CURLOPT_URL => 'https://api.slotracha.vip/stats/gamestats',
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => '',
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 0,
                      CURLOPT_FOLLOWLOCATION => true,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => 'POST',
                      CURLOPT_POSTFIELDS => json_encode($postData),
                      CURLOPT_HTTPHEADER => array(
                        'x-api-slotracha: 1a09e4a379441bb6d145ecfc65d7b9c5',
                        'Content-Type: application/json',
                        'Cookie: connect.sid=s%3AYXAYjFzX9oWx4yRms0O8sVAOZKyYKS_K.M6kgXnS15yMlqtQR5BkOxko9laOgL0tXoNJwfdt9V24'
                      ),
                    ));

                    $response = curl_exec($curl);
                    $obj = json_decode($response,true);
                    
                    $html = "";
                    for ($i = 0; $i < count($obj['data']) ; $i++) {
                      
                       $idgame = number_format($obj['data'][$i]['idgame']);
                       $turn = number_format($obj['data'][$i]['bet'], 2);
                       $win = number_format($obj['data'][$i]['win'], 2); 
                       $loss = number_format($obj['data'][$i]['loss'], 2); 
                       $total = $obj['data'][$i]['win'] - $obj['data'][$i]['loss'] ;
                       $total2 = number_format($total, 2);
                    
                       if ($total > 0 )
                       {
                        switch ($idgame) {
                          case 1:
                          $namegame = 'ไพ่แคง 3d';
                          break;
                          case 2:
                          $namegame = 'ป้อกเด้ง 9k';
                          break;
                          case 3:
                          $namegame = 'SLOT 3D';
                          break;
                          case 4:
                          $namegame = 'วันเดอร์ไมน์';
                          break;
                          case 6:
                          $namegame = 'สเปชแอดเวนเจอร์';
                          break;
                          case 7:
                          $namegame = 'อควาเวิล์ด';
                          break;
                          case 8:
                          $namegame = 'ซัมเมอร์บีช';
                          break;
                          case 9:
                          $namegame = 'ฮาโลวีน';
                          break;
                          case 10:
                          $namegame = 'ผลไม้';
                          break;
                          case 16:
                          $namegame = 'จอมเวทย์';
                          break;
                          case 17:
                          $namegame = 'ทุ่งนา';
                          break;
                          case 18:
                          $namegame = 'คาวบอย';
                          break;
                          case 19:
                          $namegame = 'ฟาโรห์';
                          break;
                          case 20:
                          $namegame = 'เซอร์คัส';
                          break;
                          case 21:
                          $namegame = 'พุซซี่';
                          break;
                          case 22:
                          $namegame = 'ผีถ้วยแก้ว';
                          break;
                          case 23:
                          $namegame = 'เซ็กซี่';
                          break;
                          case 24:
                          $namegame = 'พีจีแชมเปี้ยน';
                          break;
                          case 25:
                          $namegame = 'โจ๊กเกอร์';
                          break;
                          case 26:
                          $namegame = 'XO ซานต้า';
                          break;
                          case 27:
                          $namegame = 'แฟนตาซี';
                          break;
                          case 28:
                          $namegame = 'ซูชิ';
                          break;
                          case 29:
                          $namegame = 'สวีทแลนด์';
                          break;
                          case 30:
                          $namegame = 'ขุมทรัพย์เทมพล่า';
                          break;
                          case 31:
                          $namegame = 'ลอยกระทง';
                          break;
                          case 32:
                          $namegame = 'แดนขนมหวาน';
                          break;
                          case 33:
                          $namegame = 'ไอซ์เอจ';
                          break;
                          case 34:
                          $namegame = 'เวสเทิร์นบาร์';
                          break;
                          case 35:
                          $namegame = 'สเปชแอดเวนเจอร์';
                          break;
                          case 36:
                          $namegame = 'ขุมทรัพย์ราชัน';
                          break;
                          case 37:
                          $namegame = 'นีออนซิตี้';
                          break;
                          case 38:
                          $namegame = 'มวยไทย';
                          break;
                          case 39:
                          $namegame = 'Gclub';
                          break;
                          case 40:
                          $namegame = 'คลาสสิค';
                          break;
                          case 41:
                          $namegame = 'กามเทพสื่อรัก';
                          break;
                          case 42:
                          $namegame = 'แคตตี้ฟาร์ม';
                          break;
                          case 43:
                          $namegame = 'Ghost Haunt';
                          break;
                          case 44:
                          $namegame = 'Space Shooter';
                          break;
                          case 46:
                          $namegame = 'Ultimate Racing';
                          break;
                          case 47:
                          $namegame = 'Farm Ville';
                          break;
                          case 48:
                          $namegame = 'Gem Collector';
                          break;
                          case 49:
                          $namegame = 'TankBattle';
                          break;
                         }
  
                         $html .= '<tr>
                         <th><font color="#FFF">'.$namegame.'</th>
                         <th><font color="#ff8200">'.$turn.'</th>
                         <th><font color="#16F529">'.$win.'</th>
                         <th><font color=" #e60000">'.$loss.'</th>
                         <th><font color=" #16F529">'.$total2.'</th>
                         
                          </tr>';
                       } else {
                        switch ($idgame) {
                          case 1:
                          $namegame = 'ไพ่แคง 3d';
                          break;
                          case 2:
                          $namegame = 'ป้อกเด้ง 9k';
                          break;
                          case 3:
                          $namegame = 'SLOT 3D';
                          break;
                          case 4:
                          $namegame = 'วันเดอร์ไมน์';
                          break;
                          case 6:
                          $namegame = 'สเปชแอดเวนเจอร์';
                          break;
                          case 7:
                          $namegame = 'อควาเวิล์ด';
                          break;
                          case 8:
                          $namegame = 'ซัมเมอร์บีช';
                          break;
                          case 9:
                          $namegame = 'ฮาโลวีน';
                          break;
                          case 10:
                          $namegame = 'ผลไม้';
                          break;
                          case 16:
                          $namegame = 'จอมเวทย์';
                          break;
                          case 17:
                          $namegame = 'ทุ่งนา';
                          break;
                          case 18:
                          $namegame = 'คาวบอย';
                          break;
                          case 19:
                          $namegame = 'ฟาโรห์';
                          break;
                          case 20:
                          $namegame = 'เซอร์คัส';
                          break;
                          case 21:
                          $namegame = 'พุซซี่';
                          break;
                          case 22:
                          $namegame = 'ผีถ้วยแก้ว';
                          break;
                          case 23:
                          $namegame = 'เซ็กซี่';
                          break;
                          case 24:
                          $namegame = 'พีจีแชมเปี้ยน';
                          break;
                          case 25:
                          $namegame = 'โจ๊กเกอร์';
                          break;
                          case 26:
                          $namegame = 'XO ซานต้า';
                          break;
                          case 27:
                          $namegame = 'แฟนตาซี';
                          break;
                          case 28:
                          $namegame = 'ซูชิ';
                          break;
                          case 29:
                          $namegame = 'สวีทแลนด์';
                          break;
                          case 30:
                          $namegame = 'ขุมทรัพย์เทมพล่า';
                          break;
                          case 31:
                          $namegame = 'ลอยกระทง';
                          break;
                          case 32:
                          $namegame = 'แดนขนมหวาน';
                          break;
                          case 33:
                          $namegame = 'ไอซ์เอจ';
                          break;
                          case 34:
                          $namegame = 'เวสเทิร์นบาร์';
                          break;
                          case 35:
                          $namegame = 'สเปชแอดเวนเจอร์';
                          break;
                          case 36:
                          $namegame = 'ขุมทรัพย์ราชัน';
                          break;
                          case 37:
                          $namegame = 'นีออนซิตี้';
                          break;
                          case 38:
                          $namegame = 'มวยไทย';
                          break;
                          case 39:
                          $namegame = 'Gclub';
                          break;
                          case 40:
                          $namegame = 'คลาสสิค';
                          break;
                          case 41:
                          $namegame = 'กามเทพสื่อรัก';
                          break;
                          case 42:
                          $namegame = 'แคตตี้ฟาร์ม';
                          break;
                          case 43:
                          $namegame = 'Ghost Haunt';
                          break;
                          case 44:
                          $namegame = 'Space Shooter';
                          break;
                          case 46:
                          $namegame = 'Ultimate Racing';
                          break;
                          case 47:
                          $namegame = 'Farm Ville';
                          break;
                          case 48:
                          $namegame = 'Gem Collector';
                          break;
                          case 49:
                          $namegame = 'TankBattle';
                          break;
                         }
  
                         $html .= '<tr>
                         <th><font color="#FFF">'.$namegame.'</th>
                         <th><font color="#ff8200">'.$turn.'</th>
                         <th><font color="#16F529">'.$win.'</th>
                         <th><font color=" #e60000">'.$loss.'</th>
                         <th><font color=" #e60000">'.$total2.'</th>
                         
                          </tr>';
                       }  
                    }
                    echo $html;
                    
                    
        
                    curl_close($curl);
                   
                
                    
                    ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
@endsection
