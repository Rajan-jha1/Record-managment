<?php
include_once('functions.php');
session_start();
$sess=$_SESSION['username'];
if(!isset($sess))
{
    header('location:../index.php');
}
?>
<?php
include_once('../db/db_config.php');
if(isset($_POST['submit']))
{
	 $csname=$_POST['csname'];
	 $cfname=$_POST['cfullname'];
	 $sub1=$_POST['sub1'];
	 $sub2=$_POST['sub2'];
	 $sub3=$_POST['sub3'];
	 $cdate=$_POST['cdate'];
   $csem=$_POST['c_semester'];
	$query="insert into subject 
	(csname,cfname,sub1,sub2,sub3,create_date,c_sem)
	values('$csname','$cfname','$sub1','$sub2','$sub3','$cdate','$csem')";
	$result=mysqli_query($link,$query);
	if($result==1)
    {
        echo "<script>alert('Subject Added Successfully')</script>";
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
           <div class="panel-heading">Add Subject</div> 
           <div class="panel-body">
           <form method="post">
               <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Course Short Name<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                           <select name="csname" id="csname" class="form-control" onchange="showcFull(this.value)">
							<option value="">SELECT</option>
								<?php echo load_Cshort_name();?>
							</select>
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
                           <input type="text" name="cfullname" id="cfullname" readonly="readonly" class="form-control">
                       </div>
                   </div>
                   </div>
               </div>
               <br/><br/>
               <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Course Semester Name<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                           <select name="c_semester" id="c_semester" class="form-control">
                            <option>SELECT</option>
                             <option value="sem1">SEM 1</option>
                             <option value="sem2">SEM 2</option>
                             <option value="sem3">SEM 3</option>
                             <option value="sem4">SEM 4</option>
                           </select>
                       </div>
                   </div>
                   </div>
               </div>
               <br/><br/>
                <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Subject 1<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                          <input type="text" name="sub1" id="sub1" class="form-control"/>
                       </div>
                   </div>
                   </div>
               </div>
               <br/><br/>
                <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Subject 2<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                          <input type="text" name="sub2" id="sub2" class="form-control"/>
                       </div>
                   </div>
                   </div>
               </div>
               <br/><br/>
                <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Subject 3<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                          <input type="text" name="sub3" id="sub3" class="form-control"/>
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

                           <input type="submit" name="submit" value="Add Subject" id="sbt" class="btn btn-primary">
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