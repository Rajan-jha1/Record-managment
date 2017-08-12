<?php
include_once('functions.php');
include("../db/db_config.php");
session_start();
$sess=$_SESSION['username'];
if(!isset($sess))
{
    header('location:../index.php');
}
?>
<?php
extract($_POST);
if(isset($submit))
{
	$course=$_POST['csname'];
	$subject=$_POST['subject'];
	$cdate=$_POST['cdate'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$gname=$_POST['gname'];
	$ocp=$_POST['ocp'];
	$income=$_POST['income'];
	$category=$_POST['category'];
	$ph=$_POST['ph'];
	$nation=$_POST['nation'];
	$mobno=$_POST['mobno'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$State=$_POST['state'];
	$city=$_POST['city'];
	$padd=$_POST['padd'];
	$cadd=$_POST['cadd'];
	$query="INSERT INTO registration (course,subject,fname,mname,lname,gender, gname,ocp,income,category,pchal,nat,mob,email,country,state,dist,padd, cadd) 
VALUES ('$course','$subject','$fname','$mname', '$lname', '$gender', '$gname', '$ocp', '$income', '$category', '$ph', '$nation', '$mobno', '$email', '$country', '$State', '$city', '$padd', '$cadd')";
	$result=mysqli_query($link,$query);
    if($result==1)
    {
        echo "<script>alert('Course Added Successfully')</script>";
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
           <div class="panel-heading">Register</div> 
           <div class="panel-body">
           <form method="post" id="signupForm" name="signupForm">
               <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Select Course<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                           <select name="csname" id="csname" class="form-control" onchange="showSub(this.value)">
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
                           <label>Select Subject<span style="font-size: 18px; color: red;">*</span></label>
                       </div>
                       <div class="col-lg-6">
                           <input type="text" name="subject" id="subject" class="form-control">
                       </div>
                   </div>
                   </div>
               </div>
               <br/><br/>
               <div class="row">
                   <div class="form-group">
                   <div class="col-lg-10">
                       <div class="col-lg-4 col-lg-offset-1">
                           <label>Creation Session</label>
                       </div>
                       <div class="col-lg-6">
                          <input class="form-control" value="2017-2018" readonly="readonly" name="cdate">
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
                   </div>
                   </div>
               </div> 
               
           </div>
        </div>
    </div>

    <!--personal information-->

<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-primary">
			<div class="panel-heading">Personal Informations</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>First Name<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fname" required="required" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Middle Name</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mname">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Last Name</label>
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="lname" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Gender</label>
			
			</div>
			<div class="col-lg-4">
		 <input type="radio" name="gender" id="male" value="Male"> &nbsp; Male &nbsp;
		 <input type="radio" name="gender" id="female" value="feale"> &nbsp; Female &nbsp;
		 <input type="radio" name="gender" id="other" value="other"> &nbsp; Other &nbsp;
			</div>
			</div>	
	<br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Guardian Name<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="gname" required="required" pattern="[A-Za-z]+$">
			</div>
			 <div class="col-lg-2">
			<label>Occupation</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="ocp" id="ocp">
			</div>
			</div>	
			<br><br>
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Family Income<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="income"  id="income"required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="200000">200000</option>
        <option value="500000">500000</option>
        <option value="700000">700000</option>
        
       </select>
			</div>
			 <div class="col-lg-2">
			<label>Category<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="category"  id="category" required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="general">General</option>
        <option value="obc">OBC</option>
        <option value="sc">SC</option>
        <option value="st">ST</option>
		<option value="other">Other</option>
       </select>
			</div>
			</div>	
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Physically Challenged<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="ph"  id="ph"required="required" >
        <option VALUE="">SELECT</option>
        <option VALUE="yes">Yes</option>
        <option value="no">No</option>
               
       </select>
			</div>
			 <div class="col-lg-2">
			<label>Nationality<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="nation" id="nation">
			</div>
			</div>	
			<br><br>
			</div>	
			<br><br>
		</div>
      	</div>
		</div>
  <!--personal information ends-->
  <!--contact information-->
  <div class="row">
			<div class="col-lg-12">
			<div class="panel panel-primary">
			<div class="panel-heading">Contact Informations</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Mobile Number<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" type="number" name="mobno" required="required" maxlength="10">
			</div>
			 <div class="col-lg-2">
			<label>Email Id</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  type="email" name="email">
			</div>
			</div>	
			<br><br>
								
		<div class="form-group">
		    <div class="col-lg-2">
			<label>Country</label>
			</div>
			<div class="col-lg-4">
			<select class="form-control" name="country" id="country" onchange="showState(this.value)" >
			<option value="">SELECT</option>	
			<?php echo load_country();?>		
		   </select>
			</div>
			 <div class="col-lg-2">
			<label>State</label>
			
			</div>
			<div class="col-lg-4">
			<select name="state" id="state" class="form-control"onchange="showCity(this.value)">
				<option value="">SELECT</option>
			</select>
			</div>
			</div>	
	<br><br><br><br>		
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>City<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
           <select name="city" id="dist"  class="form-control" onchange="" required="required">
        <option value="">SELECT</option>
		</select>
			</div>
			 <div class="col-lg-2">
			<label>Permanent Address<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<textarea class="form-control" rows="3" name="padd" id="padd"></textarea>
			</div>
			</div>	
			<br><br><br><br>
					
		     
			<br><br>
			
			
					
		     <div class="form-group">
			 <div class="col-lg-2">
			<label>Correspondence Address<span id="" style="font-size:11px;color:red">*</span>
			
			</div>
			<div class="col-lg-4">
      <textarea class="form-control" rows="3" name="cadd"  id="cadd"></textarea>
			</div>
			 <div class="col-lg-2">
			
			
			
			</div>
			<div class="col-lg-4">
			
			</div>
			</div>	
			<br><br>
			
			
			</div>	
			<br><br>
		</div>
      	</div>
		</div>
  <!--ends contact information-->
  <!---Acedemic Information-->
  <div class="row">
			<div class="col-lg-12">
			<div class="panel panel-primary">
			<div class="panel-heading">Academic Informations</div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Board<span id="" style="font-size:11px;color:red">*</span>	</label></th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Roll No</th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Year Of Passing<span id="" style="font-size:11px;color:red">*</span></th>
			</div>                                 
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td><div class="col-lg-6">
				  <input class="form-control" type="text" name="">
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" type="text" name="roll1" >
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="pyear1" >
			</div></td>
                  </tr>

              <tr> 
                  <td><div class="col-lg-6">
				  <input class="form-control" type="text" name="board2" >
				  </div></td>
                  <td><div class="col-lg-6">
			<input class="form-control" type="text" name="roll2" >
			</div></td>
            <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="pyear2" >
			</div></td>
                  </tr>      
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div>	
			<br><br>			
			<br><br>
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                         <div class="col-lg-6">
			<th>S.No</th>
			</div>   
            <div class="col-lg-6">
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Subject</th>
			</div>   
              <div class="col-lg-6">
			 <th>&nbsp;&nbsp;&nbsp;&nbsp;Marks Obtained</th>
			</div>                                 
             <div class="col-lg-6">
			   <th>&nbsp;&nbsp;&nbsp;&nbsp;Full Marks</th>
			</div>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <td>1</td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="sub1">
			</div></td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="marks1">
			</div></td>
			                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="fmarks1">
			</div></td>
                  </tr>
				  
	         <tr> 
                  <td>2</td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="sub2">
			</div></td>
                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="marks2">
			</div></td>
			                  <td><div class="col-lg-6">
			<input class="form-control"  type="text" name="fmarks2">
			</div></td>
                  </tr>			  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>	
							
		  </div>	
			<br>
		
	<div class="form-group">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Register"></button>
	</div>
	</div>			
	</div>
	</div><!--row!-->
	</form>		
  <!---Acedemic information-->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include_once('footer.php');?>



