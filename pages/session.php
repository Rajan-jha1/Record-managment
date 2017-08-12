<?php
include("../db/db_config.php");
session_start();
$sess=$_SESSION['username'];
if(!isset($sess))
{
    header('location:../index.php');
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
           <div class="panel-heading">View Session</div> 
           <div class="panel-body">
           <form method="post">
               <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <h3 style="text-align: center; color:green;"><marquee direction:blink>Content coming soon</marquee></h3>
                   </div>
                   </div>
               </div> 
               </form>
           </div>
        </div>
    </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include_once('footer.php');?>
     
