<?php
 $conn =mysqli_connect('localhost','root',"",'crud');
extract($_POST);

 if(isset($_POST['readrecord']))
 {
	 $data = '<table class="table table-striped  table-responsive">
	      <tr>
				<th>no.</th>
				<th>first name</th>
				<th>last name</th>
				<th>email address</th>
				<th>mobile number</th>
				<th>editaction</th>
				<th>delete action</th>
			
			
		</tr>';
	 
	 $dis = "select * from crudtable ";
	 
	  $res = mysqli_query($conn,$dis);
	 
	  if(mysqli_num_rows($res)>0)
		{
			$number =1;
			while($row = mysqli_fetch_array($res)){
			 $data .='<tr>
			 					<td>'.$number.'</td>
								<td>'.$row[1].'</td>
								<td>'.$row[2].'</td>
								<td>'.$row[3].'</td>
								<td>'.$row[4].'</td>
								<td>
								  <button onclick="getuserdetails('.$row['id'].')"
									 class ="btn btn-success">edit</button>
								</td>
								
								<td>
								  <button onclick="dlt('.$row['id'].');"
									 class ="btn btn-danger">delete</button>
								</td>
							</tr>';
				     $number++;
			}
		}
    $data .='</table>';
	  echo $data;
 }

  



 if(isset($_POST['firstname']) && isset($_POST['lastname'])&&
	  isset($_POST['email']) && isset($_POST['mobile']))
 {
	 $query =" INSERT INTO `crudtable`( `fristname`, `lastname`, `email`, `mobile`) 
	 VALUES ('$firstname','$lastname','$email','$mobile')";
	 
	 mysqli_query($conn,$query);
	 echo "data inserted ";
 }


//delete user
 if(isset($_POST['deleteid']))
 {
	 $userid = $_POST['deleteid'];
	$d ="delete from crudtable where id ='$userid'";
	 mysqli_query($conn,$d);
	

 }
//update
  if(isset($_POST['id'])&& isset($_POST['id'])!="")
	{
		$user_id = $_POST['id'];
		$query = "select * from crudtable where id='$user_id' ";
		if(!$result = mysqli_query($conn,$query)){
			 exit(mysqli_error());
		}
		
		$response = array();
		if(mysqli_num_rows($result)>0){
			while($row =mysqli_fetch_assoc($result)){
				$response = $row;
				
			}
		}
		else{
			$response['staus']=200;
			$response['message']="data not found";
			
		}
		echo json_encode($response);
	}
 else
 {
	 		$response['staus']=200;
			$response['message']="invalide request";
 }
 //update table 
    if(isset($_POST['hidden_user_id']))
		{
			$q ="UPDATE `crudtable` SET `fristname`='$fristname',`lastname`='	$lastname',
			`email`='$email',`mobile`='$mobile' WHERE id ='$hidden_user_id' ";
			mysqli_query($conn,$q);
		}
   
?>