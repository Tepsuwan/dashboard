<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function botstats()
    {
        return view('pages.botstats');
    }
    public function botslot()
    {
        return view('pages.botslot');
    }

    public function botslotadd()
    {
        return view('pages.botslotadd');
    }

    public function botslotaddsuccess()
    {
        return view('pages.botslotaddsuccess');
    }

    public function botslotedit()
    {
        return view('pages.botslotedit');
    }

    public function botsloteditsuccess()
    {
        return view('pages.botsloteditsuccess');
    }

    
    public function botslotdelete()
    {
        return view('pages.botslotdelete');
    }

    public function botslotdeletesuccess()
    {
        return view('pages.botslotdeletesuccess');
    }
    public function stats1day()
    {
        return view('pages.stats1day');
    }
    
    public function stats7day()
    {
        return view('pages.stats7day');
    }
   
    public function stats30day()
    {
        return view('pages.stats30day');
    }
    public function stats30daymax()
    {
        return view('pages.stats30day');
    }
    public function stats30daymin()
    {
        return view('pages.stats30day');
    }

    public function amb()
    {
        return view('pages.amb');
    }

    public function racha()
    {
        return view('pages.racha');
    }
    public function stats()
    {
        return view('pages.stats');
    }
    public function selectdate()
    {
       
        return view('pages.selectdate');
    }
    public function racha1day()
    {
        return view('pages.racha1day');
    }
    public function racha7day()
    {
        return view('pages.racha7day');
    }
    public function racha30day()
    {
        return view('pages.racha30day');
    }
    public function rachaSelectdate()
    {
        return view('pages.rachaSelectdate');
    }


        //เรียง racha 30 วัน
    public function racha30Toasc()
    {
        return view('pages.racha30Toasc');
    }
    public function racha30Todes()
    {
        return view('pages.racha30Todes');
    }
    public function racha30Winasc()
    {
        return view('pages.racha30Winasc');
    }
    public function racha30Windes()
    {
        return view('pages.racha30Windes');
    }
    public function racha30Lossasc()
    {
        return view('pages.racha30Lossasc');
    }
    public function racha30Lossdes()
    {
        return view('pages.racha30Lossdes');
    }
    public function racha30Ttasc()
    {
        return view('pages.racha30Ttasc');
    }
    public function racha30Ttdes()
    {
        return view('pages.racha30Ttdes');
    }

     //เรียง racha 7 วัน
     public function racha7Toasc()
     {
         return view('pages.racha7Toasc');
     }
     public function racha7Todes()
     {
         return view('pages.racha7Todes');
     }
     public function racha7Winasc()
     {
         return view('pages.racha7Winasc');
     }
     public function racha7Windes()
     {
         return view('pages.racha7Windes');
     }
     public function racha7Lossasc()
     {
         return view('pages.racha7Lossasc');
     }
     public function racha7Lossdes()
     {
         return view('pages.racha7Lossdes');
     }
     public function racha7Ttasc()
     {
         return view('pages.racha7Ttasc');
     }
     public function racha7Ttdes()
     {
         return view('pages.racha7Ttdes');
     }


      //เรียง racha 1 วัน
    public function racha1Toasc()
    {
        return view('pages.racha1Toasc');
    }
    public function racha1Todes()
    {
        return view('pages.racha1Todes');
    }
    public function racha1Winasc()
    {
        return view('pages.racha1Winasc');
    }
    public function racha1Windes()
    {
        return view('pages.racha1Windes');
    }
    public function racha1Lossasc()
    {
        return view('pages.racha1Lossasc');
    }
    public function racha1Lossdes()
    {
        return view('pages.racha1Lossdes');
    }
    public function racha1Ttasc()
    {
        return view('pages.racha1Ttasc');
    }
    public function racha1Ttdes()
    {
        return view('pages.racha1Ttdes');
    }


    //เรียง racha 0 วัน
    public function racha0Toasc()
    {
        return view('pages.racha0Toasc');
    }
    public function racha0Todes()
    {
        return view('pages.racha0Todes');
    }
    public function racha0Winasc()
    {
        return view('pages.racha0Winasc');
    }
    public function racha0Windes()
    {
        return view('pages.racha0Windes');
    }
    public function racha0Lossasc()
    {
        return view('pages.racha0Lossasc');
    }
    public function racha0Lossdes()
    {
        return view('pages.racha0Lossdes');
    }
    public function racha0Ttasc()
    {
        return view('pages.racha0Ttasc');
    }
    public function racha0Ttdes()
    {
        return view('pages.racha0Ttdes');
    }


    
      //เรียง racha select date
      public function rachaSelectToasc()
      {
          return view('pages.rachaSelectToasc');
      }
      public function rachaSelectTodes()
      {
          return view('pages.rachaSelectTodes');
      }
      public function rachaSelectWinasc()
      {
          return view('pages.rachaSelectWinasc');
      }
      public function rachaSelectWindes()
      {
          return view('pages.rachaSelectWindes');
      }
      public function rachaSelectLossasc()
      {
          return view('pages.rachaSelectLossasc');
      }
      public function rachaSelectLossdes()
      {
          return view('pages.rachaSelectLossdes');
      }
      public function rachaSelectTtasc()
      {
          return view('pages.rachaSelectTtasc');
      }
      public function rachaSelectTtdes()
      {
          return view('pages.rachaSelectTtdes');
      }



       //เรียง amb 30 วัน
    public function amb30Toasc()
    {
        return view('pages.amb30Toasc');
    }
    public function amb30Todes()
    {
        return view('pages.amb30Todes');
    }
    public function amb30Winasc()
    {
        return view('pages.amb30Winasc');
    }
    public function amb30Windes()
    {
        return view('pages.amb30Windes');
    }
    public function amb30Lossasc()
    {
        return view('pages.amb30Lossasc');
    }
    public function amb30Lossdes()
    {
        return view('pages.amb30Lossdes');
    }
    public function amb30Ttasc()
    {
        return view('pages.amb30Ttasc');
    }
    public function amb30Ttdes()
    {
        return view('pages.amb30Ttdes');
    }


    
       //เรียง amb 7 วัน
       public function amb7Toasc()
       {
           return view('pages.amb7Toasc');
       }
       public function amb7Todes()
       {
           return view('pages.amb7Todes');
       }
       public function amb7Winasc()
       {
           return view('pages.amb7Winasc');
       }
       public function amb7Windes()
       {
           return view('pages.amb7Windes');
       }
       public function amb7Lossasc()
       {
           return view('pages.amb7Lossasc');
       }
       public function amb7Lossdes()
       {
           return view('pages.amb7Lossdes');
       }
       public function amb7Ttasc()
       {
           return view('pages.amb7Ttasc');
       }
       public function amb7Ttdes()
       {
           return view('pages.amb7Ttdes');
       }
   
       

       
       //เรียง amb 1 วัน
    public function amb1Toasc()
    {
        return view('pages.amb1Toasc');
    }
    public function amb1Todes()
    {
        return view('pages.amb1Todes');
    }
    public function amb1Winasc()
    {
        return view('pages.amb1Winasc');
    }
    public function amb1Windes()
    {
        return view('pages.amb1Windes');
    }
    public function amb1Lossasc()
    {
        return view('pages.amb1Lossasc');
    }
    public function amb1Lossdes()
    {
        return view('pages.amb1Lossdes');
    }
    public function amb1Ttasc()
    {
        return view('pages.amb1Ttasc');
    }
    public function amb1Ttdes()
    {
        return view('pages.amb1Ttdes');
    }

    //เรียง amb  วันนี้
    public function amb0Toasc()
    {
        return view('pages.amb0Toasc');
    }
    public function amb0Todes()
    {
        return view('pages.amb0Todes');
    }
    public function amb0Winasc()
    {
        return view('pages.amb0Winasc');
    }
    public function amb0Windes()
    {
        return view('pages.amb0Windes');
    }
    public function amb0Lossasc()
    {
        return view('pages.amb0Lossasc');
    }
    public function amb0Lossdes()
    {
        return view('pages.amb0Lossdes');
    }
    public function amb0Ttasc()
    {
        return view('pages.amb0Ttasc');
    }
    public function amb0Ttdes()
    {
        return view('pages.amb0Ttdes');
    }

    //เรียง amb select date
   
    public function ambSelectToasc()
    {
        return view('pages.ambSelectToasc');
    }
    public function ambSelectTodes()
    {
        return view('pages.ambSelectTodes');
    }
    public function ambSelectWinasc()
    {
        return view('pages.ambSelectWinasc');
    }
    public function ambSelectWindes()
    {
        return view('pages.ambSelectWindes');
    }
    public function ambSelectLossasc()
    {
        return view('pages.ambSelectLossasc');
    }
    public function ambSelectLossdes()
    {
        return view('pages.ambSelectLossdes');
    }
    public function ambSelectTtasc()
    {
        return view('pages.ambSelectTtasc');
    }
    public function ambSelectTtdes()
    {
        return view('pages.ambSelectTtdes');
    }


      
}
