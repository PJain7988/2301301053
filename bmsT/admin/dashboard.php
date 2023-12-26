<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		body{
			background:skyblue;
		}
        .sidebar{
            width: 20%;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            border-right: 4px solid black;
			background-color: grey;
        }
        .sidebar ul li{
            font-weight: 700;
        }
        .sidebar ul li a{
            color: red;
            font: optional;;
            text-decoration: none;
        }
        .sidebar ul li a:hover{
            color: blue;
        }
        .sidebar h1{
            text-align: center;
            padding: 10px;
            margin: 0;
            color: black;
			border-bottom: solid black;
        }
        .header{
            text-align:center;
            font-size:30px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1><b><u>Dashboard</u></b></h1>
		<br>
        <ul>
            <li><a href="../admin/catergory.php"><h3>Category </h3></a></li>
            <li><a href="../admin/category_manage.php"><h3>Manage Category </h3></a></li>
            <li><a href="../admin/blog_manage.php"><h3>Manage Blog </h3></a></li>
            <li><a href="../admin/role.php"><h3>Role </h3></a></li>
            <li><a href="../admin/role_manage.php"><h3>Manage Role </h3></a></li>
        </ul>
    </div>
    <div class="header">
        <h1>Welcome!</h1>
    </div>
</body>
</html>