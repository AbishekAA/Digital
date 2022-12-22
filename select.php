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
                    <li class="active">
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








<!-- Right Panel -->
  <div id="right-panel" class="right-panel">
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
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

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
				$query = "SELECT * FROM `employees` WHERE masterid=$masterid";
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
		<form class="row g-3">			
			<legend>Employee Documents</legend>
			<?php
			if(isset($_GET["masterid"])){
				$servername = 'localhost';
					$username='root';
					$password='';
					$databasename ='hrms';

					// CREATE CONNECTION
					$conn = mysqli_connect($servername,
						$username, $password, $databasename);;

				// CREATE CONNECTION
				$conn = mysqli_connect($servername,
					$username, $password, $databasename);

				// GET CONNECTION ERRORS
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// SQL QUERY
				$query = "SELECT * FROM `dms` WHERE masterid=$masterid";
				// FETCHING DATA FROM DATABASE
				$result = mysqli_query($conn, $query);
				if (mysqli_num_rows($result) > 0) {
						// OUTPUT DATA OF EACH ROW
						while($row = mysqli_fetch_assoc($result)) {
							echo '<div class="col-md-6">
							<fieldset disabled>
							<label for="type" class="form-label">Document Description</label>
							<input type="text" id="type" class="form-control" placeholder="<?php echo $row["type"]; ?>">
							</fieldset>
							</div>
							<div class="col-md-6">
							<fieldset disabled>
							<label for="url" class="form-label">Document</label>
							<input type="text" id="url" class="form-control" placeholder="<?php echo $row["url"]; ?>">
							</fieldset>
							</div>';							
						}
					} else {
						echo '<div class="col-md-6">
							<label for="type" class="form-label">Document Description</label>
							<input type="text" id="type" class="form-control">
							</div>
							<div class="col-md-6">
							<label for="url" class="form-label">Browse to Upload</label>
							<input type="text" id="url" class="form-control">
							</div>
							<br>
							<br>';
							echo '<div class="col-md-3">
							<a class="btn btn-primary btn-lg" href="upload.php?masterid='.$row["masterid"].'">Upload</a>
							</div>';
					}
					$conn->close();
					
			}
		?>
		  
		</form>
		
	</body>
</html>