<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Add new Student</h2>
				<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="profile" class="" type="file">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>


	@php
		$stu = App\Models\Student::all();
	@endphp

	@foreach($stu as $students )

	@php
		$media = $students -> getMedia();
	@endphp
	<div class="card w-25" style="margin: 10px auto">
		<div class="card-head"><h2>{{ $students -> name }}</h2></div>
			<div class="card-body">

				@foreach($media as $photo)
				<img width="100" src="{{ $photo -> getUrl() }}" alt="image">
				@endforeach


				
				<h4>{{ $students -> email }}</h4>
				<h4>{{ $students -> cell }}</h4>
			</div>
		
	</div>
	@endforeach
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>