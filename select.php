<?php
session_start(); 

?>
<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Display</title>
		<meta name="description" content="Ela Admin - HTML5 Admin Template">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
	</head>
	<body style="margin: 50px;">
	<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="display.php"><i class="menu-icon fa fa-laptop"></i>Employees </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Digital Contracts</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-puzzle-piece"></i><a href="WagesContract.php">Wages Contract</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="salariedcontract.php">Salaried Contract</a></li>
                            <li><i class="fa fa-bars"></i><a href="whenbasiscontract.php">As and When Basis Contract</a></li>
                            <li><i class="fa fa-bars"></i><a href="TermContract.php">Term Contract</a></li>

                        </ul>
                    </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/carp.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                   
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> -->

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
		<br>
		<?php
		
			if(isset($_GET["masterid"])){
				$masterid = $_GET["masterid"];
				$_SESSION['masterid'] = $masterid;
				$servername = 'localhost';
					$username='root';
					$password='';
					$databasename ='hrms';

					// CREATE CONNECTION
					$conn = mysqli_connect($servername,
						$username, $password, $databasename);

				// GET CONNECTION ERRORS
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// SQL QUERY
				$final_master=str_replace("'",' ',$masterid);
				$query = "SELECT * FROM `employees` WHERE masterid=$final_master";
				// FETCHING DATA FROM DATABASE
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_array($result);
				
			}
		?>
		
		<form class="row g-3">			
			<legend>Employee Details</legend>
		  <div class="col-md-6">
			<fieldset disabled>
			<label for="masterid" class="form-label">Master ID</label>
			<input type="text" id="masterid" class="form-control" placeholder="<?php echo $row["masterid"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-md-6">
			<fieldset disabled>
			<label for="name" class="form-label">Name</label>
			<input type="text" id="name" class="form-control" placeholder="<?php echo $row["name"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-md-6">
			<fieldset disabled>
			<label for="email" class="form-label">Email</label>
			<input type="text" id="email" class="form-control" placeholder="<?php echo $row["email"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-md-6">
			<fieldset disabled>
			<label for="location" class="form-label">Division</label>
			<input type="text" id="location" class="form-control" placeholder="<?php echo $row["location"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-md-6">
			<fieldset disabled>
			<label for="dept" class="form-label">Department</label>
			<input type="text" id="dept" class="form-control" placeholder="<?php echo $row["department"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-md-6">
			<fieldset disabled>
			<label for="position" class="form-label">Position</label>
			<input type="text" id="position" class="form-control" placeholder="<?php echo $row["position"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-12">
			<fieldset disabled>
			<label for="address" class="form-label">Address</label>
			<input type="text" id="address" class="form-control" placeholder="<?php echo $row["address"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-4">
			<fieldset disabled>
			<label for="dob" class="form-label">Date of Birth</label>
			<input type="text" id="dob" class="form-control" placeholder="<?php echo $row["dob"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-4">
			<fieldset disabled>
			<label for="fnpf" class="form-label">FNPF No</label>
			<input type="text" id="fnpf" class="form-control" placeholder="<?php echo $row["fnpf"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-4">
			<fieldset disabled>
			<label for="tin" class="form-label">Tin No</label>
			<input type="text" id="tin" class="form-control" placeholder="<?php echo $row["tin"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-4">
			<fieldset disabled>
			<label for="status" class="form-label">Status</label>
			<input type="text" id="dob" class="form-control" placeholder="<?php echo $row["status"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-4">
			<fieldset disabled>
			<label for="gender" class="form-label">Gender</label>
			<input type="text" id="gender" class="form-control" placeholder="<?php echo $row["gender"]; ?>">
			</fieldset>
		  </div>
		  <div class="col-4">
			<fieldset disabled>
			<label for="mstat" class="form-label">Marital Status</label>
			<input type="text" id="mstat" class="form-control" placeholder="<?php echo $row["marital_status"]; ?>">
			</fieldset>
		  </div>
		  </fieldset>
		</form>
		<br>
		<br>
		<br>
		<?php
		$final_master=str_replace("'",' ',$masterid);
// echo $final_master;		
$sql = "SELECT * FROM dms WHERE masterid ='$final_master' ";
$result = mysqli_query($conn,$sql);
?>

<table class='table table-hover' id="table-data" >
	<thead>
	<tr>
		<td>Description</td>
		<td>Path</td>
		<td>Download</td>
	</tr>
	</thead>
<?php	


while($row = mysqli_fetch_array($result)) 
{
	$path = $row['url'];
?>
	<tbody>
		
	<tr>
		<td><?php echo $row['type']; ?></td>
		<td><?php echo $path; ?></td>
		<td><p><a href="download.php?path=<?php echo $row['url'];?>">Download</a></p>
</td>
		
	</tr>
	</tbody>
	
			

<?php
}
?>
</table>
<form action='upload.php?masterid=<?php echo $row['masterid']; ?>' method="post" enctype="multipart/form-data" class="row g-3">
<legend>Employee Documents</legend>
<div class="col-md-6">
							<label for="type" class="form-label">Document Description</label>
							<input type="text" id="type" class="form-control" name='desc'>
							</div>
							<div class="col-md-6">
							
							
							<label for="url" class="form-label">Select File to Upload</label>
							<input type="file" name="file" />
							</div>
							<br>
							<br>

<button type="submit" class="btn btn-primary btn-lg" name="upload">upload</button>
</form>
			
		
		<!-- </form> -->
		
	</body>
</html>