<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
   echo '<h1 align="center">Your Record is : </h1>';
   if(isset($_POST['tour'])){
       echo $username = $_POST['user'];
       echo  $username ='Username is : ' . $_POST['user'] . '<br>';
       echo $email ='Email ID is : ' . $_POST['email'] . '<br>';
       echo $passworrd ='Password is : ' . sha1($_POST['pass']) . '<br>';
       echo $cpassword ='Confirm Password is : ' . sha1($_POST['cpass']) . '<br>';
       echo $gendur ='gender is: '.( $_POST['gender']);
       echo $checquee ='subject is: '.($_POST['check']);
       echo $countrry ='country is: '.($_POST['country']);




    echo '<table  border="1"><thead><th>Username</th><th>Email</th><th>password</th><th>c password</th><th>gender</th><th>subject</th><th>country</th></thead>';
    
    echo '<tbody>';
    echo '<tr>';
    echo '<td>';
    echo $username;
    echo '</td>';
    echo '<td>';
    echo $email;
    echo '</td>';
    echo '<td>';
    echo $passworrd;
    echo '</td>';
    echo '<td>';

    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
    

}

?> 

</body>
</html>



