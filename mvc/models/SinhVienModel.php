<?php

require_once "./mvc/core/DB.php";
class SinhVienModel extends DB{
    public function GetSV(){
        return "Nguyen Van Teo";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function SinhVien(){
        $qr = "SELECT * FROM student";
        return mysqli_query($this->con, $qr);
    }

}
?>