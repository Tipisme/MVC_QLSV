<?php

// http://localhost/live/Home/Show/1/2
require_once "./mvc/core/Controller.php";


class Home extends Controller{

    // Must have SayHi()
    function Begin(){
        require_once "./mvc/views/home.php";
    }

    function Login(){
        require_once "./mvc/core/Login.php";
    }

    function Register(){
        require_once "./mvc/core/Register.php";
    }
}
?>