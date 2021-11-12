

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

            .options
            {
                position:relative;
                top: 15%;
                left: 2%;
                width: 102%;
                height: 7%;
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





             .options:hover
            {

                background-color: #003399;
                color: white;



            }


            .options:active{

                background-color: #4d4dff;
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

            #main_teacher
            {


            }

            #main_student
            {
              background-color: #8c8c8c;
                display: none;
            }

            #main_course
            {
                background-color: #666666;
                display: none;
            }
            .cover
            {
                position: absolute;
                width: 100%;
                height: 107%;
                background-color: transparent;
                border: none;

            }

            .cover:focus
            {

                border-bottom:  3px solid #00001a;
            }
            .content_block
            {
                position: relative;
                width: 90%;
                height: 20%;
                left: 2%;
                top:3%;
                margin-bottom: 10px;
                background-color: white;
            }

            #block_image
            {
                position: absolute;
                width: 13%;
                height: 95%;
                top: 2.5%;
                left: 3%;
                background-color: transparent;

            }


                        #block_text
            {
                position: absolute;
                width: 50%;
                height: 95%;
                top: 2.5%;
                left: 18%;
                background-color: white;
                text-align: left;
                font-size: 17px;
                color: black;
                font-family: serif;

            }
              #block_assign
            {
                position: absolute;
                width: 20%;
                height: 50%;
                top: 25%;
                left: 75%;
               background-color: #003399;
                text-align: center;
                font-size: 15px;
                font-family: serif;
                color: white;
                border: none;

            }
               #block_assign:hover
            {

                background-color: #003399;
                color: white;



            }


             #block_assign:active{

                background-color: #4d4dff;
            }
            #block_image img
            {
                width: 100%;
                height: 100%;
            }
             .capture
            {

                display: none;
                position: absolute;
                width: 80%;
                height: 80%;
                top: 10%;
                left: 10%;
               padding: 20px;
  background: rgb(54,54,54); /* for IE */
  background: rgba(54,54,54,0.97);
             border: 2px solid white;
            }


            .close
            {
                position: absolute;
                width: 5%;
                height: 5%;
                left: 94%;
                top: 0%;
                background-color: black;
                color: red;
                font-size: 18px;
                border: none;
            }

            .close:hover
            {
              background-color: red;
                color: black;

            }

            .capture h1
            {
                position: absolute;
                width: 100%;
                top: 0%;
                text-align: center;
                height: 10%;
                font-family: serif;
                color: white;
                text-decoration: underline;
            }


            .formstyle
            {

                position: relative;
                width: 80%;
                height: 8%;
                top: 20%;
                left: 5%;
                background-color: ;
                   margin-bottom: 10px;
            }

             .formstyle label
            {
                position: absolute;
                width: 30%;
                top: 20%;
                height: 60%;
                left: 0.5%;
                font-size: 18px;
                font-family: monospace;
               color: white;
                text-align: left;

            }


             .formstyle input,select
            {
                position: absolute;
                width: 60%;
                top: 10%;
                height: 80%;
                left: 33%;
                font-size: 15px;
                font-family: monospace;
               color: black;
                text-align: left;
                background-color: white;
                border: 1px solid grey;
                border-radius: 5%;

                border: 1px solid #4d4dff;

            }
            #sub_btn
            {
                position: absolute;
                width: 10%;
                height: 5%;
                background-color: white;
                color: black;
                left: 89%;
                top: 90%;

            }

            #ff
            {

                position: absolute;
                width: 96%;
                height: 80%;
                top: 13%;
                background-color;


            }
            #enclose
            {
                position :relative;
                top:10%;
                background-color:;
            }

            #course_top
            {
                position: absolute;
                width: 100%;
                top: 0%;
                height: 5%;



            }

            .c_text
            {
                position: absolute;
                width: 20%;
                height: 100%;
                font-family:sans-serif;
                font-size: 18px;
                text-align: center;

                border-left: 1px solid white;

                color: white;
                padding-top: 5px;

                  border-bottom: 2px solid black;
            }

            #c_id, #cc_id
            {
                left:0%;
                border-left: none;
                  font-size: 16px;
            }
            #c_dept, #cc_dept
            {
                left: 20%;

            }
            #c_title ,#cc_title
            {
                left: 40%;
                width: 25%;

                  font-size: 15px;
            }
            #c_credit ,#cc_credit
            {
                left: 65%;
                width: 10%;
            }

            #c_count
            {
                left: 78%;
                width: 20%;
                font-size: 13px;
                color: lightgreen;
                border-bottom: none;
                background-color:;
            }


            #c_database
            {
               position: relative;
                width: 100%;
                top: 10%;
                height: 7%;
                margin-bottom: 5px;
                background-color: white;


            }

             #c_database #cc_id,#cc_dept,#cc_title,#cc_credit,#cc_database
            {
                color: black;

                border-left:1px solid  black;
                border-right:1px solid  black;

            }

            #c_btn
            {
                position: absolute;
                width: 15%;
                height: 90%;
                top: 5%;
                background-color: lightgreen;
                color: black;
                font-family: sans-serif;
                font-size: 15px;
                text-align: center;
                left: 76%;
            }

            #deletee
            {
                position: absolute;
                width: 4%;
                height: 60%;
                top: 10%;
                background-color: red;
                color: white;
                font-family: sans-serif;
                font-size: 10px;
                text-align: center;
                left: 0.5%;
                border:none;
            }

            #deletee:hover
            {

              background-color: black;
              color: red;
height: 70%;
            

}
             #logout_
            {
                background-color: aliceblue;
                color: black;
                position: absolute;
                width: 50%;
                height: 5%;
                left: 25%;
                top: 90%;
                text-align: center;
                font-size: 18px;
                font-family: serif;padding-top: 5px;
                box-shadow: 10px 10px 10px grey;
                border-radius: 10px;

            }

            #logout_:hover
            {
             background-color: #4d4dff;
                color: white;
                border: 2px solid white;
            }s
        </style>


        <script>


         function capture(x)
            {

                 if (x == 0)
                   {


                                    document.getElementById('capture_teacher').style.display='block' ;
                                    document.getElementById('capture_student').style.display='none' ;
                                    document.getElementById('capture_course').style.display='none' ;

                   }
                if (x==1)
                    {


                       document.getElementById('capture_student').style.display='block' ;
                         document.getElementById('capture_teacher').style.display='none' ;
                        document.getElementById('capture_course').style.display='none' ;
                    }
                if (x==2)
                    {
                                    document.getElementById('capture_teacher').style.display='none' ;
                                    document.getElementById('capture_student').style.display='none' ;
                                    document.getElementById('capture_course').style.display='block' ;
                    }
                 if (x==3)
                    {
                                    document.getElementById('capture_teacher').style.display='none' ;
                                    document.getElementById('capture_student').style.display='none' ;
                                    document.getElementById('capture_course').style.display='none' ;
                        document.getElementById('capture_assign').style.display='block' ;

                    }


                 if (x==4)
                    {
                                    document.getElementById('capture_teacher').style.display='none' ;
                                    document.getElementById('capture_student').style.display='none' ;
                                    document.getElementById('capture_course').style.display='none' ;
                        document.getElementById('capture_assign').style.display='none' ;
                         document.getElementById('capture_assign_std').style.display='block' ;

                    }




                 if (x==5)
                    {
                      document.getElementById('capture_teacher').style.display='none' ;

                      document.getElementById('capture_student').style.display='none' ;

                      document.getElementById('capture_course').style.display='none' ;

                         document.getElementById('capture_assign').style.display='none' ;
                         document.getElementById('capture_assign_std').style.display='none' ;
                    }

            }

         function main(x)
            {




                if (x==1)
                   {


                      document.getElementById('main_teacher').style.display='block' ;

                      document.getElementById('main_student').style.display='none' ;

                      document.getElementById('main_course').style.display='none' ;
                   }





                if (x==2)
                   {


                      document.getElementById('main_teacher').style.display='none' ;

                      document.getElementById('main_student').style.display='block' ;

                      document.getElementById('main_course').style.display='none' ;
                   }







                if (x==3)
                   {


                      document.getElementById('main_teacher').style.display='none' ;

                      document.getElementById('main_student').style.display='none' ;

                      document.getElementById('main_course').style.display='block' ;
                   }






            }
        </script>

    </head>


    <body>


        <div id  = "container">

          <!-- ------------------------------------------------------------ -->
          <!-- ------------------------------------------------------------ -->
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

              <img src ="user.png">
                    </div>

                <div  id  = "label" >

                <div id ="txt">


               <?php




$name = $_SESSION["username"] ;


                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM admin where name = '.$name.' ";
        $result = mysqli_query ($conn,$sql);


      echo '

                    admin : '.$name.'

                   ';

                        ?>




                    </div>

                </div>
              <div id="enclose">

                <button type="button" onclick="capture(0)"  class = "options" >

              ADD NEW TEACHER



                </button>



                <button type="button" onclick="capture(1)"  class = "options" >

              ADD NEW STUDENT


                </button>






                <button type="button"   onclick="capture(2)"  class = "options" >


                ADD NEW COURSE



                </button>


                <button type="button"   onclick="capture(3)"  class = "options" >

           ASSIGN COURSE TO INSTRUCTOR


                </button>


                <button type="button"   onclick="capture(4)"  class = "options" >

           ASSIGN STUDENT TO COURSE


                </button>

                 </div>

                 <a href = "index.php" >   <div  id = "logout_">  log out </div>   </a>


            </div>



          <!-- ------------------------------------------------------------ -->
          <!-- ------------------------------------------------------------ -->

            <div id = "top_bar">

               <div id ="teachers" class  = "menu">

                <div id  = "tb_icon">
                  <img src="teacher.png">

                   </div>

                   <div  id  = "tb_txt">

                   TEACHERS
                   </div>


                  <button type="button" onclick="main(1)" class = "cover" >  </button>




                </div>




                 <div id ="courses" class  = "menu">

                <div id  = "tb_icon">
                  <img src="course.png">

                   </div>

                   <div  id  = "tb_txt">

                  COURSES
                   </div>


                  <button type="button" onclick="main(3)" class = "cover" >  </button>



                </div>

                 <div id ="students" class  = "menu">

                <div id  = "tb_icon">
                  <img src="student.png">

                   </div>

                   <div  id  = "tb_txt">
                   STUDENTS
                   </div>


                  <button type="button" onclick="main(2)" class = "cover" >  </button>



                </div>
            </div>



          <!-- ------------------------------------------------------------ -->
          <!-- ------------------------------------------------------------ -->


            <div  class = "main" id = "main_teacher" >













               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM instructor ORDER BY id DESC";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {
                      $_id_ = $row['ID'];

        echo '  <div class = "content_block">

                    <div id = "block_image">

                <img src =user.png>
                    </div>
                ';

           echo '<div id = "block_text">';

            echo 'ID : '.$row['ID'].'</br> ';
            echo 'name : '.$row['name'].' </br> ';
            echo 'depatment name :'.$row['dept_name'].' </br> ';
             echo 'salary :'.$row['salary'].' <br> ';


             echo'
                             <button   type="submit" name="_student_" id = "deletee" style = "position:absolute; left:105%; width:20%; font-size:15px;" > delete </button>

                             </form>   ';
        echo ' </div> </div> ';
       //              <button type="button" id  = "block_assign" >  ASIGN COURSE </button>



        }

            $conn->close();
                ?>





            </div>





          <!-- ------------------------------------------------------------ -->


            <div  class = "main" id = "main_student" >






               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM student ORDER BY id DESC";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {

                            $_id_ = $row['ID'];

        echo '  <div class = "content_block">

                    <div id = "block_image">

                <img src =stdicon.png>
                    </div>
                ';

           echo '<div id = "block_text">';

            echo 'ID : '.$row['ID'].'</br> ';
            echo 'name : '.$row['name'].' </br> ';
            echo 'depatment name :'.$row['dept_name'].' </br> ';
             echo 'total credit :'.$row['tot_cred'].' <br> ';

   echo  ' <form action="actt.php?_id_='.$_id_.'" method="post" >


      <button   type="submit" name="_student_" id = "deletee" style = "position:absolute; left:85%; width:20%; font-size:15px;" > delete </button>

      </form>   ';

         echo ' </div> </div> ';
                 //    <button type="button" id  = "block_assign" >  ASIGN COURSES </button>


        }



            $conn->close();
                ?>




            </div>


          <!-- ------------------------------------------------------------ -->
            <div  class = "main" id = "main_course" >



               <div id ="course_top">

                <div class = "c_text" id = "c_id">  id   </div>
                <div class = "c_text" id = "c_dept"> department name    </div>
                   <div class = "c_text"  id = "c_title">   title </div>
                   <div class = "c_text"  id = "c_credit">  credit  </div>

               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM course ";
        $result = mysqli_query ($conn,$sql);




