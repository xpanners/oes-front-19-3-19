<?php
class session
{
    public function __construct()
    {
        
    }

    public function check_session($param=null)
    {
        
        if(@$_SESSION['app_session'] != null)
        {
                return $_SESSION['app_session'];
        }else{
            return false;
        }
        
    }

    public function make_session($param=null)
    {
        
        $_SESSION['app_session'] = $param;
        return $_SESSION['app_session'];
    }
    public function destroy_session($param=null)
    {
        session_destroy();
        $this->make_session('public');
    }
}
?>