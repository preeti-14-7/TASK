<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <div class="container">
            <div class="text">
               Fill the details
            </div>
            <form action="show.php" method="post" enctype="multipart/form-data">
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" name="name" >
                     <div class="underline"></div>
                     <label for="">Name</label>
                  </div>
                  <div class="input-data">
                     <input type="number" name="age">
                     <div class="underline"></div>
                     <label for="">Age</label>
                  </div>
               </div>
               <div class="form-row">
                <div class="input-data">
                    <input type="number" name="weight">
                    <div class="underline"></div>
                    <label for="">Weight (in kg)</label>
                 </div>
                  <div class="input-data">
                     <input type="text" name="email">
                     <div class="underline"></div>
                     <label for="">Email Id</label>
                  </div>
                  
               </div>
               <div class="form-row">
               <div class="input-data">
                  <p>Upload Your Health Card</p>
                  <div class="underline"></div>
               
                 
                  <input type="file" name="file">
                  <div class="form-row submit-btn">
                     <div class="input-data">
                        <div class="inner"></div>
                        <input type="submit" name= "submit" value="submit">
                     </div>
                  </div>
            </form>
            </div>
        
        <script src="JS/app.js" async defer></script>
    </body>
</html>

<?php
include 'connection.php';

if (isset($_POST['submit'])) {
   //  header('location:display.php');
    $name = $_POST['name'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $email = $_POST['email'];

    $file = $_FILES['file']['name'];

    $file_tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($file_tmp,"./pdf/".$file);

    $insertquery = "insert into details(Name,Age,Weight,Email, File) values('$name','$age','$weight','$email','$file')";

    $res = mysqli_query($con, $insertquery);
}
?>