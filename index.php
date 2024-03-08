<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="box">
        <div class="heading">
            <h2>Registration Form</h2>
        </div>

        <div class="form-data">
           <form action="#" method="post">
            <table>
                <tr>
                    <td> <label for="fname">First Name</label></td>
                    <td><input type="text" name="fname" id="fname" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td> <label for="lname">Last Name</label></td>
                    <td><input type="text" name="lname" id="lname" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td> <label for="email">Enter Email</label></td>
                    <td><input type="email" name="email" id="email" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td> <label for="mob">Enter Mobile</label></td>
                    <td><input type="text" name="mob" id="mob" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td> <label for="pass">Enter Password</label></td>
                    <td><input type="password" name="pass" id="pass" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td> <label for="cpass">Enter Confirm Password</label></td>
                    <td><input type="password" name="cpass" id="cpass" autocomplete="off" required></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Register" name="register"></td>
                </tr>
            </table>

           </form>
        </div>
    </div>
</body>
</html>

<?php

if($_POST['register'])
{

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    
    $query = "insert into emp(fname, lname, email, mob, pass, cpass) values('$fname','$lname','$email','$mob','$pass','$cpass')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Data inserted')</script>";
    }
    else
    {
        echo "<script>alert('Data not inserted')</script>".mysqli_connect_error();
    }
}

?>
