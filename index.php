<?php

include("dbconnect.php");
$note=$_REQUEST['note'];

 ?>


<!DOCTYPE html>
<html>
 <head>
    <title>
     </title>
     <style>
     input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
         div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
         input[type=email], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
         .submit{
  width: 25%;
  background-color: brown;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
         textarea {
  width: 50%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
         .head{
             color: brown;
             font-size: 40px;
             text-align: center;
         }
     </style>
 </head>
    <body>
      <?php
      if($note == 'Success')
      {
        echo "Form submitted successfuly thank you!";
      } ?>
        <div>
        <p class="head"> Contact From</p>
            <form class = "contact-form" action="user_process.php" name="user" method="post">

            <label for="name">Full Name</label>
            <p> <input type="text" id="name" name="name" placeholder="Your name.." required> </p>

            <label for="email">Email Address</label>
             <p><input type="text" id="email" name="email" placeholder="Your Email" required></p>

            <label for="subject">Subject</label>
            <p> <input type="text" id="subject" name="subject" placeholder="Message Subject" required> </p>

            <label for="message">Your Message</label>
            <p>
                <textarea name="message" > </textarea>
            </p>

            <p><input type="submit" value="submit" class="submit"></p>
                </form>
        </div>



    </body>


</html>
