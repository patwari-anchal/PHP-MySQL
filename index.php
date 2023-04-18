<?php
    include 'connection.php';



?>

<!DOCTYPE html>
<html>
    <head>
    <link href="style.css" rel="stylesheet">
    <title>Registration Form</title>
    </head>
<body>
    <div>
        <h1>Register</h1>
        <h3>Create your account, it's free and only takesa minute.!</h3>
            <form action="#" method="POST">
                <div class="colums">
                    <label for="">First Name</label>
                    <input type="text" name="fname" placeholder="First name" id="fname">

                    <label for="">Last Name</label>
                    <input type="text" name="lname" placeholder="Last name" id="lname">
             

                    <label for="">Email</label>             
                    <input type="email" name="email" id="email" placeholder="Email">
           

                    <label for="">Password</label>
                    <input type="Password" name="password" id="pswd"  placeholder="Password">
              

                    <label for="">confirm_password</label>      
                    <input type="Password" name="cpwd" id="pswd"  placeholder="Confirm Password">
            

                    
                    <input type="checkbox" name="checkbox">I accept <span>Terms of use & PrivacyPolicy.</span> 
               

                    <input type="submit" name="register" value="Register Now" id="reg">    
                </div>  
            </form>
        </div>
        <div id="outer">Already have an account?<span> Sign in </span></div>
</body>
</html>
<?php
    if($_POST['register'])
    {
        $first_name  =  $_POST['fname'];
        $last_name   =  $_POST['lname'];
        $email       =  $_POST['email'];
        $password    =  $_POST['password'];
        $cpwd        =  $_POST['cpwd'];

        $sql = "INSERT INTO login VALUES('$first_name',  '$last_name', '$email' ,  '$password',  '$cpwd' )";

        $data = mysqli_query ($conn, $sql);
        
    if($data)
    {
        echo '<script type="text/javascript">';
        echo 'alert ("data inserted successfully")';
        echo '</script>';
    }
    
    else
    {
        echo "Failed";
    } 
}
    

?>
