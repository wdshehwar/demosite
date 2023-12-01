
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <div style="background-color:grey; width:40%; height:500px;  margin-left:400px; margin-top:50px; border:black solid 2px; ">
 
 </div>
  
     <div  style=" background-color:gainsboro; width:20%; height:60%; margin-top:-350px; margin-left:530px;">


    
<?php

    echo '<form action="submission.php" method="post">';
        echo '<fieldset>';
        echo '<legend>';
        echo 'Personal Information';

        echo '</legend>';
        echo '<label>UserName</label><br>';
        echo '<input type="text" placeholder="username" name="user" required><br>';

        echo '<label>Email Id</label><br>';
        echo '<input type="email" placeholder="username" name="email" required><br>';

        echo '<label>Password</label><br>';
        echo '<input type="password" placeholder="password"  name="pass"required><br>';

        echo '<label>phone number</label><br>';
        echo '<input type="phone number" placeholder="(000)000-0000" required name="phone" ><br>';

        echo '<input type="submit">';
        echo '<input type="reset"><br>';

        echo '<br>';
        echo '</fieldset>';
    echo '</form>';


?>
 </div>
</body>
</html>




