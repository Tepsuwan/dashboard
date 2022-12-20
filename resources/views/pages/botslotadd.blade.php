@extends('layouts.app', ['page' => __('Bot slot add'), 'pageSlug' => 'botslotadd'])

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

                <form action = "botslotaddsuccess" method = "GET">
                  
                        <div class = "row">
                            <div class="form-outline col-md-6 mb-4 ">
                            <p class="form-label text-left">Brand</p>
                            <input type="text" class="form-control" name = "brand" autocomplete="off" required/>
                            </div>
                            
                            <div class="col-md-3 mb-4">
                            <p class="form-label text-left" >Activate</p>
                                <select id = "activate" name = "activate" class="select" >
                                <option value="0" disabled>Select activate</option>
                                <option value="0" >0</option>
                                <option value="1" >1</option>
                              
                                </select>
                                

                            </div>

                            <div class="form-outline col-md-3 mb-4 ">
                            <p class="form-label text-left">Chkinterval</p>
                            <input type="text" class="form-control" name = "chkinterval" autocomplete="off" required/>
                            </div>
                        </div>

                        <div class = "row">
                        <div class="col-md-3 mb-4">
                            <p class="form-label text-left" >Calperiod</p>
                                <select id = "calperiod" name = "calperiod" class="select" >
                                <option value="H0" disabled>Select calperiod </option>
                                <option value="H1" >H1</option>
                                <option value="H2" >H2</option>
                                <option value="H3" >H3</option>
                                <option value="H4" >H4</option>
                                <option value="H5" >H5</option>
                                <option value="H6" >H6</option>
                                <option value="H7" >H7</option>
                                <option value="H8" >H8</option>
                              
                                </select>
                                

                            </div>
                            
                            <div class="form-outline col-md-3 mb-4 ">
                            <p class="form-label text-left">Targetloss</p>
                            <input type="text" class="form-control" name = "targetloss" autocomplete="off" required/>
                            </div>

                            <div class="form-outline col-md-3 mb-4 ">
                            <p class="form-label text-left">Targetreturn</p>
                            <input type="text" class="form-control" name = "targetreturn" autocomplete="off" required/>
                            </div>

                            <div class="form-outline col-md-3 mb-4 ">
                            <p class="form-label text-left">Retuennow</p>
                            <input type="text" class="form-control" name = "returnnow" autocomplete="off" required/>
                            </div>

                           
                        </div>


                        <div class = "row">
                            <div class="col-md-2 mb-4">
                            <p class="form-label text-left" >rannon</p>
                                <select id = "activate" name = "rannon" class="select" >
                                <option value="0" disabled>Select </option>
                                <option value="0" >0</option>
                                <option value="1" >1</option>
                                </select>
                            </div>    
                            
                            <div class="col-md-2 mb-4">
                            <p class="form-label text-left" >rancon</p>
                                <select id = "activate" name = "rancon" class="select" >
                                <option value="0" disabled>Select </option>
                                <option value="0" >0</option>
                                <option value="1" >1</option>
                                </select>
                            </div>  

                            <div class="col-md-2 mb-4">
                            <p class="form-label text-left" >allnon</p>
                                <select id = "activate" name = "allnon" class="select" >
                                <option value="0" disabled>Select </option>
                                <option value="0" >0</option>
                                <option value="1" >1</option>
                                </select>
                            </div>  

                            <div class="col-md-2 mb-4">
                            <p class="form-label text-left" >allcon</p>
                                <select id = "activate" name = "allcon" class="select" >
                                <option value="0" disabled>Select</option>
                                <option value="0" >0</option>
                                <option value="1" >1</option>
                                </select>
                            </div>  

                            
                            <div class="col-md-2 mb-4">
                            <p class="form-label text-left" >time2active</p>
                                <select id = "time2active" name = "time2active" class="select" >
                                <option value="H0" disabled>Select</option>
                                <option value="H1" >H1</option>
                                <option value="H2" >H2</option>
                                <option value="H3" >H3</option>
                                <option value="H4" >H4</option>
                                <option value="H5" >H5</option>
                                <option value="H6" >H6</option>
                                <option value="H7" >H7</option>
                                <option value="H8" >H8</option>
                              
                                </select>
                                

                            </div>   

                                   

                                    <div class="form-outline col-md-2 mb-4 ">
                                        <p class="form-label text-left">Randompercent</p>
                                        <input type="text" class="form-control" name = "randompercent" autocomplete="off" required/>
                                    </div>

                            
                            
                         </div>

                         <div class = "row">
                            <div class="form-outline col-md-3 mb-4 ">
                            <p class="form-label text-left">Rancon min</p>
                            <input type="text" class="form-control" name = "rancon_min" autocomplete="off" required/>
                            </div>
                            
                            <div class="form-outline col-md-3 mb-4 ">
                            <p class="form-label text-left">Rancon max</p>
                            <input type="text" class="form-control" name = "rancon_max" autocomplete="off" required/>
                            </div>

                            <div class="form-outline col-md-3 mb-4 ">
                            <p class="form-label text-left">Allcon min</p>
                            <input type="text" class="form-control" name = "allcon_min" autocomplete="off" required/>
                            </div>

                            <div class="form-outline col-md-3 mb-4 ">
                            <p class="form-label text-left">Allcon max</p>
                            <input type="text" class="form-control" name = "allcon_max" autocomplete="off" required/>
                            </div>
                        </div>
                    
          
                        <form action = "rachaSelectdate" method = "GET">
           
                       
         
   
                    
                    
                        <button  type="submit" class="btn btn-success btn-lg mb-1 ">Submit</button>
                  
               
               
            </form>

        </div>
      </div>
    </div>
  </div>
@endsection
