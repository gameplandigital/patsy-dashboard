<?php
	include("session.php");

	if(isset($_POST['search']))
  {
    $valueToSearh = $_POST['valueToSearh']; 
    $query = "SELECT * FROM lead_users_unicare WHERE firstname LIKE '%".$valueToSearh."%' OR lastname LIKE '%".$valueToSearh."%' OR middlename LIKE '%".$valueToSearh."' OR status LIKE '%".$valueToSearh."%' OR agent LIKE '%".$valueToSearh."%'";
    $nquery = filterRecord($query);
  }
  else
  {
    $query = "SELECT *FROM lead_users_unicare";
    $nquery = filterRecord($query);
  }
  
  function filterRecord($query)
  {
    include("config.php");
    $filter_result = mysqli_query($mysqli, $query);
    return $filter_result;
  }
	
?>
<?php include('pagination-1.php'); ?>

<?php

  include('conn.php');
  
  date_default_timezone_set("Asia/Manila");
$date=date('F j, Y g:i:a');

  $uquery=mysqli_query($conn,"SELECT * FROM `users` WHERE username='".$_SESSION['user']."'");
  $urow=mysqli_fetch_assoc($uquery);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>AIRCAST | INTELESYSTEM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
     <script src="public/3b-comments.js"></script>
    <link href="public/3c-comments.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="home.php"></a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.php">Profile</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="home.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                     <li><a href="lead_users.php"><i class="glyphicon glyphicon-list"></i>Lead Table</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                   <!--  <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li> -->
                   
                   <!--  <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li> -->
                    <!-- <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a> -->
                         <!-- Sub menu -->
                         <!-- <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li> -->
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
	<!-- 	  	<div class="row">
		  	
		  	</div> -->

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Welcome! <?php echo $urow['firstname']; ?></div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			
						<br /><br />
					</div>
		  		</div>
		  	</div>



				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title"></div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<div id="rootwizard">
								<div class="navbar">
								  <div class="navbar-inner">
								    <div class="container">
								<ul class="nav nav-pills">
								  	<li class="active"><a href="#tab1" data-toggle="tab">Aircast </a></li>
									<li><a href="#tab2" data-toggle="tab">Aircast | Connect</a></li>
									<li><a href="#tab3" data-toggle="tab">Book A Tech.</a></li>
									<li><a href="#tab4" data-toggle="tab">Brainstorm</a></li>
								</ul>
								 </div>
								  </div>
								</div>
								<div class="tab-content">
								    <div class="tab-pane active" id="tab1">
								        
									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>ID</th>
								<th>Company Name</th>
								<th>Contact Person</th>
								<th>Contact Number</th>
								<th>Company Location</th>
								<th>Status</th>
					<!-- 			<th>Agent</th> -->
								<th>Update</th>
								<th>Print CE</th>
								<th>Book Tech.</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while($crow = mysqli_fetch_array($nquery)){
							?>
							<tr class="odd gradeX">
								<td><?php echo $crow['id']; ?></td>
								<td><?php echo $crow['firstname']; ?></td>
								<td><?php echo $crow['middlename']; ?></td>
								<td><?php echo $crow['lastname']; ?></td>
								<td><?php echo $crow['c_location']; ?></td>
								<td><?php echo $crow['status']; ?></td>
								<!--  -->
								<?php
									echo "<td><a href='lead-edit.php?id=".$crow['firstname']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
									echo "<td><a href='lead_print.php?id=".$crow['firstname']."'><img src='./images/icons8-Print-32.png' alt='Script'></a></td>";
									echo "<td><a href='book_tech.php?id=".$crow['firstname']."'><img src='./images/icons8-Print-32.png' alt='Script'></a></td>";
								?>
							</tr>
					        <?php }	?>
						</tbody>
					</table>


	
								    	
								    </div>

								    <div class="tab-pane " id="tab2">

								    	<h5>Aircast Wifi Leads</h5>

								    </div>	


								    <div class="tab-pane" id="tab3">

								    	<h5>Book A Tech.</h5>

								    	 <form class="form-horizontal" role="form" action="update_lead.php" method="POST">
										  <div class="form-group">
        
        <div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Name Of Employee:</label><div class="col-sm-10"> 
		<input type="text" name="fname" placeholder="Name of Employee" class='form-control'></div></div>

		<div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Name of Employee:</label><div class="col-sm-10"> 
		<input type="text" name="fname" placeholder="Name of Employee" class='form-control'></div></div>
		
		<div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Enter Position:</label><div class="col-sm-10"> 
		<input type="text" name="c_position" placeholder="Enter Position" class='form-control'></div></div>

		<div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Company Name:</label><div class="col-sm-10"> 
	    <input type="text" name="company" placeholder="Company Name" class='form-control'></div></div>	

        <div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Enter Department:</label><div class="col-sm-10"> 
	    <input type="text" name="department" placeholder="Enter Department" class='form-control'></div></div>


	    <div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Date of Official Business:</label><div class="col-sm-10"> 
	    <input type="date" name="business_date" class='form-control'>
	    </div></div>


	    <div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">From ?</label><div class="col-sm-10"> 
	    <input type="text" name="from" placeholder="from" class='form-control'>
	    </div></div>

	     <div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">To ?</label><div class="col-sm-10"> 
	    <input type="text" name="to" placeholder="to" class='form-control'>
	    </div></div>
         
        <div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Departure:</label><div class="col-sm-10">  
	    <select name="departure">
	    	<option value="9:00AM">9:00 AM</option>
	    	<option value="10:00AM">10:00 AM</option>
	    	<option value="11:00AM">11:00 AM</option>
	    	<option value="12:00AM">12:00 AM</option>
	    	<option value="1:00PM">1:00 PM</option>
	    	<option value="2:00PM">2:00 PM</option>
	    	<option value="3:00PM">3:00 PM</option>
	    	<option value="4:00PM">4:00 PM</option>
	    	<option value="5:00PM">5:00 PM</option>
	    	<option value="6:00PM">6:00 PM</option>
	     </select>
	    </div>
	   </div>
	   
        <div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">Return:</label><div class="col-sm-10">  
	     <select name="return">
	    	<option value="9:00AM">9:00 AM</option>
	    	<option value="10:00AM">10:00 AM</option>
	    	<option value="11:00AM">11:00 AM</option>
	    	<option value="12:00AM">12:00 AM</option>
	    	<option value="1:00PM">1:00 PM</option>
	    	<option value="2:00PM">2:00 PM</option>
	    	<option value="3:00PM">3:00 PM</option>
	    	<option value="4:00PM">4:00 PM</option>
	    	<option value="5:00PM">5:00 PM</option>
	    	<option value="6:00PM">6:00 PM</option>
	     </select>
	     </div>
	    </div>
  

        <div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">To ?</label><div class="col-sm-10"> 
	    <input type="text" name="purpose" placeholder="Meeting Agenda/Purpose" class='form-control'>
        </div>
        </div>


	    
										  </div>
										</form>

								    </div>	


								    <div class="tab-pane" id="tab4">

								    	    <input type="hidden" id="post_id" value="999"/>

								    <!-- CREATE A CONTAINER TO LOAD COMMENTS -->
								    <div id="comments"></div>

								    <!-- CREATE A CONTAINER TO LOAD REPLY DOCKET -->
								    <div id="reply-main"></div> 

                        
								    </div>	
	
									<ul class="pager wizard">
										<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
									</ul>
								</div>	
							</div>
		  				</div>
		  			</div>
					</div>
				</div>





		


		  	<div class="content-box-large">
				
			
			
			

		  	</div>

		  	<!-- End -->


		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>