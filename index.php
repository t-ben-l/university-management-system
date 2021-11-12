<!DOCTYPE>


<html>

    <head>



        <style>


            body {

                width: 700px;
                height: 600px;
                background-color: grey;

            }

            #image
            {
                position: absolute;
                width: 40%;
                height: 80%;
                top: 10%;
                left: 10%;
                background-color: white;
                border: 3px solid  #00001a;
                box-shadow: 10px 10px 10px black;


            }
           #logo
            {
                position: absolute;
                width: 50%;
                height: 40%;
                left: 25%;
                top: 35%;

            }

            #txt1
            {
                  position: absolute;
                width: 80%;
                height: 30%;
                left: 10%;
                top: 2%;

                font-size: 35px;
                font-family: serif;
                text-align: center;
                color: #00004d;

            }
            #logo img
            {
                width: 100%;;
                height: 100%;

            }

            #text
            {
                position: absolute;
                width: 100%;
                left: 0%;
                text-align: center;
                height: 10%;
                top: 80%;
                color: orange;
                font-size: 23px;

             -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration:1s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 5s;
                animation-iteration-count: infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}

/* Standard syntax */
@keyframes example {
  0%   {color: #ffeb99;}
  20%  {color: #ffdb4d;}
      40%  {color:#e6b800;}
    50% {color: orange;}
    60% {color: #e6b800}
  80%  {color: #ffdb4d;}
  100% {color:  #ffeb99;}
}

            #left
            {
                 position: absolute;
                width: 30%;
                height: 80%;
                top: 10%;
                left: 53%;
                background-color: white;
                border: 3px solid  #00001a;
                box-shadow: 10px 10px 10px black;



            }

            #form
            {
                position: absolute;
                width: 90%;
                height: 60%;
                top: 2%;
                left: 5%;
                background-color:;



            }


            .label
            {
                position: absolute;
                width: 23%;
                height: 10%;
                font-size: 20px;
                font-family: serif;
                text-align: left;
                background-color: white;


            }

            #l1
            {
                top: 2%;
                text-align: center;
                left: 35%;
                font-size: 25px;

            }
              #ll
            {
                top: 18%;
                text-align: center;
                left: 0%;
                width: 100%;
                color: red;
                background-color: ;
                font-size: 18px;

            }

            #l2
            {
                top: 30%;


            }
            #l3{
                top: 60%;

            }
             #l4{
                top: 88%;
                 width: 50%;

            }
            .input
            {
                position: absolute;
                width: 100%;
                height: 12%;

                box-shadow: 5px 5px 5px #00004d;
               border: 1px solid #00004d;

            }

            #user
            {
                top: 40%;

            }

            #pass{
                top: 70%;
            }

            #btn
            {
                top: 100%;

                background-color: #00004d;
                color: white;
                font-family: serif;
                text-align: center;
                padding: 5px;
                font-size: 25px;
                left: -2%;
            }
        </style>
    </head>




    <body>

        <div id  = "image" >

            <div id = "txt1">
            Welcome to the<br>

European University of Lefke<br>
                school management system
            </div>
            <div id = "logo">

                <img src="Lefke.jpg">
            </div>


            <div id  = "text">

            "The right choice to be a step ahead"
            </div>


        </div>

    <div id = "left">


        <div id  = "form" >

        <div class = "label" id = "l1"> login </div>






        <div class = "label" id = "l2"> user name </div>

        <div class = "label" id = "l3"> password </div>

            <form action="log.php" method="post" >

        <div class = "label" id = "l4"> <input type="checkbox" name="remember" value=1 >remember me  </div>


            <input  type ="text" name="username" class = "input" id = "user" >
            <input  type ="password" name="password" class = "input" id = "pass" >
            <button type="submit" name="login" class = "input" id = "btn"  > log in </button>


            </form>

        </div>




        </div>

    </body>

</html>
