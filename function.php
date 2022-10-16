<?php


class con{
    function __construct()
    {
     $con =  mysqli_connect('localhost','root','','arduino') or die("ไม่สำเร็จ");  
     
     $this->con = $con;

     if(mysqli_connect_errno()){
            echo "NO" , mysqli_connect_error();

     }
    }
    public function openlight1($va){
        $sql = "UPDATE test SET status ='$va' WHERE id = 1 ";
        $data = mysqli_query($this->con,$sql);
        return $data;
        
    }
    public function read($id){
        $sql = "SELECT * FROM test WHERE id = 1";
        $data = mysqli_query($this->con,$sql);
        return $data;
        
    }
   
}
?>