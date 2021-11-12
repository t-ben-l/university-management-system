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





$course_id = $_POST['course_id'];

$dept_name = $_POST['dept_name'];
$credits = $_POST['credits'];

$title = $_POST['title'];


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
    
    
        $sql = "INSERT INTO department(
dept_name ) values ('$dept_name')";
    
    
    
    $conn->query($sql);
    
    $sql = "INSERT INTO course ( course_id,dept_name,title,credits) values ('$course_id','$dept_name','$title','$credits')";
    
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
