<?php
    include("../../config/config.php");
    
    if(isset($_POST['title']) && trim($_POST['title'])!=''){
        //insert
        // echo 'here';
        // $query = "insert into tablename('title','detail')values(''),('')";
        $title = $_POST['title'];
        $detail = $_POST['detail'];
        $query = "INSERT INTO catergory(name,detail) VALUES ('$title','$detail')";
        $checkResult = $conn->query($query);
        if($checkResult){
            $_SESSION['status']='success';
            header("location:../catergory.php");
           // echo 'pass';
        }
        else{
            $_SESSION['status']='fail';
            header("location:../catergory.php");
            //echo 'fail';
        }
    }
    // update
    // delete
?>