$count = 0;

        while ( $row = mysqli_fetch_array($result) )
        {$count++;}

               echo ' <div class = "c_text"  id = "c_count">  *number of courses = '. $count .'   </div>
                     ';

            $conn->close();
                ?>

                </div>












               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM course ";
        $result= mysqli_query ($conn,$sql);




$count = 1;

        while ( $row = mysqli_fetch_array($result) )
        {

                  $_id_ = $row['course_id'];
        echo '
               <div id ="c_database">

                <div class = "c_text" id = "cc_id"> '.$count++.'.  '.$row['course_id'] . '  </div>
                <div class = "c_text" id = "cc_dept"> '.$row['dept_name'] . '   </div>
                   <div class = "c_text"  id = "cc_title">    '.$row['title'] . '</div>
                   <div class = "c_text"  id = "cc_credit"> '.$row['credits'] . '</div>';


            $cid = $row['course_id'];
        $sql2 = "SELECT * FROM teaches  where course_id = '$cid' ";
        $result2= mysqli_query ($conn,$sql2);


            if (mysqli_num_rows($result2) > 0)

            {



                           $row2 = mysqli_fetch_array($result2) ;

                                                $i_id = $row2['ID'];

                                         $sql3 = "SELECT * FROM instructor  where ID  = '$i_id' ";
                                            $result3 = mysqli_query ($conn,$sql3);

                                                     $row3 = mysqli_fetch_array($result3) ;

                                             echo' <button type="button" id  = "c_btn" >  '.$row3['name'] . '</button>';


                                          echo  ' <form action="actt.php?_id_='.$_id_.'" method="post" >


                                             <button type="submit" name="deletee" id = "deletee"  > delete </button>

                                             </form>   ';

                     }



            else
            {
                echo' <button type="button" id  = "c_btn"  style="background-color: red; color:white;" >  UN ASSIGNED </button>';



                echo  ' <form action="actt.php?_id_='.$_id_.'" method="post" >


                   <button type="submit" name="deletee" id = "deletee"  > delete </button>

                   </form>   ';


            }

                 echo '</div>';
        }



            $conn->close();
                ?>














            </div>






            </div>

          <!-- ------------------------------------------------------------ -->
           <div  class ="capture" id = "capture_teacher"  >
                  <button type="button" onclick="capture(5)"  class = "close" > X </button>
                <h1> ENTER NEW TEACHERS DETAILS </h1>

                <div id = "ff">
                    <form method = "post" action = "submitinstructor.php">

                        <div class="formstyle" id = "instructor_id" >
                        <label for ="instructor_id"> enter instructor id : </label>

                             <input type="text" name="instructor_id" placeholder ="instructor id"> <br>


                                </div>
                            <div class="formstyle" id = "instructor_name" >

                                   <label for ="instructor_name"> enter instructor name: </label>
                                <input type="text" name="instructor_name" placeholder ="instructor name "><br>

                 </div>
                        <div class="formstyle" id = "instructor_department" >

                                   <label for ="department"> enter instructor department : </label>



                            <select name="dept_name"    >
  <option value="physics">physics</option>
  <option value="finance">finance</option>
  <option value="history">history</option>
  <option value="comp. sci.">  computer science  </option>
       <option value="biology">  biology  </option>

  <option value="music">music</option>
  <option value="elec. eng.">  electrical engineering  </option>
  <option value="software">software enginering</option>

