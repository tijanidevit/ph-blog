<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h2 class="text-success">Welcome to basic CRUD</h2>	

	<div class="row">

		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h4>Add Post</h4>
			<form>
				<div class="form-group">
					<label>Title</label>
					<input type="text" class="form-control" name="title">
				</div>

				<div class="form-group">
					<label>Content</label>
					<textarea rows="7" class="form-control" name="content"></textarea>
				</div>

				<div class="form-group">
					<button class="mt-3 btn btn-dark">Submit</button>
				</div>
			</form>
		</div>

		<div class="col-md-3"></div>
	</div>

	<h2 class="mt-5 text-center">Latest Posts</h2>
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="card-link">Card link</a>
			<a href="#" class="card-link">Another link</a>
		</div>
	</div>

</body>
</html>

<script src="js/bootstrap.min.js"></script>
