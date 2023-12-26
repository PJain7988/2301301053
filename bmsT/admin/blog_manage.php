<?php
    include("header.php");
     include("../config/config.php");

     print_r($_GET);

     $title='';
     $description='';
     
       if(isset($_GET['id']) && $_GET['id']>0){
         //edit
     
         $result=$conn->query("select * from role where id=".$_GET['id']);
         //$checkResult ke sath kuch or bhi bhi likh sakte ho
          if($result->num_rows>0)//
          {
          $row=$result->fetch_assoc();
          print_r($row);
          $title=$row['name'];
          $description=$row['description'];
     
          }
     
       }
    if($conn->connect_error){
        echo'failed';
    }else{
        echo'pass';
    }
    // select
?>
<h2>blog Manage</h2>
<a href="blog_manage.php">Add New blog</a>
<form method="post" action="callback/blog.php" enctype="multipart/form-data">
<input type="text" name="title" required>
<input type="email" name="email">
<input type="password" name="password">
<input type="submit">
</form>
<?php
include("footer.php");
?>