</select>




                            <br>

                 </div>
                        <div class="formstyle" id = "instructor_salary" >

                                   <label for ="course_title"> enter instructor salary  : </label>
                                <input type="text" name="instructor_salary" placeholder ="instructor salary "><br>

                 </div>

                         <input id = "sub_btn" name= "subinstructor" type="submit" value="save">

                    </form>
 </div>

               </div>


          <!-- ------------------------------------------------------------ -->
           <div  class ="capture" id = "capture_student" >
               <button type="button" onclick="capture(5)"  class = "close" > X </button>
                   <h1> ENTER NEW STUDENTS DETAILS</h1>

               <div id="ff">

                 <form method = "post" action="submitstudent.php">

                        <div class="formstyle" id = "student_id" >
                        <label for ="student_id"> enter student id : </label>

                             <input type="text" name="student_id" placeholder ="student id"> <br>


                                </div>
                            <div class="formstyle" id = "student_name" >

                                   <label for ="student_name"> enter student name : </label>
                                <input type="text" name="student_name" placeholder ="student name "><br>

                 </div>
                        <div class="formstyle" id = "istudent_department" >

                                   <label for ="department"> enter student department : </label>
                                                       <select name="dept_name"    >
  <option value="physics">physics</option>
  <option value="finance">finance</option>
  <option value="history">history</option>
  <option value="comp. sci.">  computer science  </option>
       <option value="biology">  biology  </option>

  <option value="music">music</option>
  <option value="elec. eng.">  electrical engineering  </option>
  <option value="software">software enginering</option>

