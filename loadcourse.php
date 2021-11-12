<?php
session_start();


$conn = mysqli_connect('localhost','root','','univ');


$id = $_SESSION["id"] ;
$name = $_SESSION["username"] ;

 $sql = "SELECT * FROM student where ID = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);

if ($numrows == 0 )
{
        
    

    header("location:index.php");

    
}


?>
<!DOCTYPE>


<html>


    <head>
    
        <style>
        
            body{
                
                width:100%;
                height:100%;
                background-color:#66a3ff;
                position: fixed;
            
            }
            
            
            #container
            {
                
                position: fixed;
                width: 98%;
                height:98%;
                top: 1%;
                left: 1%;
               background-color: white;
                
                
            }
            
            
            #left
            {
                position: fixed;
                
               left: 1.5%;
                 width: 20%;
                height: 97%;
                background-color: #00001a;
                
                 box-shadow: 10px 10px 5px #aaaaaa;
                
            }
            
            
            
            #photo
            {
                position: relative;
                width: 48%;
                top: 2%;
                left: 27%;
                height: 15%;
                background-color: aliceblue;
                border-radius: 100%;
                
                
            }
            
            #logo
            {
                position: relative;
                height: 10%;
                width: 90%;
                left: 3%;
                top: 1%;
               
              
            }
            
            #pic
            {
                position: absolute;
                left: 2%;
                height: 98%;
                top: 1%;
                width: 30%;
               
                
            }
            #text
            {
                position: absolute;
                width: 70%;
                height: 80%;
                left: 35%;
                top: 10%;
             
                text-align: center;
                font-size: 13px;
                color: WHITE;
            }
            #pic img 
            {
                width: 100%;
                height: 100%;
               
            }
            
            
               #photo img 
            {
                width: 100%;
                height: 100%;
                border-radius: 50px;
            }
            
            #options 
            {
                position:relative;
                top: 15%;
                width: 100%;
                height: 5%;
                background-color:white;
                margin-bottom: 5px;
                  border-left: 10px solid #00001a ;
               border-right: 3px solid #00001a;
                 border-top: 3px solid #00001a;
                 border-bottom: 3px solid #00001a;
            }
            
            
             #label 
            {
                position:relative;
                top: 5%;
                width: 100%;
                height: 5%;
               
            } 
            
            #label #txt
            {
                
                position: absolute;
                width: 100%;
                height:  100%;
                text-align: center;
                color: white; 
                font-size: 13px;
                font-family:sans-serif;
                
            }
            
            
            #options #opt_text
            {
                
                position: absolute;
                width: 100%;
                height: 80%;
                text-align: center;
                color: black; 
                padding-top: 12px;
                font-size: 14px;
                font-family:serif;
                background-color: white;
                      margin-bottom: 5px;
                
            }
            
            
            
             #options #opt_text:hover
            {
                
                background-color: #003399;
           
                color: white;
            
            }
            
            /* end of theme style */
            
            
            
            
             /* begining  top bar or admin  */
            
            
            
            #top_bar
            {
                position: absolute;
                width: 70%;
                height: 10%;
                top: 3%;
                left: 25%;
                 background-color: #00001a;
                
            }
            
            
            .menu
            {
                position: absolute;
                width: 10%;
                top: 5%;
                height: 96%;
               
            
            }
            
            #teachers
            {
                left: 1%; 
                
                border-bottom:  5px solid #00001a;
            }
            
            
                 
            #students
            {
                left: 13%; 
                
                
            }
            
            
                 
            #courses
            {
                left: 25%; 
                
                
            }
            
            
            #tb_icon
            {
                
                position: absolute;
                width: 60%;
                height: 65%;
                left: 20%;
                
              
            }
            
            
             #tb_icon img
            {
                width: 100%;
                height: 100%;
                
            }
            #tb_txt
            {
                
                
                  position: absolute;
                width: 90%;
                height: 30%;
                left: 5%;
                top: 65%;
                text-align: center;
                font-size: 13px;
                color: white;
                
                
            }
            
            
            .main
            {
                position: absolute;
               width: 70%;
                height: 80%;
                top: 14%;
                left: 25%;
                background-color: grey;
                border: 3px solid #00001a;

                            overflow-y: scroll;
                
            }
            
            
            
        </style>
        
        
        <style>  
            
        
        /*     INSTRUCTOR STYLE  */
            
            
            
            #top_text
            {
                
                
                position: absolute;
                width: 100%;
                height: 100%;
                top:0%;
                left: 0%;
                font-size: 20px;
                font-family: sans-serif;
                color: white;
                text-align: center;
                padding-top: 15px;
                
                
                
                
            }
            
            
        
        #course_
            {
                position: relative;
                width: 95%;
                left: 2%;
                height: 18%;
                top: 3%;
                margin-bottom: 10px;
                background-color: white;
                
                border: 2px solid black;
                
            }
        
        .cs_style
            {

            position: absolute;
                width: 20%;
                height: 30%;
                top: 20%;
                left: 1%;
                background-color: ;
                text-align: center;
                color: black;
                font-size: 25px;
                
                
            
            }
            
            #cs_name
            {
              left: 20%;
                width: 30%;
                font-size: 18px;
                border-left: 1px solid black;
                
            }
             #cs_class
            {
                left: 50%;
                
                  border-left: 1px solid black;
                  border-right: 1px solid black;
            }
            #cs_dept
            {
                
                left: 75%;
                
            }
            
            #show_students
            {
                
                position: absolute;
                top: 70%;
                height: 30%;
                width: 100%;
                left: 0%;
                background-color: darkslateblue;
               color: white;
                border: 1px solid black;
                font-size: 18px;
           
                
                
            }
            #show_students:hover
            {
                 background-color: #4d4dff;
                color: black;
            }
            
            
            #expand
            {
                
                display: none;
                display: none;
                position: relative;
                width: 95%;
                left: 2%;
                height: 40%;
                border: 2px solid black;
                color: white;
                background-color: white;
                border-top: 0px;
            }
            
                #hide_students
            {
                
                position: absolute;
                top: 85%;
                height: 15%;
                width: 100%;
                left: 0%;
                background-color: darkslateblue;
               color: white;
                border: 1px solid black;
                font-size: 18px;
           
                
                
            }
           .capture
            {
                
                
                position: absolute;
                width: 80%;
                height: 80%;
                top: 6%;
                left: 10%;
               padding: 20px;
  background: rgb(54,54,54); /* for IE */
  background: rgba(54,54,54,0.97);
             border: 2px solid white;
            }
            
            
            
            #captxt
            {
                position: absolute;
                width: 100%;
                height: 10%;
                font-size: 25px;
                color: white;
                text-align: center;
            top: 4%;
                left: 0%;
                
                
            }
            #course_dets
            {
                position: absolute;
                width: 80%;
                height: 50%;
                left: 10%;
                top: 30%;
                background-color: white;
                
                
                
            }
            
            #c_details
            {
                position: absolute;
                top: 2%;
                left: 0%;
                width: 100%;
                height: 20%;
                background-color: ;
                
                
                
            }
            
            .c_fonts
            {
                
                position: absolute;
                width: 25%;
                height: 50%;
                top: 0%;
                font-size: 18px;
                color: blue;
                padding-left: 8px;
                
                
            }
            
            #f1
            {
                left: 0%;
                border-left: 1px solid black;
                
            }
             #f2
            {
                left: 25%;
                border-left: 1px solid black;
                width: 30%;
            }
             #f3
            {
                left: 60%;
                border-left: 1px solid black;
                
            }
             #f4
            {
                width: 20%;
                left: 85%;
                border-left: 1px solid black;
                
            }
            
            #ins_bldng
            {
                
                position: absolute;
                width: 100%;
                font-family: serif;
                font-size: 20px;
                color: black;
                background-color: black;
                top: -30%;
                height: 30%;
                color: white;
                text-align: center;
                
            }
            #back
            {
                position: absolute;
                width: 10%;
                height: 8%;
                background-color: white;
                color: green;
                font-size: 28px;
                text-align: center;
                padding-top: 2px;
                text-decoration: none;
                top: 90%;
                left: 45%;
                
                
            }
          #back a
            {                text-decoration: none;
                        color: red;
             
            }
        </style>
        
        <script>
        
        function cs_show(m)
            
            {
                
                if (m == 0 )
                    {
                        
                        document.getElementById('expand').style.display="block";
                        document.getElementById('show_students').style.display= "none";
                        
                    }
                
                 
                if (m == 1 )
                    {
                        
                        document.getElementById('expand').style.display="none";
                        document.getElementById('show_students').style.display= "block";
                        
                    }
                
                
                
            }
        
        
        
        </script>
        
    </head>
    
    
    <body>
    
        
        <div id  = "container">
        
            <div id = "left">
                
                <div id  = "logo">
                    <div id ="pic">
                      <img src="logo.png" >
                    </div>
                    <div id ="text">
                    
                    EUROPEAN UNIVERSITY OF LEFKE MANAGEMENT SYSTEM
                    </div>
                    
                </div>
            
                    <div id ="photo">
                
              <img src ="stdicon.png";>
                    </div>
              
                <div  id  = "label" >
                
                <div id ="txt">
                    
                    student: Tadiwa
                    
                    </div>
                
                </div>
                
          </div>
                
                
           
            
            <div id = "top_bar">
            
             <div id = "top_text">
                
              REGISTERED COURSES
                
                
                </div>
                
            </div>
            
            
            
            <div  class = "main" >
            
          
               
                   <?php 
               
                      
   
                       $idid = 164466;
                
                        
                        
                         $conn = mysqli_connect('localhost','root','','univ');


     

        $sql = "SELECT * FROM takes where ID = '$idid' ";
        $result = mysqli_query ($conn,$sql);


        while ( $row = mysqli_fetch_array($result) )
            
        {
               
               
               
               
               echo '
               
               
             
                <div>     <div id = "course_" >
               
                 
               
                
                    <div id = "cs_id"   class = "cs_style"   >  '.$row['course_id'].'  </div> ';
            
            
          $c_id = $row['course_id'];
        $sql2 = "SELECT * FROM course where course_id = '$c_id' ";
        $result2 = mysqli_query ($conn,$sql2);


         $row2 = mysqli_fetch_array($result2) ;
            
            
            
            
            echo'
                  
                  
                  <div id  = "cs_name"     class = "cs_style" > '.$row2['title'].' </div>
                  
                  <div id  = "cs_class"   class = "cs_style"   >  '.$row2['dept_name'].' </div>
                  
                  <div id = "cs_dept"  class = "cs_style"   >  '.$row['semester'].'  </div>
          
           
              
               
               
               <a href ="loadscourse.php?crs='.$row['course_id'].'"> <button type="button" id  ="show_students" onclick="cs_show()">  check out course details   </button></a>
                </div>
            
                   </div> 
         
               ';
                    
        }
                    ?>
                
                
         <!--   <div id = "expand">
            
            
             <button type="button" id  ="hide_students" onclick="cs_show(1)" >  hide info  </button>
            
            
            </div>

