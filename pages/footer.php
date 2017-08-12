 <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../custom.js"></script>
    

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script type="text/javascript">
        function showSub(val) {
    
    //alert(val);
    $.ajax({
    type: "POST",
    url: "subject.php",
    data:'cid='+val,
    success: function(data){
      // alert(data);
        $("#subject").val(data);
    }
    });
    
}
function showcFull(val) {
    
    alert(val);
    $.ajax({
    type: "POST",
    url: "subject.php",
    data:'cfid='+val,
    success: function(data){
      // alert(data);
        $("#cfullname").val(data);
    }
    });

}

 function showState(val) {
    
    //alert(val);
    $.ajax({
    type: "POST",
    url: "subject.php",
    data:'sid='+val,
    success: function(data){
        //console.log(data);
       //alert(data);
        $("#state").html(data);
    }
    });
    
}
function showCity(val) {
    
    //alert(val);
    $.ajax({
    type: "POST",
    url: "subject.php",
    data:'tid='+val,
    success: function(data){
        //console.log(data);
       //alert(data);
        $("#dist").html(data);
    }
    });
}
function show_subject(val) {
    
    //alert(val);
    $.ajax({
    type: "POST",
    url: "subject.php",
    data:'cname='+val,
    success: function(data){
        //console.log(data);
       //alert(data);
        $("#result").html(data);
    }
    });
}


function username_check() {
//$("#loaderIcon").hide();
jQuery.ajax({
url: "username_availability.php",
data:'uname='+$("#username").val(),
type: "POST",
success:function(data){
$("#username-availability-status").html(data);
},
error:function (){}
});
}
function password_check() {
    $("#loaderIcon").hide();
jQuery.ajax({
url: "username_availability.php",
data:'password='+$("#password").val(),
type: "POST",
success:function(data){
$("#password-availability-status").html(data);
},
error:function (){}
});
}
$(document).ready(function(){
    $("#sbt").click(function(){
      var uname=$("#username").val();
      var np=$("#npassword").val();
      var pas=$("#password").val();
     if(np=="")
     {
        $("#npassword").focus();
        $("#error_msg").fadeIn(2000);
        return false;
     }
     else if(pas=="")
     {
         $("#password").focus();
        $("#error_msg1").fadeIn(2000);
        return false;
     }
      else if(uname=="")
     {
         $("#username").focus();
        $("#error_msg2").fadeIn(2000);
        return false;
     }
     return true;
    });
});
</script>
</body>
</html>