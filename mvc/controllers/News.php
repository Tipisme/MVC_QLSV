<?php
require_once "./mvc/core/Controller.php";

class News extends Controller{
    function Begin(){
        require_once "./mvc/views/viewNews.php";
    }
    function ShowList(){
        require_once "./mvc/core/stu_list.php";
    }
    function AddStu(){
        require_once "./mvc/core/add_stu.php";
    }
    function EditStu(){
        require_once "./mvc/core/edit_stu.php";
    }
    function DelStu(){
        require_once "./mvc/core/del_stu.php";
    }
}
?>