-->
        
           
           
                
                
            </div>
          <div class = "capture">
                
             <div id= "captxt">
        <?php          
                        
                        
                     $crs = $_GET['crs'];
   
                 echo '       
                        
        '.$crs.'
        
        
        ';
        ?>
             </div>
        
             
              <div id = "course_dets">
              
                          <div id ="c_details">
                  
                                    <div class = "c_fonts"    id = "f1">  course ID </div>
                                    <div class = "c_fonts"    id = "f2"> title </div>
                                    <div class = "c_fonts"    id = "f3">  department name </div>
                                    <div class = "c_fonts"    id = "f4">  credits </div>
                                    
                  
                                </div>
                  
                  
                  
                  
                             
               <?php          
                        
                        
                     $crs = $_GET['crs'];
   
                        
                        
                        
                         $conn = mysqli_connect('localhost','root','','univ');


        $COURSE = $crs;

        $sql = "SELECT * FROM course where course_id = '$COURSE' ";
        $result = mysqli_query ($conn,$sql);


      



       $row = mysqli_fetch_array($result) ;
            
               
                  
                  
                  
                  
                  
                  
                  echo '
                            <div id ="c_details" style="top:10%; height:30%; ">
                  
                                    <div class = "c_fonts"    id = "f1"   style=" font-size:25px; color:black; padding:5px; " >  '.$row['course_id'].' </div>
                                    <div class = "c_fonts"    id = "f2" style=" font-size:25px; color:black; padding:5px;" >  '.$row['title'].' </div>
                                    <div class = "c_fonts"    id = "f3" style=" font-size:25px; color:black; padding:5px;" >  '.$row['dept_name'].' </div>
                                    <div class = "c_fonts"    id = "f4" style=" font-size:25px; color:black; padding:5px;" >   '.$row['credits'].' </div>
                                    
                  
                                </div>
              
              
                  ';
                  
                  
        $sql2 = "SELECT * FROM section where course_id = '$COURSE' ";
        $result2 = mysqli_query ($conn,$sql2);

       $row2 = mysqli_fetch_array($result2) ;
            
            $sql3 = "SELECT * FROM teaches where course_id = '$COURSE' ";
        $result3 = mysqli_query ($conn,$sql3);

       $row3 = mysqli_fetch_array($result3) ;
            $ins_id = $row3['ID'];
                   
                
                  
                  
                    $sql4 = "SELECT * FROM instructor where ID= '$ins_id' ";
        $result4 = mysqli_query ($conn,$sql4);

       $row4 = mysqli_fetch_array($result4) ;  
                  
                  
                  
                  echo '  
                  
                  <div id = "ins_bldng">
                      
                      
                      <strong> instructor: </strong> Prof. Dr '.$row4['name'].' <br><strong> building: </strong>'.$row2['building'].' <br> <strong> room: </strong> '.$row2['room_no'].'
                      
                      </div>
                  ';
                  
                  
                  ?>
              </div>
              
               
              <div id ="back" > <a href ="student.php"> close </a></div>
               
            </div> 
             
        </div>
    
       
    </body>
    
    


</html>