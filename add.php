<?php include('Database.php'); ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Form</title>

    <link rel="stylesheet" href="assets/css/demo.css">
    <link rel="stylesheet" href="assets/css/form-basic.css">

</head>
<body>
<?php 
    if(isset($_REQUEST['submit'])){
        ////if (!empty($_POST))) {
            extract($_REQUEST);

            /*$permited   = array('jpg', 'jpeg', 'png', 'gif');
            $file_name  = $_FILES['image']['name'];
            $file_size  = $_FILES['image']['size'];
            $file_temp  = $_FILES['image']['tmp_name'];

          // dividing the extention name and actual name
          $div        = explode('.', $file_name);

          // converting all extension in lower case ...
          echo $file_ext   = strtolower(end($div));

          // generating every image name as unique name ....
          $unique_image = "images/".substr(md5(time()),0,10).'.'.$file_ext;
            
          if(empty($file_name)){
            echo "<span class='error'>Please Select any image</span>";
          }elseif ($file_size > 3145728) {
            echo "<span class='error'>Image size must be less than 3mb.</span>";
          }elseif (in_array($file_ext, $permited) === false) {
            echo "<span class='error'>Uploaded file must be an image.</span>";
          }else{*/
          //move_uploaded_file(filename, destination)
            move_uploaded_file($file_temp,$unique_image);
            if($obj->Insert("students","name = '$name',email='$email',roll='$roll',dob='$dob',address='$address',contact='$contact',semester='$semester',departments='$departments',session='$session'")){

                $msg="Data Successfully Inserted!";
                 header("Location:details.php");
            }  
           
        //}
        }
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Student Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>
<body>

    <div class="main-content">
    
        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" action="" method="post" enctype="multipart/form-data">

            <div class="form-title-row">
                <h1 style="color:red;">PERSONAL INFORMATION OF STUDENT</h1>
            </div>
            <h2><?php
                echo @$msg;
            ?></h2>
            <div class="form-row">
                <label>
                    <span style="color:green;" >Full Name</span>
                    <input type="text" name="name">
                </label>
            </div>

           
            <div class="form-row">
                <label>
                    <span style="color:green;" >Email</span>
                    <input type="email" name="email">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span style="color:green;" >Roll</span>
                    <input type="text" name="roll">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span style="color:green;" >Date Of Birth</span>
                    <input type="text" name="dob">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span style="color:green;">Address</span>
                    <input type="text" name="address">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span style="color:green;" >Mobile</span>
                    <input type="text" name="contact">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span style="color:green;" >Semester</span>
                    <select name="semester">
                        <option value="#"  >Select Semester</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                        <option value="6th">6th</option>
                        <option value="7th">7th</option>
                        <option value="8th">8th</option>
                    </select>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span style="color:green;" >Department</span>
                    <select name="departments">
                        <option value="#" >Select Departments</option>
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="BBA">BBA</option>
                    </select>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span style="color:green;" >Session</span>
                    <input type="text" name="session">
                </label>
            </div>          
            <!-- <div class="form-row">
                <label>
                    <span>Image</span>
                    <input type="file" name="images">
                </label>
            </div> -->
            <div class="form-row" >
                <button type="submit" name="submit" >Submit</button>
            </div>
            

        </form>

    </div>

</body>

</html>
