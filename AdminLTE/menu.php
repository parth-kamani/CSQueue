<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.sidebar-menu ul li a{
    white-space: normal;
    word-wrap: break-word;
 }
</style>
</head>
<body>

		<?php
		if($type==0 ||$type==1 ||$type==2 ||$type==3)
		{
			?>
		<aside class="main-sidebar" >
		<section class="sidebar">
			<div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $i; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><b><?php echo $n; ?></b></p>
		  <p><small><i><?php echo $role; ?></i></small></p>
          </div>
      </div>
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
         
        </li>
       
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>USERS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="adduser.php"><i class="fa fa-circle-o"></i>Add User</a></li>
            <li><a href="manageusers.php"><i class="fa fa-circle-o"></i>Manage User</a></li>
           
          </ul>
        </li>
		<li class="">
          <a href="addapp.php">
            <i class="fa fa-dashboard"></i> <span>Appointments</span>
          </a>
         
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i>
            <span>Support</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Manage Queries</a></li>      
          </ul>
        </li>	
       </ul>
	   </section>
  </aside>
	   <?php
		}
		?>
		
		<?php
		if($type==1)
		{
			?>
		<aside class="main-sidebar" >
		<section class="sidebar">
			<div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $i; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><b><?php echo $n; ?></b></p>
		  <p><small><i><?php echo $role; ?></i></small></p>
          </div>
      </div>
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
         
        </li>
       
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>USERS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="adduser.php"><i class="fa fa-circle-o"></i>Add User</a></li>
            <li><a href="manageusers.php?show=admin"><i class="fa fa-circle-o"></i>Manage User</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addcourses.php"><i class="fa fa-circle-o"></i>Add Courses</a></li>
            <li><a href="managecourses.php"><i class="fa fa-circle-o"></i>Manage Courses</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Chapters</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addchap.php"><i class="fa fa-circle-o"></i>Add Chapters</a></li>
            <li><a href="managechap.php"><i class="fa fa-circle-o"></i>Manage Chapters</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Student Information</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="addstuenroll.php"><i class="fa fa-circle-o"></i>Enroll Student</a></li>
            <li><a href="managestuenroll.php"><i class="fa fa-circle-o"></i>Manage Student Information</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-sliders"></i>
            <span>Student Attandance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="addstuatt.php"><i class="fa fa-circle-o"></i>Add Attendance</a></li>
            <li><a href="managestuatt.php"><i class="fa fa-circle-o"></i>Manage Attendance</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa  fa-pencil-square-o"></i>
            <span>Student Assignment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="addassi.php"><i class="fa fa-circle-o"></i>Add Assignment</a></li>
            <li><a href="manageassi.php"><i class="fa fa-circle-o"></i>Manage Assignment</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Exam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="geneqp.php"><i class="fa fa-circle-o"></i>Add Exam</a></li>
            <li><a href="buqp.php"><i class="fa fa-circle-o"></i>Manage Non-Completed Paper</a></li>
			<li><a href="manageexam.php"><i class="fa fa-circle-o"></i>Manage Question Paper</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-calculator"></i>
            <span>Student Marks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addstuemark.php"><i class="fa fa-circle-o"></i>Add Exam Marks</a></li>
			<li><a href="addstuamark.php"><i class="fa fa-circle-o"></i>Add Assignment Marks</a></li>
            <li><a href="managemarks.php"><i class="fa fa-circle-o"></i>Manage Marks</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Analysis Graphs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewog.php"><i class="fa fa-circle-o"></i>Overall Analysis</a></li>
			<li><a href="viewcg.php"><i class="fa fa-circle-o"></i>Chapter Analysis</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Circular</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="addcir.php"><i class="fa fa-circle-o"></i>Add Circular</a></li>
            <li><a href="managecir.php"><i class="fa fa-circle-o"></i>Manage Circular</a></li>
          </ul>
        </li>
       </ul>
	   </section>
  </aside>
	   <?php
		}
		?>
		<?php
		if($type==2)
		{
			?>
			<aside class="main-sidebar">
		<section class="sidebar">
			<div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $i; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><b><?php echo $n; ?></b></p>
		  <p><small><i><?php echo $role; ?></i></small></p>
          </div>
      </div>
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
         
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>USERS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manageusers.php?show=admin"><i class="fa fa-circle-o"></i>Manage User</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Chapters</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addchap.php"><i class="fa fa-circle-o"></i>Add Chapters</a></li>
            <li><a href="managechap.php"><i class="fa fa-circle-o"></i>Manage Chapters</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-sliders"></i>
            <span>Student Attandance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="addstuatt.php"><i class="fa fa-circle-o"></i>Add Attendance</a></li>
            <li><a href="managestuatt.php"><i class="fa fa-circle-o"></i>Manage Attendance</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa  fa-pencil-square-o"></i>
            <span>Student Assignment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="addassi.php"><i class="fa fa-circle-o"></i>Add Assignment</a></li>
            <li><a href="manageassi.php"><i class="fa fa-circle-o"></i>Manage Assignment</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Exam Questions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addquedb.php"><i class="fa fa-circle-o"></i>Add Question</a></li>
            <li><a href="managequedb.php"><i class="fa fa-circle-o"></i>Manage Question</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Exam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="geneqp.php"><i class="fa fa-circle-o"></i>Add Exam</a></li>
            <li><a href="buqp.php"><i class="fa fa-circle-o"></i>Manage Non-Completed Paper</a></li>
			<li><a href="manageexam.php"><i class="fa fa-circle-o"></i>Manage Question Paper</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-calculator"></i>
            <span>Student Marks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addstuemark.php"><i class="fa fa-circle-o"></i>Add Exam Marks</a></li>
			<li><a href="addstuamark.php"><i class="fa fa-circle-o"></i>Add Assignment Marks</a></li>
            <li><a href="managemarks.php"><i class="fa fa-circle-o"></i>Manage Marks</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Analysis Graphs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewog.php"><i class="fa fa-circle-o"></i>Overall Analysis</a></li>
			<li><a href="viewcg.php"><i class="fa fa-circle-o"></i>Chapter Analysis</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Circular</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="managecir.php"><i class="fa fa-circle-o"></i>Manage Circular</a></li>
          </ul>
        </li>
       </ul>
	   </section>
  </aside>
	   <?php
		}
		?>
		<?php
		if($type==3)
		{
			?>
			<aside class="main-sidebar">
		<section class="sidebar">
			<div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $i; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><b><?php echo $n; ?></b></p>
		  <p><small><i><?php echo $role; ?></i></small></p>
          </div>
      </div>
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
		<?php
		if(isset($_GET['tr']))
		{
		?>
          <a href="dashboard.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
		  <?php
		}
		else
		{
			?>
          <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
		  <?php
		}
		  ?>
         
        </li>
       
       
      
		<li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Chapters</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li>
			<?php
		if(isset($_GET['tr']))
		{
		?>
			<a href="stuchap.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-circle-o"></i>View Chapters</a>
           <?php
		}
		else
		{
			?>
          <a href="stuchap.php"><i class="fa fa-circle-o"></i>View Chapters</a>
		  <?php
		}
		  ?>
		  </li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-sliders"></i>
            <span>Student Attandance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            
            <li>
			<?php
		if(isset($_GET['tr']))
		{
		?>
		<a href="stuatt.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-circle-o"></i>View Attendance</a>
        <?php
		}
		else
		{
			?>
          <a href="stuatt.php"><i class="fa fa-circle-o"></i>View Attendance</a>
		  <?php
		}
		  ?>
			</li>		  
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Student Assignment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            
            <li>
			<?php
		if(isset($_GET['tr']))
		{
		?>
		<a href="stuassi.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-circle-o"></i>View Assignment</a>
        <?php
		}
		else
		{
			?>
          <a href="stuassi.php"><i class="fa fa-circle-o"></i>View Assignment</a>
		  <?php
		}
		  ?> 
			</li>
          </ul>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Old Papers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
			<?php
		if(isset($_GET['tr']))
		{
		?>
		<a href="stuexam.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-circle-o"></i>Old Question Papers</a>
         <?php
		}
		else
		{
			?>
          <a href="stuexam.php"><i class="fa fa-circle-o"></i>Old Question Papers</a>
		  <?php
		}
		  ?>
		</li>		  
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-calculator"></i>
            <span>Student Result</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
			
            <li>
			<?php
		if(isset($_GET['tr']))
		{
		?>
		<a href="stumarks.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-circle-o"></i>View Marks</a>
		<?php
		}
		else
		{
			?>
          <a href="stumarks.php"><i class="fa fa-circle-o"></i>View Marks</a>
		  <?php
		}
		  ?>
		  </li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Analysis Graphs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
			<?php
		if(isset($_GET['tr']))
		{
		?>
		<a href="stuog.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-circle-o"></i>Overall Analysis</a>
		<?php
		}
		else
		{
			?>
          <a href="stuog.php"><i class="fa fa-circle-o"></i>Overall Analysis</a>
		  <?php
		}
		  ?>
		  </li>
			<li>
			<?php
		if(isset($_GET['tr']))
		{
		?>
		<a href="stucg.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-circle-o"></i>Chapter Analysis</a>
		<?php
		}
		else
		{
			?>
          <a href="stucg.php"><i class="fa fa-circle-o"></i>Chapter Analysis</a>
		  <?php
		}
		  ?>
		  </li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Circular</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li>
			<?php
		if(isset($_GET['tr']))
		{
		?>
		<a href="stucir.php?cr=<?php echo $_GET['cr'];?>&&tr=<?php echo $_GET['tr'];?>"><i class="fa fa-circle-o"></i>View Circular</a>
		<?php
		}
		else
		{
			?>
          <a href="stucir.php"><i class="fa fa-circle-o"></i>View Circular</a>
		  <?php
		}
		  ?>
		  </li>
           
          </ul>
		</li>
       </ul>
	   </section>
  </aside>
	   <?php
		}
		?>
</body>
</html>
	
	