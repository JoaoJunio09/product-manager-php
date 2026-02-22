<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/styles/global.css">
	<link rel="stylesheet" href="../assets/styles/index.css">
	<title>CodeSprint</title>
</head>
<body>

<!-- <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
<label for="floatingInputInvalid">Invalid input</label> -->

	<section class="section-login" >
		<h1>Login</h1>
		<form action="">
			<div class="input-group mb-3">
				<span class="input-group-text">@</span>
				<div class="form-floating">
					<input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
					<label for="floatingInputGroup1">Username</label>
				</div>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
		<div class="alert alert-danger" role="alert" style="display: none;">
			Não foi possível fazer login, tente novamente!
		</div>
	</section>
</body>
</html>