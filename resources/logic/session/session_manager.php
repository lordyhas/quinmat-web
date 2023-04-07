<?php

namespace SessionRepository;

class SessionManager{
    function __construct()
    {
        if (!session_id() && session_status() === PHP_SESSION_NONE) {
            session_start();
            session_regenerate_id(true);
        }

    }

    private function run(): void
    {
        if (!session_id() || session_status() === PHP_SESSION_NONE) {
            session_start();
            session_regenerate_id(true);
        }
    }

    public function clean(): void
    {
        if (session_id()) {
            session_unset();
            session_destroy();
        }
    }

    public function set_lang($lang = "fr"):void {
        $_SESSION['username'] = $lang;
    }

    public function login($username = "guest_user", $login = true): void
    {
        //$_SESSION['property'] = array();
        $_SESSION['username'] = $username;
        $_SESSION['login'] = $login;
    }

    /// check user is already logged-in
    public function is_logged(): bool
    {
        if (isset($_SESSION['username']) || isset($_SESSION['login'])) {
            if (!$_SESSION['login']) return false;
            return true;
        }
        return false;
    }

    ///
    public function is_admin(): bool
    {
        if ($this->is_logged())
            if (isset($_SESSION['rank']) && $_SESSION['rank'] == 1)
                return true;
        return false;
    }

    ///
    public function is_allowed($level = 0): bool
    {
        if ($this->is_logged())
            if (isset($_SESSION['state_user']) && $_SESSION['state_user'] == 1)
                return true;
        return false;
    }


    /* ------------------ Utils function ------------------ */

    function instance_session($userinfo): void
    {
        $_SESSION['username'] = $userinfo[''];
        $_SESSION['last_name'] = $userinfo[''];
        $_SESSION['passwd'] = $userinfo[''];
        $_SESSION['state_user'] = $userinfo[''];
        $_SESSION['rank'] = $userinfo[''];
        $_SESSION['admin'] = $userinfo[''];
        $_SESSION['user_id'] = $userinfo[''];
    }
    
    



}





/*

function is_logged():bool
{
    if(isset($_SESSION['username']) || isset($_SESSION['name'])){
        return true;
    }
    return false;  
}

function is_admin():bool
{

    
    if($this->is_logged())
        if(isset($_SESSION['rank']) && $_SESSION['rank'] == 1)
            return true;
    return false;
}

function is_instructor():bool
{
    if($this->is_logged())
        if(isset($_SESSION['state_user']) && $_SESSION['state_user'] == 1)
            return true;
    return false;
}

function is_professor():bool
{
if($this->is_logged())
    if(isset($_SESSION['state_user']) && $_SESSION['state_user'] == 2)
    return true;
return false;
}


/* ------------------ Util function ------------------ */

/*function instance_session($userinfo){
$_SESSION['username'] = $userinfo[''];
$_SESSION['last_name'] = $userinfo[''];
$_SESSION['passwd'] = $userinfo[''];
$_SESSION['state_user'] = $userinfo[''];
$_SESSION['rank'] = $userinfo[''];
$_SESSION['admin'] = $userinfo[''];
$_SESSION['user_id'] = $userinfo[''];
}*/


