<?php
include "config.php";
extract($_POST);

 if( isset($submit))
{    

$result = mysqli_query($con , "INSERT INTO `Restaurant`(`Name`, `Restaurant`, `Email`, `Location`) Values ('$_POST[fname]','$_POST[fhosp]','$_POST[femail]' ,'$_POST[flocation]')");
if(!$result)
       {
            die('Record not added ...' . mysqli_error($con));        
       }
   else
   {
       echo "<br> <br> New record is added ";   
   }
mysqli_close($con);
}
?>
         
          <html>
          <head>
            <link rel="stylesheet" href="css/style.css" type="text/css" />
            <title>Add Hospital</title>
          </head>
          <body>
            

          <section class="page-wrapper">
            <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data" >
                <label for="name">Your Name:</label>
                <input type="text" name="fname" required><br><br>
      
                <label for="company">Hospital Name:</label>
                <input type="text" name="fhosp" required><br><br>
      
                <label for="email">Email:</label>
                <input type="email" name="femail" required><br><br>
      
                <label for="location">Location (Google Map Link):</label>
                <input type="text" name="flocation" required><br><br>
      
                <button type="submit" name="submit" value="Submit" id="submit_form">Submit</button>
                <br>
                <button onclick="window.location.href='restaurants.html'"> Return </button>
              </form>
            </div>

          </section>
          </body>
          </html>