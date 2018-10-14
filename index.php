<?php include('Database.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student enrolment System</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="inc/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="text-center">
			<h2 style="color:blue;">Student Management System</h2>
		</div>
		<div class="common panel panel-default">
			<div class="panel panel-heading">
				<h2>
					<a class="btn btn-success" href="add.php">Add Student</a>
					
				</h2>
			</div>
			<div class="panel-body">
				<form action="" method="post">
					<table class="table table-striped">
						<tr>
							<th width="30%" ; style="color:salmon;" >serial</th>
							<th width="30%" ; style="color:salmon;" >Students Name</th>
							<th width="30%" ; style="color:salmon;" >Roll</th>
							<th width="40%" ; style="color:salmon;" >Actions</th>
						</tr>
<?php 
    if(isset($_REQUEST['del_id'])){
    $del_id=$_REQUEST['del_id'];
        if($obj->Delete("students","id=$del_id")){
            $msg="Delete Success";
        }
        else{
            $msg="Delete Fail"; 
        }
    }
?>						
<?php
$i=1;
  $all_students=$obj->getAll("students","*");
  foreach($all_students as $students){
      extract($students);
      
           
?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $name;?></td>
							<td><?php echo $roll;?></td>
							<td>
								<a class="btn btn-primary" href="allStudent.php?id=<?php echo $id;?>">Show Details</a>
								<br><br>
								<a href="index.php?del_id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
							</td>
						</tr>
				<?php  } ?>
					</table>
				</form>
			</div>
		</div>
