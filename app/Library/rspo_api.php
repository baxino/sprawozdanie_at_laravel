<?php
namespace App;



class rspo_api {
 
    var $curl;
    var $url_glowne;
    var $dane_szkoly;
    var $placowki_podrzedne;
    
    function __construct() {
      
         $this->curl= curl_init();
        $this->url_glowne='https://api-rspo.mein.gov.pl';
    }
    
    
    public function get_dane_placowki_by_rspo($nr_rspo)
    {
        $url='/api/placowki/'.$nr_rspo;
        
        $wynik=$this->curl_get($url);
        if (isset($wynik->detail) && $wynik->detail=='Not Found')
        {
            return false;
        }
        else
        {
            return $wynik;
        }
        
    }
   
    
     public function get_dane_placowki_podrzednej($url_podrzedna)
    {
        $wynik=$this->curl_get($url_podrzedna);
        return $wynik;
    }
    
    public function sprawdzenie_czy_istnieje_rspo($nr_rspo)
    {
        $url='/api/placowki/'.$nr_rspo;
        $wynik=$this->curl_get($url);
        if (isset($wynik->numerRspo) && $wynik->numerRspo!=null)
        {
            return true;
        }
        else {
                return false;
            }
    }
    
    public function get_dane_sprawdz_mail($email,$rspo)
    {
        $url='/api/placowki/'.$rspo;
        
        $dane=$this->curl_get($url);
        if (isset($dane) && isset($dane->email) && !empty($dane->email) && $dane->email===$email)
        {
                return $dane;
        }
        else
        {
                return $false;
        }
    }
    
    public function parse_placowki_podrzedne($placowki_podrzedne)
    {
        $temp_array=array();
        if (is_object($placowki_podrzedne))
        {
           foreach ($placowki_podrzedne as $placowka_url)
           {
             $podrzedna_placowka_dane=$this->get_dane_placowki_podrzednej($placowka_url);
             array_push($temp_array,$podrzedna_placowka_dane);
           }
           return $temp_array;
        }
    }
    
    private function curl_get($url)
    {
         curl_setopt($this->curl,CURLOPT_SSL_VERIFYPEER , false);
        curl_setopt_array($this->curl,[ CURLOPT_RETURNTRANSFER=>1, CURLOPT_URL =>$this->url_glowne.$url]);
        curl_setopt($this->curl,CURLOPT_HTTPHEADER,array('Content-type: application/json' ));
        
        $dane= curl_exec($this->curl);
        
        return json_decode($dane);
        
       
    }
    
    
    private function sprawdz_api_online()
    {// test
        $url="/api/placowki/25787";
        $handle = curl_init($url);
        curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

        /* Get the HTML or whatever is linked in $url. */
        $response = curl_exec($handle);

        /* Check for 404 (file not found). */
        $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        if($httpCode == 404) {
            
        }

        curl_close($handle);
    }
       
   
}









