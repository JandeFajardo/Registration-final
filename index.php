<?php include('server.php');
verify();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <h4>Welcome to our page</h4>
      </li>
    </ul>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">       
      </li>
    </ul>
    <form method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="username" type="text" placeholder="Username" required>
      <input class="form-control mr-sm-2" name="password" type="password" placeholder="Password" required>
      <button class="btn btn-primary" name="submit" type="submit">Login</button>&nbsp
      <a class="btn btn-success" href="new_account.php" role="button">Sign up</a>
    </form>
  </div>
</nav>

<div class="jumbotron bg-transparent">
  <h3 class="display-4">College</h3>
  <p class="lead">A college (Latin: collegium) is an educational institution or a constituent part of one. A college may be a degree-awarding tertiary educational institution, a part of a collegiate or federal university, an institution offering vocational education or a secondary school.</p>
  <hr class="my-4">
  <p>A registration form is a list of fields that a user will input data into and submit to a company or individual. There are many reasons why you would want a person to fill out a registration form. Companies use registration forms to sign up customers for subscriptions, services, or other programs or plans.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>