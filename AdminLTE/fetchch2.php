<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "proto_csqueue");
$output = '';
session_start();

	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{
		$log = $_SESSION['log'];
		
		$qry = "SELECT * FROM tbl_login WHERE email_id='$log'";
		$result = mysqli_query($connect,$qry);
		$value = mysqli_fetch_array($result);
		
		$id = $value['login_id'];
		
if(isset($_POST["query"]))
{
	
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 //$cor = $_GET['sel'];
 $query = "SELECT DISTINCT tbl_detail.login_id,tbl_detail.name,tbl_detail.dept,tbl_login.type FROM tbl_detail INNER JOIN tbl_login WHERE tbl_detail.login_id = tbl_login.login_id AND tbl_detail.name LIKE '%".$search."%' AND (tbl_login.type=1 OR tbl_login.type=2) GROUP BY tbl_detail.name ORDER BY tbl_detail.name ASC";
}
else
{
	//$cor = $_GET['sel'];
 $query = "SELECT DISTINCT tbl_detail.login_id,tbl_detail.name,tbl_detail.dept,tbl_login.type FROM tbl_detail INNER JOIN tbl_login WHERE tbl_detail.login_id = tbl_login.login_id AND (tbl_login.type=1 OR tbl_login.type=2) GROUP BY tbl_detail.name ORDER BY tbl_detail.name ASC";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-hover">
   <tr>
    <th>ID</th>
				  <th>Name</th>
				  <th>User Type</th>
				  <th>Department</th>
				  <th>Action</th>
   </tr>
 ';
	$seq=1;
	$r=0;
 while($row = mysqli_fetch_array($result))
 {
	 $query1 = "SELECT DISTINCT d_name from tbl_dept WHERE d_no = ".$row['dept']."";
	 $result1 = mysqli_query($connect, $query1);
	 $row1 = mysqli_fetch_array($result1);
	 
	 if($row['type']==1)
	 {
		 $p="Professor";
	 }
	 else
	 {
		 $p="Tutor";
	 }
  $output .= '
   <tr>
    <td>'.$seq.'</td>
    <td>'.$row['name'].'</td>
	<td>'.$p.'</td>
	<td>'.$row1['d_name'].'</td>			
				  <td><a class="btn btn-success btn-xs" href="?sel='.$row["login_id"].'" onclick="return confirm("sure to SELECT? '.$row["login_id"].'");">SELECT</a></td>
					</td>
   </tr>
    

  ';
  $seq++;
 }
 
 echo $output;
 $output.='
 </table>
 </div>
 ';
}
else
{
$output.='
<div class="table-responsive" >
   <table class="table table-hover">
   <tr>
    <th>ID</th>
	<th>Number</th>
				  <th>Name</th>
				  <th>User Type</th>
				  <th>Department</th>
				  <th>Action</th>
   </tr>
<tr>
<td colspan="6"><center><label>No Records</label></center></td>
</tr>
</table>
</div>
';
echo $output;
}
	}
?>