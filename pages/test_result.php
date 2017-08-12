<?php
session_start();
$sess=$_SESSION['username'];
if(!isset($sess))
{
    header('location:../index.php');
}
include_once('../db/db_config.php');
$query="select * from subject ";
$result=mysqli_query($link,$query);
$sno=1;
?>
<?php include_once('header.php');?>
    <div id="wrapper">
<?php include('leftbar.php');?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Welcome <?php echo Ucfirst($sess);?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            View Course
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Subject1</th>
                                        <th>Subject2</th>
                                        <th>Subject3</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                 <?php 
                                 while($row=mysqli_fetch_assoc($result))
                                 	{?>
                                    <tr class="odd<?php echo $row['subid']; ?>">
                                        <td><?php echo $sno++;?></td>
                                        <td><?php echo strtoupper($row['sub1']);?></td>
                                        <td><?php echo strtoupper($row['sub2']);?></td>
                                        <td><?php echo strtoupper($row['sub3']);?></td>
                                        <td >
                                        <span class="action"><a href="#" id="<?php echo $row['subid']; ?>" class="delete" title="Delete"><p class="fa fa-times-circle" style="color:red;"></p></a></span>
                                        </td>
                                    </tr>
                                    <?php }
                                    ?>
                              
                                </tbody>

                                </table>
                            <!-- /.table-responsive -->
                <!-- /.col-lg-6 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script type="text/javascript">
    $(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "delete_course.php",
   data: info,
   success: function(){
    var ie=$(".odd" + del_id).fadeOut('slow');
    console.log(ie);
    }
});
  
 }
return false;
});
});
</script>

</body>

</html>
