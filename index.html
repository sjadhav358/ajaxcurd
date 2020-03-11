<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>homepage</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container">
		<h1 class="text-primary text-uppercase text-center">Ajax curd operation</h1>
		
		<div class="d-flex justify-content-end">
			<button type="button" class="btn btn-primary" 
			data-toggle="modal" data-target="#myModal">Addrecord</button>
		</div>
		<h2 class="text-danger">All record</h2>
		<div id="content">
			
		</div>
   
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ajax curd</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
        	<label>Firstname</label>
        	<input type="text" name="" id="firstname" class="
        	form-control" placeholder="lastname enter">
        </div>
        
         <div class="form-group">
        	<label>lastname</label>
        	<input type="text" name="" id="lastname" class="
        	form-control" placeholder="Firstname enter">
        </div>
        
         <div class="form-group">
        	<label>Email id</label>
        	<input type="email" name="" id="email" class="
        	form-control" placeholder="enter email">
        </div>
        
         <div class="form-group">
        	<label>mobile</label>
        	<input type="text" name="" id="mobile" class="
        	form-control" placeholder="mobile enter">
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        
      <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">save</button>
      </div>

    </div>
  </div>
</div>	
  <!--update modal-->
    <div class="modal" id="updatemodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ajax curd</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
        	<label>Firstname</label>
        	<input type="text" name="" id="u_firstname" class="
        	form-control" placeholder="lastname enter">
        </div>
        
         <div class="form-group">
        	<label>latname</label>
        	<input type="text" name="" id="u_lastname" class="
        	form-control" placeholder="Firstname enter">
        </div>
        
         <div class="form-group">
        	<label>Email id</label>
        	<input type="email" name="" id="u_email" class="
        	form-control" placeholder="enter email">
        </div>
        
         <div class="form-group">
        	<label>mobile</label>
        	<input type="text" name="" id="u_mobile" class="
        	form-control" placeholder="mobile enter">
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        
      <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="updateuser();">save</button>
      <input type="hidden" id="hidden_user_id">
      </div>

    </div>
  </div>
</div>
  	
  	<!--end modal-->	
	</div>
	 <script>
		 $(document).ready(function(){
			 readrecord();
		 });
		 function readrecord()
		 {
			 var readrecord ="readrecord";
			 $.ajax({
				 url:"backend.php",
				 type:"post",
				 data:{readrecord:readrecord},
				 success: function(data,staus){
					   $('#content').html(data);
				 }
			 });
		 }
	 function addRecord()
		 {
			 var firstname = $('#firstname').val();
			 var lastname = $('#lastname').val();
			 var email = $('#email').val();
			 var mobile = $('#mobile').val();
			 
			 $.ajax({
				 
				 url:"backend.php",
				 type:'post',
				 data:{firstname:firstname,
							  lastname:lastname,
							  email:email,
							  mobile:mobile
							},
				 success:function(data,staus)
				 {
					  readrecord();
				 }
			 });
		 }
		 
		 //delete user
	    function dlt(deleteid)
		 {
			 var conf =confirm("are you sure");

			  if(conf==true)
				{
					 
				  $.ajax({
						url:"backend.php",
						type:"post",
						data:{deleteid:deleteid},
						success:function(data,staus)
						{
							 readrecord();
						}
					});
				}
		 }
	
		 
		   function getuserdetails(id)
		 {
			 $("#hidden_user_id").val(id);
			  $.post('backend.php',{
					    id:id
				}, function(data,staus)
					{
					  var user =JSON.parse(data);
					   $('#u_firstname').val(user.fristname);
					   $('#u_lastname').val(user.lastname);
					   $('#u_email').val(user.email);
					   $('#u_mobile').val(user.mobile);
				}
				
			);
					
			$('#updatemodal').modal("show");	
		 }
		 
		 function updateuser()
		 {
			   		var fristname =$('#u_firstname').val();
					   var lastname =$('#u_lastname').val();
					   var email = $('#u_email').val();
					   var mobile = $('#u_mobile').val();
			    var hidden_user_id =$('#hidden_user_id').val();
			 $.post('backend.php',{
				 				 
				 	hidden_user_id:hidden_user_id,
				  fristname: fristname,
				 lastname:lastname,
				  email: email,
				 mobile:mobile
				},function(data,staus){
			    $('#updatemodal').modal("hide");
				   readrecord();
			 }
			);
		 }
	</script>
	
</body>


</html>