</select><br>

                 </div>
                        <div class="formstyle" id = "student_tot_credit" >

                                   <label for ="tot_credit"> student total credit : </label>
                                <input type="text" name="tot_credit" placeholder ="student tot_cred"><br>

                 </div>

                         <input id = "sub_btn" name= "substudent" type="submit" value="save">

                    </form>
               </div>






               </div>



            <!-- --------------------------------------------------------- -->

           <div  class ="capture" id = "capture_course" >
               <button type="button" onclick="capture(5)"  class = "close" > X </button>
                   <h1> ENTER NEW CAURSE</h1>


               <div id ="ff">
                    <form method = "post" action="submitcourse.php">

                        <div class="formstyle" id = "course_id" >
                        <label for ="course_id"> enter course id : </label>

                             <input type="text" name="course_id" placeholder ="course id"> <br>


                                </div>
                            <div class="formstyle" id = "course_title" >

                                   <label for ="course_title"> enter title : </label>
                                <input type="text" name="title" placeholder ="title"><br>

                 </div>
                        <div class="formstyle" id = "course_department" >

                                   <label for ="department"> enter department name : </label>
                                                     <select name="dept_name"    >
  <option value="physics">physics</option>
  <option value="finance">finance</option>
  <option value="history">history</option>
  <option value="comp. sci.">  computer science  </option>
       <option value="biology">  biology  </option>

  <option value="music">music</option>
  <option value="elec. eng.">  electrical engineering  </option>
  <option value="software">software enginering</option>

