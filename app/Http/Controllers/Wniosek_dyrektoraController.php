<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;


use \App\rspo_api;


class Wniosek_dyrektoraController extends Controller
{
    var $rspo_api;
    public function __construct() {
        
        $this->rspo_api=new rspo_api();
    }
     
    
    public function index()
    {
        
        
        return view('wniosek_dyrektor.wniosek_dyr_index');
    }
    
    
    public function check_rspo(Request $request)
    {
          if (isset($request->nr_rspo_dyr) && $request->nr_rspo_dyr!='')
          {
              if (is_numeric($request->nr_rspo_dyr))
              {
                    $rspo=$request->nr_rspo_dyr;
                    
                    $dane_szkoly=$this->rspo_api->get_dane_placowki_by_rspo($rspo);
                    
                    if (isset($dane_szkoly->numerRspo))
                    {
                        
                    }
                    else
                    {
                        return redirect('/wniosek_dyrektora/')->with('rspo_dyr_error', 'Nieprawidłowy numer RSPO lub usługa RSPO tymczasowo nie działa.');
                    }
              }
              else
              {
                    return redirect('/wniosek_dyrektora/')->with('rspo_dyr_error', 'RSPO musi być liczbą.');
              }
              
          }
            else {
                    return redirect('/wniosek_dyrektora/')->with('rspo_dyr_error', 'Nie może być pole puste.');
            }
    }
    
    
    
     
     public function formularz_wniosek_dyrektora_store(Request $request)
     {
         
     }
}
