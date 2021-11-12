<?php
session_start();


$conn = mysqli_connect('localhost','root','','univ');


$id = $_SESSION["id"] ;
$name = $_SESSION["username"] ;

 $sql = "SELECT * FROM admin  where ID = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);


echo $id ." - ". $name;

if ($numrows == 0 )
{
        
    

    header("location:index.php");

    
}


?>


<?php


$student_id = $_POST['student_id'];

$student_name = $_POST['student_name'];
$dept_name = $_POST['dept_name'];

$tot_credit= $_POST['tot_credit'];


$host = "localhost";
$dbusername = "";
$dbpassword ="";
$dbname="univ";




$conn = new mysqli ('localhost','root','',$dbname);

 
        
if (mysqli_connect_error())
{
    
    die (' db connection error');
}

else {
    
    
      
    $sql = "INSERT INTO takes (
ID ) values ('$student_id')";
    
    
    
    $conn->query($sql);
    
    
       $sql = "INSERT INTO department(
dept_name ) values ('$dept_name')";
    
    
    
    $conn->query($sql);
    
    
    $sql = "INSERT INTO student (
ID ,
name,
dept_name,
tot_cred ) values ('$student_id','$student_name','$dept_name','$tot_credit')";
    
      if($conn->query($sql))
      
      { 
           header ('location:admin.php');
         
      }
      else 
      {
          echo 'ERROR: '.$sql.'<br>'.$conn->error;
      }
      
      
      
     
     }

      $conn->close();
      

?>
