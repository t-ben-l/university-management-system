<?php



session_start();
 
// Storing session data
$_SESSION["username"] = $_POST['username'];
$_SESSION["user_id"] = $_POST['password'];
$_SESSION["error"] = 2;
$id2 = $_SESSION["user_id"];
  $name =$_SESSION["username"] ;      
       $count = 0 ;
        $c =0;
$identify = "tem";

    $id = array() ;

while($count<strlen($id2))
{
    if ($count<3)
    {
    $identify[$count] = $id2[$count];
    }
    
    
    
    else
    {
           
    $id[$c++] = $id2[$count];
    }
    
    $count++;
}
 $id = implode("",$id);
   
$_SESSION["id"]   = $id;


$conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM admin  where ID = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);




if ($numrows > 0 && $identify == "adm" && strlen($id) == 5)
{
    
    //header("location:admin.php");
//echo ' num rows = '.$numrows.'<br>  identify = '.$identify.' <br> id = '.$id.' <br> name = '.$name.' <br> id length = '.strlen($id);
    header("location:admin.php");





}



else
{




        $sql = "SELECT * FROM instructor  where ID = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);



                if ($numrows > 0 && $identify == "ins"  && strlen($id) == 5)
                {



                    header("location:instructor.php");





                }



                else
                {


                                    $sql = "SELECT * FROM student where ID = '$id' and name  = '$name'";
                                    $result = mysqli_query ($conn,$sql);

                            $numrows = mysqli_num_rows($result);



                            if ($numrows > 0 && $identify == "std" )
                            {

                                header("location:student.php");





                            }
                    else
                    {
                       // echo ' num rows = '.$numrows.'<br>  identify = '.$identify.' <br> id = '.$id.' <br> name = '.$name.' <br> id length = '.strlen($id);
 
                              header("location:indexx.php");
                    
                    
                    }



                }



}

?>