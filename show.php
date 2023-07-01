<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form  method="post">
    <p>Enter the email id</p>
    <input type="text" name="email" >
    <input type="submit" name="submit" value="submit">
    <table>
</form>
            <thead>
                <th>ID</th>
                <th>UserName</th>
                <th>FileName</th>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                if (isset($_POST['submit']))
                {
                    $testing =  $_POST['email'];

                    $selectQuery = "select * from details where Email ='$testing' ";

                    $val = mysqli_query($con, $selectQuery);
                     
                    while (($result = mysqli_fetch_assoc($val))) {
                ?>
                <tr>
                  <td><?php echo $result['Name']; ?></td>
                  <td><?php echo $result['Age']; ?></td>
                  <td><?php echo $result['Weight']; ?></td>
                  <td><?php echo $result['Email']; ?></td>
                  <td><iframe src="<?php echo $result['file']; ?>" width="90%" height="500px">
</iframe></td>
                </tr>
                <?php
                }
                }
                    
                ?>
            </tbody>
        </table>            
    </body>
</html>