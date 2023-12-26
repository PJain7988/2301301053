<?php
    include("../config/config.php");
    include("header.php");
    //print_r($_GET);
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $roleHtml='';
    $result = $conn->query("select * from role");
    if($result->num_rows > 0){
       // ech0 $result->num_rows;
       // print_r($finalResult);
       while($row =$result->fetch_assoc()){
        $id = $row['id'];
        $roleHtml .= '
        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="role_manage.php?id='.$id.'">Edit</a>/<button>Delete</button></td>
</tr>';
       }
       //print_r($_GET);
    }
?>
<h2>Role</h2>
<?php echo $message?>
<a href="role_manage.php">Add New Role</a>
<table border="1" style="width:100%;">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        echo $roleHtml;
        ?>

    </tbody>
    </table>
<?php
include("footer.php");
?>
