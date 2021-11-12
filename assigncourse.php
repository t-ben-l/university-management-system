<?php

session_start();


$course_id = $_POST['course_id'];

$instructor_id = $_POST['instructor_id'];
$semester = $_POST['semester'];

$year = $_POST['year'];

$sec_id = $_POST['sec_id'];
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
    
    
 $sql = "INSERT INTO `teaches` (`ID`, `course_id`, `sec_id`, `semester`, `year`) VALUES
($instructor_id,'$course_id','$sec_id','$semester',$year)";
    
  //  $sql = "INSERT INTO teaches ( ID,course_id,sec_id,year,semester) values ($instructor_id,'$course_id','$sec_id',$year,'$semester')";
    
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
