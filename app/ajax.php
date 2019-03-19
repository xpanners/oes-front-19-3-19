<?php

/// ....................... file include-----------------
include "database.php";

/// ....................... file include-----------------

class ajax  extends DB
{

    /// ....................... initialization-------------------------------

   private $viewpath = "views/";
   private $allfile;
   /// ....................... initialization-------------------------------



   public function __construct($param=null)
   {
    
       if ($param[0] == null) {
           $this->_view("home");
       } else {
           if (method_exists('ajax',$param[0])) {
               $m = $param[0];
               $this->$m(array_slice($param,1));
           } else {
                $this->_view("404");
           }
           
       }
       
   }











// ....................... public pages--------------------------------

public function home($param = null)
{
    $this->_view("home");
    //echo "home";
}

public function about($param = null)
{
    $this->_view("about");
}

public function contact($param = null)
{
    $this->_view("contact");
}

public function login($param = null)
{
        $this->_view("login");
      
}

public function register($param = null)
{
    $this->_view("register");
}

public function blog($param = null)
{
    $bgid = @$param[0];
    $q = "SELECT blogs.*, uprofile.screen_name,uprofile.uimage FROM blogs,uprofile WHERE blogs.status = 'active' AND blogs.bg_id = '".$bgid."' AND uprofile.email = blogs.bg_user";
    $data = $this->getData($q);
    
    if ($param[0]=="" || count($data)==0) 
    {
   echo "invalid";
    } 
    else
    {
        $this->_view("blog",$data[0]);
    }

}

public function blogs($param = null)
{   
    $q = "SELECT blogs.*, uprofile.screen_name FROM blogs,uprofile WHERE blogs.status = 'active' AND uprofile.email = blogs.bg_user";
    $this->_view("blogs",$this->getData($q));
}

public function workshops($param = null)
{   
    $q = "SELECT * FROM workshops WHERE ws_status = 'active' ";
    $this->_view("workshops",$this->getData($q));
}

public function ws($param = null)
{   
    
    
    $wsid = @$param[0];
    $q = "SELECT * FROM workshops WHERE ws_status = 'active' and ws_id = '".$wsid."' ";
    $data = $this->getData($q);
    
    if ($param[0]=="" || count($data)==0) 
    {
   echo "invalid";
    } 
    else
    {
        $this->_view("ws",$data[0]);
    }
}

public function notice($param = null)
{   
    $q = "SELECT * FROM notice ORDER BY nt_time";
    $this->_view("notice",$this->getData($q));
}

public function note($param=null)
{
    $nid = @$param[0];
    $q = "SELECT * FROM notice where nt_id = '".$nid."' ";
    $data = $this->getData($q);
    
    if ($param[0]=="" || count($data)==0) 
    {
   echo "invalid";
    } 
    else
    {
        $this->_view("note",$data[0]);
    }
}

public function courses($param = null)
{   
    $cmq = "SELECT course.*,course_schedule.*,course_cat.ccname FROM course, course_cat,course_schedule WHERE course.cat_id = course_cat.ccid and course.status = 'active' AND course_schedule.course_id = course.cid";
    $this->_view("courses",$this->getData($cmq));
}

public function course($param=null)
{
    $cid = @$param[0];
    $cmq = "SELECT course.*,course_schedule.*,course_cat.ccname,uprofile.screen_name FROM course, course_cat,course_schedule,uprofile WHERE course.cid = '".$cid."' AND course.cat_id = course_cat.ccid and course.status = 'active' AND course_schedule.course_id = course.cid AND uprofile.email = course.added_by_id";
    $data = $this->getData($cmq);
    
    if ($param[0]=="" || count($data)==0) 
    {
   echo "invalid";
    } 
    else
    {
        $this->_view("course",$data[0]);
    }

    
    
    
    
}

public function logmein()
{
    if ($_POST) 
    {
        $mail = $this->input($_POST['mail']);
        $pass = $this->input($_POST['pass']);
        $q = "select * from users where email = '".$mail."' and hash = '".$pass."' ";    
            if (count($this->getData($q)) == 1) {
                require_once('session.php');
                $s = new session;
                $s->make_session($mail);
                $_SESSION['access'] = 1;

                echo 200;
            } else {
                echo 401;
            }
         
         

   
    }else{
        echo 400;
    }
  

}

public function logout()
{
    require_once("session.php");
    $s = new session;
    $s->destroy_session();
    echo json_encode( 200);
}
// ....................... public pages--------------------------------
function GetAllStaticFiles(){
    
    $this->outputFiles("lib");
    print_r(json_encode( $this->allfile));
}
 


function outputFiles($path){
    // Check directory exists or not
    if(file_exists($path) && is_dir($path)){
        // Scan the files in this directory
        $result = scandir($path);
        
        // Filter out the current (.) and parent (..) directories
        $files = array_diff($result, array('.', '..'));
        
        if(count($files) > 0){
            // Loop through retuned array
            foreach($files as $file){
                if(is_file("$path/$file")){
                    // Display filename
                    $this->allfile[] =  $file;
                } else if(is_dir("$path/$file")){
                    // Recursively call the function if directories found
                    $this->outputFiles("$path/$file");
                }
            }
        } else{
           
        }
    } else {
        
    }
}
 



// ....................... worker functions--------------------------------


    private function _404($param = null)
    {
        $this->view("404");
    }
    private function _view($param,$data = null)
    {
        include $this->viewpath.$param.".php";
    }
    public function shortword($text, $maxchar, $end='...') {
        if (strlen($text) > $maxchar || $text == '') {
            $words = preg_split('/\s/', $text);      
            $output = '';
            $i      = 0;
            while (1) {
                $length = strlen($output)+strlen($words[$i]);
                if ($length > $maxchar) {
                    break;
                } 
                else {
                    $output .= " " . $words[$i];
                    ++$i;
                }
            }
            $output .= $end;
        } 
        else {
            $output = $text;
        }
        return $output;
    }

// ....................... worker functions--------------------------------





}?>