</select><br>

                 </div>
                        <div class="formstyle" id = "course_credit" >

                                   <label for ="course_title"> enter course credit  : </label>
                                <input type="text" name="credits" placeholder ="credit"><br>

                 </div>

                         <input id = "sub_btn" name = "subcourse" type="submit" value="Submit">

                    </form>

               </div>

               </div>
            <!-- ---------------------------------------------------------- -->
         <div  class ="capture" id = "capture_assign"  >
                  <button type="button" onclick="capture(5)"  class = "close" > X </button>
                <h1> ASSIGN COURSE TO TEACHER </h1>


               <div id = "ff">
                    <form method = "post" action = "assigncourse.php">

                        <div class="formstyle" id = "instructor_id" >
                        <label for ="instructor_id"> select instructor : </label>


                            <!-- loop for select instructor -->

                     <select name="instructor_id" >




               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM instructor ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {

        echo '


                <option value ="'.$row['ID'].'" > '.$row['ID'].' - '.$row['name'].'   </option>




          ';
        }



            $conn->close();
                ?>



                 </select>




                            <!--  loop ends here -->



                                </div>




                            <div class="formstyle" id = "select_course" >

                                   <label for ="course_selection"> select course : </label>






                                  <select name="course_id" >




               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM section ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {

            $cos_ = $row['course_id'];

        $sql2 = "SELECT * FROM teaches where course_id = '$cos_' ";
        $result2 = mysqli_query ($conn,$sql2);

              $sql3 = "SELECT * FROM course where course_id = '$cos_' ";
        $result3 = mysqli_query ($conn,$sql3);

            $row3 = mysqli_fetch_array($result3);

               if  ( mysqli_num_rows ($result2) == 0)

                 {
                      if  ( mysqli_num_rows ($result2) == 0 && $row['year'] == 2010 )

                 {
               /*
                echo '


                <option style ="background-color:blue; color:white;" value ="'.$row['course_id'].'" > '.$row['course_id'].' - '.$row['title'].'  - '.$row['year'].'  </option>




          ';
              */

               }
                   else
                   {



                echo '


                <option style ="background-color:; color:;" value ="'.$row['course_id'].'" > '.$row['course_id'].' - '.$row3['title'].'    </option>




          ';             }
               }

            else
            {/*
        echo '


                <option style ="background-color:green; color:white;" value ="'.$row['course_id'].'" > '.$row['course_id'].' - '.$row['title'].'  - '.$row['year'].'  </option>




          '; */}
        }



            $conn->close();
                ?>



                 </select>
                            </div>
                        <!---------------->


                               <div class="formstyle" id = "sec_id" >
                                   <label for ="sec_selection"> select sec_id: </label>






                                  <select name="sec_id" >




               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM section ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {

        echo '



                <option value ="'.$row['sec_id'].'" > '.$row['sec_id']. '  </option>


          ';
        }



            $conn->close();
                ?>



                 </select>




                                <!------------------------------>

                                </div>


             <!------------------------------------------------->








                               <div class="formstyle" id = "semester_" >
                                   <label for ="semester_selection"> select semester: </label>






                                  <select name="semester" >

                          <option value ="Fall" > fall</option>


                          <option value ="Spring" >spring </option>






                 </select>





                                </div>






                            <div class="formstyle" id = "year_selection" >
                                   <label for ="year_selection"> select year: </label>






                                  <select name="year" >




               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM section ";
        $result = mysqli_query ($conn,$sql);



$year1=0000;

    $year2 = 1;
      $bool = true;


        while ( $row = mysqli_fetch_array($result) )
        {

            if ($year1!=$year2)

            {


             echo '



                <option value ="'.$row['year'].'" > '.$row['year']. '  </option>


          ';



                $year1 = $row['year'];
            }
            else
            {

       $year1 = $row['year'];
            }
            if ($bool == true )
            {
                $year2  = $year1;
                    $bool = false;

            }
        }



            $conn->close();
                ?>



                 </select>




                                <!------------------------------>

                                </div>






                        <!---------------------------------------------------------------------->


              <input id = "sub_btn" name = "asscourse" type="submit" value="Submit">




                   </form>

        </div>
             </div>

        <!-- ---------------------------------------------------------------------- -->



               </div>
            <!-- ---------------------------------------------------------- -->
         <div  class ="capture" id = "capture_assign_std"  >
                  <button type="button" onclick="capture(5)"  class = "close" > X </button>
                <h1> ASSIGN STUDENT TO COURSE </h1>


               <div id = "ff">
                    <form method = "post" action = "assignstudent.php">

                        <div class="formstyle" id = "student_id" >
                        <label for ="student_id"> select student : </label>


                            <!-- loop for select instructor -->

                     <select name="student_id" >




               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM student ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {

        echo '


                <option value ="'.$row['ID'].'" > '.$row['ID'].' - '.$row['name'].'   </option>




          ';
        }



            $conn->close();
                ?>



                 </select>




                            <!--  loop ends here -->



                                </div>




                            <div class="formstyle" id = "select_course" >

                                   <label for ="course_selection"> select course : </label>






                                  <select name="course_id" >




               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM section ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {

        echo '


                <option value ="'.$row['course_id'].'" > '.$row['course_id'].' - '.$row['title'].'  - '.$row['year'].'  </option>




          ';
        }



            $conn->close();
                ?>



                 </select>
                            </div>
                        <!---------------->


                               <div class="formstyle" id = "sec_id" >
                                   <label for ="sec_selection"> select sec_id: </label>






                                  <select name="sec_id" >




               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM section ";
        $result = mysqli_query ($conn,$sql);






        while ( $row = mysqli_fetch_array($result) )
        {

        echo '



                <option value ="'.$row['sec_id'].'" > '.$row['sec_id']. '  </option>


          ';
        }



            $conn->close();
                ?>



                 </select>




                                <!------------------------------>

                                </div>


             <!------------------------------------------------->








                               <div class="formstyle" id = "semester_" >
                                   <label for ="semester_selection"> select semester: </label>






                                  <select name="semester" >

                          <option value ="Fall" > fall</option>


                          <option value ="Spring" >spring </option>






                 </select>





                                </div>






                            <div class="formstyle" id = "year_selection" >
                                   <label for ="year_selection"> select year: </label>






                                  <select name="year" >




               <?php






                         $conn = mysqli_connect('localhost','root','','univ');



        $sql = "SELECT * FROM section ";
        $result = mysqli_query ($conn,$sql);



$year1=0000;

    $year2 = 1;
      $bool = true;


        while ( $row = mysqli_fetch_array($result) )
        {

            if ($year1!=$year2)

            {


             echo '



                <option value ="'.$row['year'].'" > '.$row['year']. '  </option>


          ';



                $year1 = $row['year'];
            }
            else
            {

       $year1 = $row['year'];
            }
            if ($bool == true )
            {
                $year2  = $year1;
                    $bool = false;

            }
        }



            $conn->close();
                ?>



                 </select>




                                <!------------------------------>

                                </div>






                        <!---------------------------------------------------------------------->


              <input id = "sub_btn" name = "asscourse" type="submit" value="Submit">




                   </form>

        </div>
             </div>

        <!-- ---------------------------------------------------------------------- -->



        <!------------------------------------------------------------>


        </div>

    </body>




</html>
