<?php
    include("../../config/config.php");
    
    if(isset($_POST['title']) && trim($_POST['title'])!=''){
        //insert
        // echo 'here';
        // $query = "insert into tableblog_name('title','detail')values(''),('')";
        $title = $_POST['title'];
        $detail = $_POST['detail'];
        $query = "INSERT INTO blog(blog_name,detail) VALUES ('$title','$detail')";
        $checkResult = $conn->query($query);
        if($checkResult){
            $_SESSION['status']='success';
            header("location:../blog.php");
           // echo 'pass';
        }
        else{
            $_SESSION['status']='fail';
            header("location:../blog.php");
            //echo 'fail';
        }
    }
    // update
    // delete
?>