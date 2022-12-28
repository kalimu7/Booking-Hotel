<?php

    class Logout{
        public function Logout(){
            
        $_SESSION = [];
        session_unset();
        session_destroy();
        header("Location:http://localhost/5th%20BRIEF/public/Admin/logout");
        }
        
    }
    
?>