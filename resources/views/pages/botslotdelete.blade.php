@extends('layouts.app', ['page' => __('Bot slot delete'), 'pageSlug' => 'botslotdelete'])

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

                <form action = "botslotdeletesuccess" method = "GET">
                  
                       
                            <div class="form-outline col-md-6 mb-4 ">
                            <p class="form-label text-left">Brand</p>
                            <input type="text" class="form-control" name = "brand" autocomplete="off" />
                            </div>
                        
           
                       
         
   
                    
                    
                        <button  type="submit" class="btn btn-success btn-lg mb-1 ">Submit</button>
                  
               
               
            </form>

        </div>
      </div>
    </div>
  </div>
@endsection
