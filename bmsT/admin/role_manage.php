<?php 
  include("header.php");
  include("../config/config.php");


  $id='';
  $title='';
  $description='';
  if(isset($_GET['id']) && $_GET['id']>0){
    $id=$_GET['id'];

    $a = $conn->query("select name,description from role where id=".$id);
    //echo $a->num_rows;
    if($a->num_rows>0){
      $c = $a->fetch_assoc();
      $title=$c['name'];
      $description=$c['description'];
    }
  }

?>
<h2>Role Manage</h2>
<form method="POST"action="callback/role.php" enctype="multipart/form-data"><!--this can hide the info.-->
<input type="text" name="title" value="<?php echo $title;?>"  required>
<textarea name="description" ><?php echo $description;?></textarea>
<input type="submit">
</form>


<?php
include("footer.php");
?>
