<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>WWYDH Project Manager</title>

		<!-- StyleSheets -->
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400|Montserrat:400,700" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="../helpers/header_footer.css" type="text/css" rel="stylesheet" />

		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.dragsort.min.js" ></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/settings.js"></script>
		<script type="text/javascript" src="js/core.js"></script>

		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/style-ie7-8.css" />
		<![endif]-->
	</head>
	<body>
	<!--<div class="width">
			<div id="nav">
	            <div class="nav-inner width clearfix <?php if (isset($_SESSION['user'])) echo 'loggedin' ?>">
	                <a href="../home">
	                    <div id="logo"></div>
	                    <div id="logo_name">What Would You Do Here?</div>
	                    <div class="spacer"></div>
	                </a>
	                <div id="user_nav" class="nav">
	                    <?php if (!isset($_SESSION["user"])) { ?>
	                        <ul>
	                            <a href="../login"><li>Log in</li></a>
	                            <a href="../signup"><li>Sign up</li></a>
	                            <a href="../contact"><li>Contact</li></a>
	                        </ul>
	                    <?php } else { ?>
	                        <div class="loggedin">
	                            <span class="click-space">
	                                <span class="chevron"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
	                                <div class="image" style="background-image: url(../helpers/user_images/<?php echo $_SESSION["user"]["image"] ?>);"></div>
	                                <span class="greet">Hi <?php echo $_SESSION["user"]["first"] ?>!</span>
	                            </span>

	                            <div id="nav_submenu">
	                                <ul>
	                                    <a href="../dashboard"><li>Dashboard</li></a>
	                                    <a href="../profile"><li>My Profile</li></a>
	                                    <a href="../helpers/logout.php?go=home"><li>Log out</li></a>
	                                </ul>
	                            </div>
	                        </div>
	                    <?php } ?>
	                </div>
	                <div id="main_nav" class="nav">
	                    <ul>
	                        <a href="../locations"><li>Locations</li></a>
	                        <a href="../ideas"><li>Ideas</li></a>
	                        <a href="../plans"><li>Plans</li></a>
	                        <a href="../projects" class="active"><li>Projects</li></a>
	                    </ul>
	                </div>
	            </div>
	        </div>
		</div> -->
		<!-- Modal -->
		<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="helpModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Help</h4>
					</div>
					<div class="modal-body">
						<h4>Quick Help for Project Manager</h4>
						<ul>
							<li><strong>Create new task:</strong> Use "n" or click the New link in the top navigation.</li>
							<li><strong>Save a task:</strong> Press enter or click "save".</li>
							<li><strong>Discard changes:</strong> Click "cancel", click anywhere outside the editing box or press "Esc".</li>
							<li><strong>Change status:</strong> Just drag the card to a new column.</li>
							<li><strong>Change priority:</strong> Change color. TBD</li>
						</ul>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div id="wrapper">
			<header>
				<h1><a href="">WWYDH Project Manager</a></h1>
				<nav>
					<ul>
						<li><a href="#" id="new"><i class="glyphicon glyphicon-plus-sign"></i> New</a></li>
						<li><a href="#helpModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
					</ul>
				</nav>
			</header>

			<h2>WWYDH Project Manager - Roadmap</h2>
			<?php
			session_name( 'kanban' );
			session_start();
			// echo $_SESSION["projid"];
			?>
			<div id="board"></div>
			<h2>Tags</h2>
			<div id="navigation" class="navigation"></div>

		</div>
		<div class="plan-buttons options btn-group">
			<div class="btn op-1"><a href="../projects/index.php">Go Back To Projects</a></div> <!--Insert link here -->
		</div>
		
		<div id="footer">
            <div class="grid-inner">
                &copy; Copyright WWYDH <?php echo date("Y") ?>
            </div>
    </div>

	</body>
</html>
