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
    $csname=$_POST['cshort'];
    $cfname=$_POST['cfull'];
    $cdate=$_POST['cdate'];
    if(!$csname)
    {
      echo "<script>alert('fields cant be blank')</script>";
    }
    else
    {


    $query="insert into course(c_sname,c_fname,createation) values('$csname','$cfname','$cdate')";
    $result=mysqli_query($link,$query);
    if($result==1)
    {
        echo "<script>alert('Course Added Successfully')</script>";
    }
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
           <div class="panel-heading">Add Course</div> 
           <div class="panel-body">
           <form method="post" id="signupForm" name="signupForm">
               <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Course Short Name<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                           <input type="text" name="cshort" id="cshort" class="form-control">
                           <span class="error_message">Course Short Name Must Be Entered"</span>
                       </div>
                   </div>
                   </div>
               </div>
               <br/><br/>
               <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Course Full Name<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                           <input type="text" name="cfull" id="cfull" class="form-control">
                       </div>
                   </div>
                   </div>
               </div>
               <br/><br/>
               <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Creation date</label>
                       </div>
                       <div class="col-lg-6">
                          <input class="form-control" value="<?php echo date('d-m-Y');?>" readonly="readonly" name="cdate">
                       </div>
                   </div>
                   </div>
               </div>
               <br/><br/>
              <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                          
                       </div>
                       <div class="col-lg-6 col-lg-offset-1">

                           <input type="submit" name="submit" value="Create Course" id="sbt" class="btn btn-primary">
                       </div>
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
     
