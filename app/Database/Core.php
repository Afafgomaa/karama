<?php


class Core
{
private $page = 'home';
private $methode = 'index';
private $paremter = [];

    public function __construct()
    {
        //echo $_GET['url'];
        
        $url =  $this->getUrl();
        // Look in controllers for first value
            if(file_exists('../app/Controllers/' . $url[0]. '.php')){
                
                // If exists, set as controller
                $this->page = $url[0];
                // Unset 0 Index
                unset($url[0]);
        
                // Require the controller
                    require_once '../app/Controllers/'. $this->page . '.php';
                $this->page =  new $this->page();
                    }

                if(isset($url[1])) {
                    if(method_exists($this->page , $url[1]))
                            {
                                $this->methode = $url[1];
                                unset($url[1]); 
                            }

                        }
                                            // Get params
                $this->paremter = $url ? array_values($url) : [];

                // Call a callback with array of params
                call_user_func_array([$this->page, $this->methode], $this->paremter);
    
        
        

    }

           

        
       

        private function getUrl()
                {
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $_GET['url']);
                return $url;
                }
            }

   
}

