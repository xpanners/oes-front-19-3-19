<?php
class Route{

    private $mysession;
 public function __construct($url=null)
 {

    require_once("session.php");
     $sess = new session();
     $this->mysession =  $sess->Check_Session('');
     if($sess->Check_Session('') == false)
     {
         $sess->Make_Session('public');
     }
     switch ($url[0]) {
         case 'ajax':
            $this->__ajax($url);    
             break;
         
         case 'home':
            $this->__home($url);
             break;
         case 'redirect':
            $this->__redirect($url);
             break;        
         default:
            $this->__home($url);
             break;
     }


 }
 
    private function __home($param=null)
    {
        require_once("views/__body.php");
    }

    private function __redirect($param=null)
    {
        echo "going to redirect";
    }
    private function __ajax($param=null)
    {
        $url = array_slice($param,1);
        require_once("ajax.php");
        new ajax($url);
    }

}?>