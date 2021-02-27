<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="{{ asset('style.css') }}" rel="stylesheet" media="screen" />
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
												
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Date of Birth</th>
						<th>Role</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				@foreach($data as $r)
				<tbody>
					<tr>
						
						<td>{{$r->name}}</td>
						<td>{{$r->email}}</td>
						<td>{{$r->gender}}</td>
						<td>{{$r->date_of_birth}}</td>
						<td>{{$r->role}}</td>
						<td>
							<button type="button" class="btn btn-primary" ><a href="{{ URL::to('edit/'.$r->id)}}" style="color:#eaeaf1;">
							Edit</a></button>

							<!-- <a href="#editEmployeeModal" class="btn btn-success" data-toggle="modal"> <span>Add New Employee</span></a> -->

						</td>
						<td>
							<button type="button" class="btn btn-danger"><a href="{{ URL::to('delete/'.$r->id)}}" style="color:#ecf5f3;">Delete</a></button>
							
						</td>
					</tr>
					
					
										
					<!--  -->
				</tbody>
				@endforeach
				
    
			</table>
			
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="post" action="{{ URL::to('/register')}}">
				{{csrf_field()}}
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input name="name" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control" required>
					</div>

					<div class="form-group">
                       <label>Gender</label>
					<div class="form-check">

						  <input class="form-check-input" value="male" type="radio" name="gender" id="flexRadioDefault1">
						  <label class="form-check-label" for="flexRadioDefault1">
						    male
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" value="female" type="radio" name="gender" id="flexRadioDefault2" checked>
						  <label class="form-check-label" for="flexRadioDefault2">
						    female
						  </label>
					</div>
                    </div>
                     <div class="form-group">
                    <label>Active Status</label>
                     <div class="form-check">
						  <input class="form-check-input" name="active" type="checkbox" value="1" id="flexCheckChecked">
						  <label class="form-check-label" for="flexCheckChecked">
						    Active
						  </label>
						  <input class="form-check-input" name="active" type="checkbox" value="0" id="flexCheckChecked">
						  <label class="form-check-label" for="flexCheckChecked">
						    Not Active
						  </label>
					 </div>
					</div>


					<div class="form-group">
						<label>Date of Birth</label>
                       <input type="date" id="birthday" name="birthday">
					</div>	

					<div class="form-group">
						<label>Role</label>
						<input type="text" name="role" class="form-control" required>
					</div>

				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
					<br>




				</div>
			</form>



		 
		</div>
	</div>
</div>

</body>
</html>