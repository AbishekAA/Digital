<?php
include_once 'connect.php';
session_start(); 

    $username = $_SESSION['username'];
    //$password = md5($_POST['password']);
    // $password = $_POST['password'];
    // $sql = "SELECT * FROM users WHERE username='$username' AND usr_password='$password'";
    // $result = mysqli_query($conn,$sql);
    // if($result->num_rows >0){
        // $row= mysqli_fetch_assoc($result);
        // $_SESSION['username'] = $row['username'];
        // $_SESSION['usr_role'] = $row['usr_role'];
        if($_SESSION['username'] == null){
            header('Location: login.php');
        }

$masterid = $_SESSION['masterid'];


if(isset($_POST['upload']))
{   
  $desc=$_POST['desc'];   
 $file = $_FILES['file']['name'];
 $file2=$masterid.'-'.$file;
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="\\\\10.20.16.219\\f\\ajnesh\\upload\\";
 $final_master=str_replace("'",' ',$masterid);
 
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $final_matser=str_replace("'",' ',$file2);
 $new_file_name = strtolower($final_matser);
 echo $new_file_name;

 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO dms(masterid,url,type) VALUES('$final_master','uploads/$final_file' ,'$desc')";
  mysqli_query($conn,$sql);
  
 
  echo "File sucessfully upload";
  header("Location:select.php?masterid='$masterid'");
    
  
 }
 else
 {
  
  echo "Error.Please try again";
  header("Location:select.php?masterid='$masterid'");
		
		}
	}

?>