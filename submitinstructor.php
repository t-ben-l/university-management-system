
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





$instructor_id = $_POST['instructor_id'];

$instructor_name = $_POST['instructor_name'];
$dept_name = $_POST['dept_name'];

$instructor_salary= $_POST['instructor_salary'];


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
    
    $sql = "INSERT INTO instructor ( ID, name,dept_name,salary) values ('$instructor_id','$instructor_name','$dept_name','$instructor_salary')";
    
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
