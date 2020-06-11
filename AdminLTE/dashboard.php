<?php

	include "connection.php";
	
	session_start();
	
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	
	else
	{
		if(isset($_GET['ep']))
		{
			header("refresh:2 url=dashboard.php");
		}
		$log = $_SESSION['log'];
		
		$sql = "SELECT login_id,type FROM tbl_login WHERE email_id='$log'";
		$result = mysqli_query($con,$sql);
		$value = mysqli_fetch_array($result);
		
		$id = $value['login_id'];
		//$c_id = $value['cl_id'];
		$type = $value['type'];
		if($type==0)
		{
			$role="Admin";
		}
	if($type==1)
	{
		$role="Professor";
	}
	if($type==2)
	{
		$role="Tutor";
	}
	if($type==3)
	{
		$role="Student";
	}
			
		$qry = "SELECT * FROM tbl_detail WHERE login_id='$id'";
		$result1 = mysqli_query($con,$qry);
		$value1 = mysqli_fetch_array($result1);
		$n = $value1['name'];
		$i = $value1['profile_pic'];
		//$dob = $value1['dob'];
		
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CS Queue | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body id="mid" class="hold-transition skin-purple-light sidebar-mini" onload="myFunction()">
<div class="wrapper">
	<?php
		if($type==1 || $type==0 || $type==3)
		{
		include("head.php");
		}
		else
		{
		include("head2.php");
		?>
		<div class="modal fade" id="select" tabindex="-1" role="dialog" aria-labelledby="select" aria-hidden="true" data-backdrop="static" data-keyboard="false">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
			   <div style="float:left">
                  <h3 class="modal-title" id="select">Select Course</h3>
				  </div>
                  
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form role="form" method="POST" enctype="multipart/form-data" >
                        <div class="fields-grid"><center>
                         <div class="control-group form-group">
						 <div id="div2" style="display:block">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="tab">
                <tr>
                  <th>Course</th>
				  <th>Classes</th>
                  <th></th>
                </tr>
						 <?php
						 if($type==2)
						 {
						 $query="SELECT * FROM tbl_stuenro WHERE login_id='$id' AND active=1";
						 
						 $result2 = mysqli_query($con,$query);
					$count= mysqli_num_rows($result2);
					$seq=1;
					if($count>0)
						{
					while($value2 = mysqli_fetch_array($result2))
					{
					$x=$value2['cl_id'];
					$y=$value2['cor_id'];
					
					$q2="SELECT cor_name,cl_id FROM tbl_course WHERE cor_id=$y";
					$r2 = mysqli_query($con,$q2);
					$v2 = mysqli_fetch_array($r2);
					
					$q1="SELECT cl_name FROM tbl_classes WHERE cl_id=$x";
					$r1 = mysqli_query($con,$q1);
					$v1 = mysqli_fetch_array($r1);
					$y=$v1['cl_name'];
					?>
                <tr>
                  <td><?php echo $v2['cor_name'];?></td>
				  <td><?php echo $v1['cl_name'];?></td>
				  
				  <td>
				
				  <a class="btn btn-success btn-xs" href="dashboard.php?cr=<?php echo $value2['cl_id'];?>&&tr=<?php echo $value2['cor_id'];?>" >Select</a> &nbsp;&nbsp;
				  
					</td>
				</tr>
				
				<?php
					$seq++;
					}
					}
						else
					{
						?>
						<td colspan="8"><center><label>No Records</label></center></td>
						<td><div class="controls">
                         <button type="submit" class="btn subscrib-btnn btn-danger btn-lg btn-block" formaction="../Admin/logout.php">Logout</button>
						 </div>
						 </td>
						<?php
					}
						 }
						 if($type==4)
						 {
							$rowsql = mysqli_query($con,"SELECT stu_id FROM tbl_detail WHERE login_id='$id'");
			
		$row = mysqli_fetch_array($rowsql);
		$rid = $row['stu_id']; 
						 $query="SELECT * FROM tbl_stuenro WHERE login_id='$rid' AND active=1";
						 
						 $result2 = mysqli_query($con,$query);
					$count= mysqli_num_rows($result2);
					$seq=1;
					if($count>0)
						{
					while($value2 = mysqli_fetch_array($result2))
					{
					$x=$value2['cl_id'];
					$y=$value2['cor_id'];
					
					$q2="SELECT cor_name,cl_id FROM tbl_course WHERE cor_id=$y";
					$r2 = mysqli_query($con,$q2);
					$v2 = mysqli_fetch_array($r2);
					
					$q1="SELECT cl_name FROM tbl_classes WHERE cl_id=$x";
					$r1 = mysqli_query($con,$q1);
					$v1 = mysqli_fetch_array($r1);
					$y=$v1['cl_name'];
					?>
                <tr>
                  <td><?php echo $v2['cor_name'];?></td>
				  <td><?php echo $v1['cl_name'];?></td>
				  
				  <td>
				
				  <a class="btn btn-success btn-xs" href="dashboard.php?cr=<?php echo $value2['cl_id'];?>&&tr=<?php echo $value2['cor_id'];?>" >Select</a> &nbsp;&nbsp;
				  
					</td>
				</tr>
				
				<?php
					$seq++;
					}
					}
						else
					{
						?>
						<td colspan="8"><center><label>No Records</label></center></td>
						<td><div class="controls">
                         <button type="submit" class="btn subscrib-btnn btn-danger btn-lg btn-block" formaction="../Admin/logout.php">Logout</button>
						 </div>
						 </td>
						<?php
					}
						 }
					?>
					

              </table>
            </div>
					
                        </div>
						</div>
						</div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  
		<?php
if(!isset($_GET['tr']))
			{
			?>
			<script>
    $(window).on('load',function(){
        $('#select').modal('show');
    });
	</script>
	<?php
			}
		}
	?>
    <?php
		include("menu.php");
	  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <?php
if($type==0)
{
	?>
	<small>Master Admin Panel Control</small>
	<?php
}
else if($type==1)
{	
		?>
        <small>Admin Panel Control</small>
		<?php
}
else if($type==2)
{
	?>
	<small>Student Panel Control</small>
	<?php
}
else if($type==3)
{
	?>
	<small>Tutor Panel Control</small>
	<?php
}
else if($type==4)
{
	?>
	<small>Parent Panel Control</small>
	<?php
}
		?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php" class="active"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	  <?php
		if($type==2 || $type==4)
		{
			if(isset($_GET['tr']))
			{
	  ?>
	  <div>
	  <button type="submit" data-toggle="modal" name="submit" data-target="#select" class="btn btn-primary btn-lg btn-block">Change Course</button>
	  </div>
	  <?php
			}
		}
	  ?>
	  <br/>
        <?php
		if($type==0)
		{
			$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=0 AND active=1 AND login_id != '$id'"));
		$count2 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=1 AND active=1 AND login_id != '$id'"));
		$count3 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=2 AND active=1 AND login_id != '$id'"));
		$count4 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(login_id) FROM tbl_login WHERE type=3 AND active=1 AND login_id != '$id'"));
		?>
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="manageusers.php?show=professor">
		  <div class="small-box bg-aqua">
           <div class="inner">
              <h3><?php echo $count1[0];  ?></h3>

              <p>Total Professor</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div></a>
        </div>
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="manageusers.php?show=tutor">
		  <div class="small-box bg-red">
           <div class="inner">
              <h3><?php echo $count2[0];  ?></h3>

              <p>Total Tutors</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div></a>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
		  <a href="manageusers.php?show=student">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $count3[0];  ?></h3>

              <p>Total Student</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div></a>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
		  <a href="manageusers.php?show=active">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $count1[0];  ?></h3>

              <p>Total Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
            </div></a>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
      </div>
	  
		<?php
					}
	
		?>
		 
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        </div>
      <!-- /.row (main row) -->

	<script>
	/*function myFunction() {
		//alert('<?php echo $type; ?>');
		var str = '<?php echo $type; ?>';
		if(str=='2' || str=='4')
		{
			<?php
			if(!isset($_GET['tr']))
			{
			?>
    $(window).on('load',function(){
        $('#select').modal('show');
    });
	<?php
			}
	?>
		}
	  var x = document.getElementById("myDIV1");
	  if (x.style.display == "none") {
		x.style.display = "block";
	  }
		if(str=='3')
		{
	  var x = document.getElementById("myDIV1");
	  if (x.style.display == "none") {
		x.style.display = "block";
	  } else {
		x.style.display = "none";
	  }
	  var x = document.getElementById("myDIV2");
	  if (x.style.display == "none") {
		x.style.display = "block";
	  } else {
		x.style.display = "none";
	  }
		}
	}*/
	</script>
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  <?php
	include("footer.php");
  ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

<?php

	if(isset($_GET['ep']))
	{
	if($_GET['ep']==1)
	{
		echo "<script> alert('Profile Updated successfully'); </script>";
	}
	if($_GET['ep']==2)
	{
		echo "<script> alert('Classes Updated successfully'); </script>";
	}
	}
	}
	
?>