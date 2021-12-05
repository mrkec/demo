<?php
$msg="false";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'] ;   
    $subject=$_POST['subject'] ;   
    $text1=$_POST['text1'] ;   

    $severname="localhost";
    $username="root";
    $pass="";
    $dbname="perday";

    $conn=mysqli_connect($severname,$username,$pass ,$dbname);

        $sql="INSERT INTO `perday-services` ( `name`, `contact`, `subject`, `text1`) VALUES ( '$name', '$contact', '$subject', '$text1')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:index.php");
      
           
            
                 }
    }

    ?>



