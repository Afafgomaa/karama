<?php
//namespace app\Models;


trait commenMthodesModel

{
    private $template = 'template';
    public function render($view, $varible,$settings = [])
    {
        
        ob_start();
        include "../app/Views/". $view . ".php";
        $page = ob_get_contents();
        include "../app/Views/". $this->template . ".php";
       
    } 
}