<?php
session_start();


$conn = mysqli_connect('localhost','root','','univ');


$id = $_SESSION["id"] ;
$name = $_SESSION["username"] ;

 $sql = "SELECT * FROM instructor  where ID = '$id' and name  = '$name'";
        $result = mysqli_query ($conn,$sql);
 
$numrows = mysqli_num_rows($result);


echo $id ." - ". $name;

if ($numrows == 0 )
{
        
    

    header("location:index.php");

    
}


?>
<!DOCTYPE>


<htm>


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
              left: 25%;  
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
           
                #cover_{
                    
                    
                    position: absolute;
                    width: 90%;
                    height: 80%;
                    top: 3%;
                    left: 3%;
                                  padding: 20px;
  background: rgb(54,54,54); /* for IE */
  background: rgba(54,54,54,0.97);
            }
            
            
            
            
            
            #cover_text
            {
                
                
                position: absolute;
                width: 100%;
                height: 15%;
                left: 0%;
                top: 4%;
                font-size: 25px;
                color: white;
                text-align: center;
            }
            
            
            #cover_students
            {
                
                position: absolute;
                top: 20%;
                height: 70%;
                width: 80%;
                left: 10%;
               
                background-color: #00001a;
              background-color: white;
                overflow-y: scroll;
            }
            
            
            #std
            {
                position: relative;
                width: 90%;
                left: 5%;
                height: 20%;
                top: 2%;
                margin-bottom: 10px;
                background-color: white;
               
          
               box-shadow: 10px 10px 5px grey;
                border: 2px solid black;
            }
            #std_pic {
                
                
                position: absolute;
                width: 10%;
                height: 98%;
                left: 3%;
                top: 1%;
               
                
            }
            
            #std_inf
            {
                position: absolute;
                width: 70%;
                height: 97%;
                top: 1%;
                left: 14%;
              font-size: 16px;
                font-family: serif;
                
                
                
            }
            
            #std_pic img
            {
                width: 100%;
                height: 100%;
            }
            
            #view_std
            {
                
                position: absolute;
                left: 75%;
                top: 10%;
                height: 80%;
                width: 20%;
                background-color: #3582ff;
                
            }
            
            #x
            {
                position: absolute;
                width: 5%;
                height: 5%;
                font-family: serif;
                font-size: 20px;
                text-align: center;
                color: red;
                background-color: black;
                left: 95%;
                top: 1%;
                
                
            }
            
            #x:hover
            {
                background-color: red;
                color: black;
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
                
              <img src ="ferhun.png";>
                    </div>
              
                <div  id  = "label" >
                
                <div id ="txt">
                    
                    INSTRUCTOR: PROF. DR. FERHUN 
                    
                    </div>
                
                </div>
                
          </div>
                
                
           
            
            <div id = "top_bar">
            
             <div id = "top_text">
                
                ASSIGNED COURSES 
                
                
                </div>
                
            </div>
            
            
            
            <div  class = "main" >
            
           <div >     <div id = "course_" >
                
                
                    <div id = "cs_id"   class = "cs_style"   >  COMP-123  </div>
                  
                  
                  <div id  = "cs_name"     class = "cs_style" > discrete maths  </div>
                  
                  <div id  = "cs_class"   class = "cs_style"   >   AS103   </div>
                  
                  <div id = "cs_dept"  class = "cs_style"   >   computer science  </div>
                
            <button type="button" id  ="show_students" onclick="cs_show()">  check out registered students   </button>
                </div>
              
         <!--   <div id = "expand">
            
            
             <button type="button" id  ="hide_students" onclick="cs_show(1)" >  hide info  </button>
            
            
            </div>

-->
            </div> 
                
                  
           
                
                
            </div>
          
            
        </div>
        
        
               
        
        
    <div id ="cover_">
          
           <a href="instructor.php">   <div id = "x"> X </div> </a> 
               
               
        <div id= "cover_text">
        <?php          
                        
                        
                     $crs = $_GET['crs'];
   
                 echo '       
                        
        STUDENTS TAKING -'.$crs.'
        
        
        ';
        ?>
        </div>
        
        
        <div id = "cover_students" >
        
                   
               <?php          
                        
                        
                     $crs = $_GET['crs'];
   
                        
                        
                        
                         $conn = mysqli_connect('localhost','root','','univ');


        $COURSE = $crs;

        $sql = "SELECT * FROM takes where course_id = '$COURSE' ";
        $result = mysqli_query ($conn,$sql);


      



        while ( $row = mysqli_fetch_array($result) )
            
        {
                      
            $SID = $row['ID'];
            $sql2 = "SELECT * FROM student where ID = '$SID' ";
                    $result2 = mysqli_query ($conn,$sql2);
                        $row2 = mysqli_fetch_array($result2);
                            $id =$row2['ID'];
                          echo '      
                          
                          
                          
                              <div id = "std">
            
                        <div id = "std_pic">
                         <img src = "stdicon.png" > 
                    
                        </div>
            
                    
                            <div id ="std_inf">
                                    ID: '.$row2['ID'].'  <br>
                                   NAME: '.$row2['name']. ' <br>
                                   DEPARTMENT: '.$row2['dept_name'].'  <br>
                                    TOTAL CREDIT:  '.$row2['tot_cred'].'  <br>
                                
                    
                                </div>
                    
                    
                   <a href ="studentprofile.php?x='.$id.'&crs='.$crs.'"> <button type="button" id = "view_std">  
                    
                    VIEW MORE DETAILS 
                    
                    </button></a> 
                    
            </div>
        
                          
                          
                          
                          
                          
                          
                          ' ; 

        }
        
        ?>
        
        
            
         
        </div>
           
        </div>
    
    </body>
    
    


</htm>