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
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<form  method="post" action="{{ URL::to('update/'.$data->id)}}">
				@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					
				</div>
				
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input name="name" type="text" value="{{$data->name}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="{{$data->email}}" class="form-control" required>
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" value="{{$data->password}}" name="password" class="form-control" required>
					</div>

					


					<div class="form-group">
						<label>Date of Birth</label>
                       <input type="date" id="birthday" value="{{$data->date_of_birth}}" name="birthday">
					</div>	

					<div class="form-group">
						<label>Role</label>
						<input type="text" value="{{$data->role}}" name="role" class="form-control" required>
					</div>

				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" ><a href="{{ URL::to('/')}}" style="color:#eaeaf1;">
							Back</a></button>
					<button type="submit" class="btn btn-primary">
							Update</button>
				</div>
			</form>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
		
	</div>

</body>
</html>