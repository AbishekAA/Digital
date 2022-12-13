<?php

error_reporting(0);

session_start();
include 'connect.php';

$sql = "SELECT * FROM employees WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($con3,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submitbtn'])) {
  
    $id = $_POST['id'];
    $name= $_POST['name'];
    $address = $_POST['address'];
    $fnpf = $_POST['fnpf'];
    $tin = $_POST['tin'];
    $department = $_POST['department'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $location = $_POST['location'];
    $start_date = $_POST['start_date'];
    $status = $_POST['status'];
    $gender = $_POST['gender']; 
    $marital_status	= $_POST['marital_status']; 
    $masterid  = $_POST['masterid']; 
    
   
  
    
   
  
  
  $sql = "INSERT INTO employees (id,masterid,name,address,fnpf,tin,department,dob,email,position,start_date,gender,marital_status)
    
          VALUES('$id','$masterid','$name','$address','$fnpf','$tin','$department','$dob','$email','$position','$start_date','$gender','$marital_status')";
    
  
  
  
        $result = mysqli_query($con3, $sql);
        if (!$result) {
          // echo"<script>alert('Wow! User Registration Completed.')</script>";
           echo"<script>alert('Woops! Something went wrong.')</script>";
       } else { 
          // echo"<script>alert('Woops! Something went wrong.')</script>";
           echo"<script>alert('Wow! Submitted Successfully.')</script>";
       }
}
  
  
?>






<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles.css">

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<style>

</style>
<body>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Digital Contracts</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-puzzle-piece"></i><a href="employee.php">Wages Contract</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="employee.php">Salaried Contract</a></li>
                            <li><i class="fa fa-bars"></i><a href="employee.php">As and When Basis Contract</a></li>
                            <li><i class="fa fa-bars"></i><a href="employee.php">Term Contract</a></li>

                        </ul>
                    </li>
                    <li class="menu-title">UI elements</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Icons</li><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>








<!-- Right Panel -->
  <div id="right-panel" class="right-panel">

<div class="wrapper">
    <div class="title">
      <!-- Contract Form -->
    </div>


<div class="form" method="POST" action="">
    <form action="" method="post" class="">
       <div class="inputfield">
         <label><b>Master Id</b></label>
          <input type="text" class="input" name= "id" value = "<?php echo $id; ?>" required>
       </div>  
        <div class="inputfield">
        <label><b>First Name</b></label>
          <input type="text" class="input" name= "name" value = "<?php echo $name; ?>" required>
       </div>  
       <div class="inputfield">
          <label><b>Fnpf No</b></label>
          <input type="text" class="input" name= "fnpf" value = "<?php echo $fnpf; ?>" required>
      </div>  
      <div class="inputfield">
          <label><b>Tin No</b></label>
          <input type="text" class="input" name= "tin" value = "<?php echo $tin; ?>" required>
       </div> 
        <div class="inputfield">
          <label><b>Gender</b></label>
          <div class="custom_select">
            <select name ="gender" class="fprm-control" >
              <option value="">Select</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
       </div> 

       <div class="inputfield">
        <label><b>Date of Birth</b></label>
        <input type="date" class="input" name="dob" value = "<?php echo $dob; ?>" required >
     </div>
        <div class="inputfield">
          <label><b>Email Address</b></label>
          <input type="text" class="input" name="email" value = "<?php echo $email; ?>" required>
      </div> 
      <!-- <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input">
       </div>  -->
      <div class="inputfield">
          <label><b>Address</b></label>
          <textarea class="textarea" name="address" value = "<?php echo $address; ?>" required></textarea>
       </div> 

     <div class="inputfield">
          <label><b>Department</b></label>
          <div class="custom_select">
          <select name ="department"class="fprm-control" >
              <option value="">Select</option>
              <option value="Carpenters Finance">Carpenters Finance</option>
              <option value="Carpenters HO">Carpenters HO</option>
              <option value="Carpenters Motors">Carpenters Motors</option>
              <option value="Carpenters Shipping">Carpenters Shipping</option>
              <option value="MH">MH</option>
            </select>
          </div>
       </div>  
      
       <div class="inputfield">
        <label><b>Marital Status</b></label>
        <div class="custom_select">
        <select name ="marital_status"class="fprm-control" >
            <option value="">Select</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
          </select>
        </div>
     </div> 

        <div class="inputfield">
        <label><b>Position</b></label>
        <input type="text" class="input" name="position" value = "<?php echo $position; ?>" required >
        </div>

      <div class="inputfield">
        <label><b>Commencement Date</b></label>
        <input type="date" class="input" name="start_date"  value = "<?php echo $start_date; ?>" required  >
     </div>

      <!-- <div class="inputfield">
        <label>Salary</label>
        <input type="text" class="input">
     </div> -->




     <div class="inputfield terms">
          
      
       </div> 
        <div class="inputfield">
        <input type="submit" name="submitbtn"  value="Submit"   class="btn">
   
      </div>
    </form>

   
      
</div>
</div>	

</script>	
</body>
</html>