<?php include('Database.php'); ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Student Information</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
    <div class="wrapper">

        <!--//sidebar-wrapper-->
        <div class="main-wrapper">
            
<?php 
    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];
    
        $prinfo=$obj->getById("students","*","id = $id");
        foreach ($prinfo as $prinfos) {
         extract($prinfos);
?>
            <section class="section summary-section">
                <h2 class="section-title" ; style="color:red;"><i class="fa fa-user"></i>Name</h2>
                <div class="summary">
                    <p><?php echo $name; ?></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section summary-section">
                <h2 class="section-title" ; style="color:red;"><i class="fa fa-envelope"></i>Email</h2>
                <div class="summary">
                    <p><?php echo $email; ?></p>
                </div><!--//summary-->
            </section>
            <section class="section summary-section">
                <h2 class="section-title" ; style="color:red;"><i class="fa fa-home"></i>Address</h2>
                <div class="summary">
                    <p><?php echo $address; ?></p>
                </div><!--//summary-->
            </section>
            <section class="section summary-section">
                <h2 class="section-title" ; style="color:red;" ><i class="fa fa-child"></i>Date Of Birth</h2>
                <div class="summary">
                    <p><?php echo $dob; ?></p>
                </div><!--//summary-->
            </section>

            <section class="section summary-section">
                <h2 class="section-title" ; style="color:red;" ><i class="fa fa-phone"></i>Contact</h2>
                <div class="summary">
                    <p><?php echo $contact; ?></p>
                </div><!--//summary-->
            </section>
            <section class="section summary-section">
                <h2 class="section-title" ; style="color:red;" ><i class="fa fa-tasks"></i>Semester</h2>
                <div class="summary">
                    <p><?php echo $semester; ?></p>
                </div><!--//summary-->
            </section>
            <section class="section summary-section">
                <h2 class="section-title" ; style="color:red;" ><i class="fa fa-university"></i>Department</h2>
                <div class="summary">
                    <p><?php echo $departments; ?></p>
                </div><!--//summary-->
            </section>
            <section class="section summary-section">
                <h2 class="section-title" ; style="color:red;" ><i class="fa fa-calendar"></i>Session</h2>
                <div class="summary">
                    <p><?php echo $session; ?></p>
                </div><!--//summary-->
            </section>
<?php } }?> 
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Created By <i class="fa fa-heart"></i> <a href="http://themes.3rdwavemedia.com" target="_blank"> Imran and Abrar</a> </small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

