<pre><?php 
    echo "Hello";
    echo "<br>";
    echo 'Hello World !';
    echo "<br>";
    $thisIsMyArray=array(
        array(
            0=>1001,
            1=> 'CR',
            2=> 'Btech',
            3=> 'harsh'
        ),
        array(
        0=>1002,
        1=>'CR-2',
        2=>'Btech',
        3=> 'nitin'
        )
    );
     print_r($thisIsMyArray);
    echo $thisIsMyArray[0][1];
    echo '<br>';
    //loop foreach, for, while, do while
   $count=1;
   echo $count++;
   echo 'priya' . 'Btech' . 'Pursuing' . '2023';
   echo '<br>';
   $name = 'priya';
   $year = '2023';
   echo $final = $name.' '.$year;

   $htmlTable='<table border="1" class="table" style="width:100%">'
foreach($thisIsMyArrayMyArray as $priya){
    foreach($priya as $row){
        if($row=='1001'){
            $row=2001;
        }
        else if($row=='1002'){
            $row=1001;
        }
        else{
            $row=000;
        }
        $htmlTable.='<td>'.$row.'</td>';
    }
}
   $htmlTable.='</table>';
   echo $htmlTable;

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP</title>
    <style>
        body{
           background:<?php echo 'yellow' ?>;
        }
        </style>
</head>
<body>
    <h1>hello</h1>
</body>
</html>


<pre>
    <?php
    echo 'hello';
    echo '<br>';
    echo 'Hello class';
    echo '<br>';
    $gthLab=2;
    print_r($gthLab);
    echo '<br>';
    $thisIsMyArray = array(0,1,2,3);
    echo '<br>';
    print_r($thisIsMyArray);
    echo '<br>';
    $thisIsMyArray  = array(
        0=>'Priya',
        1=>'Khushi',
    );
    print_r($thisIsMyArray);
    echo '<br>';
    print_r($thisIsMyArray[0]);

    echo '<br>';
    $thisIsMyArray = array(2,3,6,8,9);
    print_r($thisIsMyArray);
    echo '<br>';
    $thisIsMyArray = array(
        0=>'Geeta',
        1=>'Priya',
        2=>'Dinesh',
    );
    print_r($thisIsMyArray);

    $thisIsMyArray = array(
        array(
            0 =>1042,
            1 =>'Khushi',
            2 =>'Btech',
            3 =>'cse',
            4 =>'Data Sci',
        ),
        array(
            0 =>1125,
            1 =>'Shaina',
            2 =>'Btech',
            3 =>'cse',
            4 =>'AI ML'
        ),
    );
    print_r($thisIsMyArray[0][4]);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body{
                background: <?php echo 'skyblue'; ?>
            }
            pre{
                color:red;
            }
            </style>
    </head>
    <body>
        <h1 style="color: yellow";>hello world</h1>
    </body>
    </html>
