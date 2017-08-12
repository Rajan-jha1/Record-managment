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
	$id=$_GET['cid'];
    $csname=$_POST['cshort'];
    $cfname=$_POST['cfull'];
    $cdate=$_POST['cdate'];
    if(!$csname)
    {
      echo "<script>alert('fields cant be blank')</script>";
    }
    else
    {


    $query = "UPDATE course SET c_sname='$csname',c_fname='$cfname',createation=' $cdate' WHERE id='$id'";
    $result=mysqli_query($link,$query);
    if($result==1)
    {
        echo "<script>alert('Course Updated Successfully')</script>";
        header('location:view_course.php');
    }
    else
    {
      echo "<script>alert('eroor')</script>";

    }
  }

}
$id=$_GET['cid'];
$query="select * from course where id='$id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_assoc($result);
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
                           <input type="text" name="cshort" id="cshort" class="form-control" value="<?php echo strtoupper($row['c_sname']);?>">
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
                           <input type="text" name="cfull" id="cfull" class="form-control" value="<?php echo strtoupper($row['c_fname']);?>">
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

                           <input type="submit" name="submit" value="Update Course" id="sbt" class="btn btn-primary">
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
     
