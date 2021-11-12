
<?php

session_start();


$conn = mysqli_connect('localhost','root','','univ');


$id = $_SESSION["id"] ;
$name = $_SESSION["username"] ;

 $sql = "SELECT * FROM admin  where ID = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);

$numrows = mysqli_num_rows($result);

if ($numrows == 0 )
{



    header("location:index.php");


}

else {

  if (isset ($_POST['deletee']))



  {


 $_id_ = $_GET['_id_'];


$sql = "DELETE FROM course WHERE course_id= '$_id_'";
       $result = mysqli_query ($conn,$sql);



       header("location:admin.php?dee= ");


  }


  if (isset ($_POST['_student_']))



  {


 $_id_ = $_GET['_id_'];


$sql = "DELETE FROM student WHERE ID = $_id_ ";
       $result = mysqli_query ($conn,$sql);



       header("location:admin.php");


  }
  if (isset ($_POST['_instructor_']))



  {


 $_id_ = $_GET['_id_'];


$sql = "DELETE FROM student WHERE ID = $_id_ ";
       $result = mysqli_query ($conn,$sql);



       header("location:admin.php");


  }


}








?>
