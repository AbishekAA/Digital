<?php
$page ='users';
session_start();
include 'connect.php';
$sql = "SELECT * FROM users ";
$result = mysqli_query($conn,$sql);

if(isset($_POST['registerBtn'])){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $location=$_POST['location'];
    $role = $_POST['role'];
    $password =md5($_POST['password']);
    $cpassword = md5($_POST['conpassword']);

    $sql2 = "SELECT username FROM users WHERE username = '$username'";
    $sql3 = "SELECT usr_email FROM users WHERE usr_email = '$email'";
    $result3 = mysqli_query($conn,$sql2);
    $result4 = mysqli_query($conn,$sql3);
    if(mysqli_num_rows( $result3 )==0){
        if(mysqli_num_rows( $result4 )==0){
            if($password == $cpassword){
                $query = "INSERT INTO users (username,usr_password,usr_email,usr_location,usr_role,usr_status) VALUES ('$username','$password','$email','$location','$role','1')";
                $result2=mysqli_query($conn,$query);
        
                if($result2){
                    echo "<script>alert('User Created')</script>";
                    header('Location:entries.php');
                }
                else{
                    echo "<script>alert('Unable to Create User')</script>";
                    header('Location:entries.php');
                }
            }
            else{
                $_SESSION['status'] ='Passwords Dont Match.';
                header('Location:entries.php');
            }
        }else{
        echo "<script>alert('email already Used By another User')</script>";
        header('Location:entries.php');
        }       
    }
    else{
        echo "<script>alert('Username already Exists')</script>";
        header('Location:users.php');
    }
    

}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styledash.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <?php include('nav.php'); ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <form action="" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name='username' class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name='email' class="form-control" placeholder="Enter Email Address">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" name='location' class="form-control" placeholder="Enter Location">
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="role" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Employee">Employee</option>
                                        <option value="User">User</option>
                                    </select>
 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name='password' class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="text" name='conpassword' class="form-control" placeholder="Retype Password">
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name='registerBtn' class="btn btn-primary">Save</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>

        
            <main>
                    
                <div class="recen-grid" >
                        <div class="use">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Users</h2>
                                    <button  data-bs-toggle="modal" data-bs-target="#exampleModal">Add new User <span class="las la-arrow-right"></span></button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table width ="100%">
                                        <thead>
                                            <tr>
                                                <td>ID</td>
                                                <td>Username</td>
                                                <td>Password</td>
                                                <td>Email</td>
                                                <td>Location</td>
                                                <td>Role</td>
                                                <td>Status</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while($row = mysqli_fetch_array($result)) 
                                            {
                                                if($row['usr_status']==1){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['usr_password']; ?></td>
                                                <td><?php echo $row['usr_email']; ?></td>
                                                <td><?php echo $row['usr_location']; ?></td>
                                                <td><?php echo $row['usr_role']; ?></td>
                                                <td><span class='status green'></span>Active</td>
                                                <td>
                                                        
                                                <button type='submit' data-bs-toggle='modal' data-bs-target='#editModal<?php echo $row['id'] ?>'>Edit</button>
                                                       
                                                <button>Delete</button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="editModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <form action="" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name='username' class="form-control" placeholder="Enter Username" value="<?php echo $row['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name='email' class="form-control" placeholder="Enter Email Address" value="<?php echo $row['usr_email']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" name='location' class="form-control" placeholder="Enter Location" value="<?php echo $row['usr_location']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="role" id="inputGroupSelect02"  >
                                        <!-- <option selected>Choose...</option> -->
                                        <option selected value="$row['usr_role']"><?php echo $row['usr_role'] ?></option>
                                        <option value="Admin">Admin</option>
                                        <option value="Employee">Employee</option>
                                        <option value="User">User</option>
                                    </select>
 
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name='password' class="form-control" placeholder="Enter Password" value="<?php echo $row['usr_password']; ?>">
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name='editBtn' class="btn btn-primary">Save</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
                                            <?php
                                                }else{
                                            ?>
                                            <tr>
                                                <!-- <td><?php echo $row['id']; ?></td> -->
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['usr_password']; ?></td>
                                                <td><?php echo $row['usr_email']; ?></td>
                                                <td><?php echo $row['usr_location']; ?></td>
                                                <td><?php echo $row['usr_role']; ?></td>
                                                <td><span class='status red'></span>Inactive</td>
                                                <td><button>Activate</button><button>Delete</button></td></tr>
                                                <?php
                                                }
                                            }
                                            ?>    
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Enter Wage Rate</label>
                                <input type="text" name='wagerate' class="form-control" placeholder="Enter Wage Rate">
                                <label>Current Wage Rate is:</label>
                            </div>
                        <button type="submit" name='-' class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
            </main>
            
        </div>
       
    </body>

    
</html>