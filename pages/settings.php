<?php
include("../db/db_config.php");
session_start();
$sess=$_SESSION['username'];
if(!isset($sess))
{
    header('location:../index.php');
}
if(isset($_POST['submit']))
{
  $username=$_POST['Username'];
  $np=$_POST['newpassword'];
  $query = "UPDATE tbl_admin SET password='$np' WHERE username='$username'";
    $result=mysqli_query($link,$query);
    if($result==true)
    {
        //$msg="password change Successfully";
        echo "<script>alert('password change Successfully')</script>";
        //header('location:view_course.php');
    }
    else
    {
      echo "<script>alert('Something is Wrong to change Successfully')</script>";
    }
}
?>
<?php include_once('header.php');?>
    <div id="wrapper">
        <!-- Navigation -->
<?php include_once('leftbar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Welcome <?php echo Ucfirst($sess);?></h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    <div class="row">
        <div class="panel panel-primary">
           <div class="panel-heading">Change Password</div> 
           <div class="panel-body">
           <form role="form" method="post">
                            <fieldset>
                            <div class="col-lg-6 col-lg-offset-2">
                            <span style="color:red;" class="col-lg-offset-3">* All fields are requierd</span>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" id="username" name="Username" autofocus onblur="username_check()">
                                    <span id="error_msg2" style="display: none; color: red;">Username is requierd</span>
                                    <span id="username-availability-status" style="font-size:12px;"></span>
                                </div>
                                </div>
                                <div class="col-lg-6 col-lg-offset-2">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Old Password" id="password" name=" Old password" type="password" value="" autofocus onblur="password_check()">
                                    <span id="error_msg1" style="display: none; color: red;">Old password is requierd</span>
                                    <span id="password-availability-status" style="font-size:12px;"></span>
                                </div>
                                </div>
                                <div class="col-lg-6 col-lg-offset-2">
                                <div class="form-group">
                                    <input class="form-control" placeholder=" New Password" id="npassword" name="newpassword" type="password" value="">
                                    <span id="error_msg" style="display: none; color: red;">New password is requierd</span>
                                </div>
                                 <span style="color:green;"><?php echo @$msg; ?></span>
                                </div>

                                <div class="col-lg-6 col-lg-offset-2">
                                <input type="submit" value="Submit Details" name="submit" id="sbt" class="btn btn-lg btn-success btn-block">

                                </div>
                            </fieldset>

                        </form>
           </div>
        </div>
    </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include_once('footer.php');?>
     
