<?php

include 'connect.php';
error_reporting(0);
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND usr_password='$password'";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows >0){
        $row= mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['usr_role'] = $row['usr_role'];
        if($_SESSION['usr_role'] == 'admin'){
            header('Location: entries.php');
        }
        elseif($_SESSION['usr_role'] == 'employee'){
            header('Location: index.php');
        }
        else{
            header('Location: index.php');
        }
        
    }else{
        echo "<script>alert('Whoops! username or password is Wrong')</script>";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        
    
        <img src="assets/carpenters-logo.jpg" style="width:100px;height:100px">
        <form action="" method="POST" class="login-username">
            <p class="login-text">Login</p>
            <div class="input-group">
                <input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>

</html>