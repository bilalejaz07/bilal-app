
<html>
<head>
<link rel='stylesheet' href='style.css'>
<title>Testing App</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<style>
.panel-heading{
text-align:center;
font-size:160%;
font-family:verdana;}
h1{
font-family:verdana;

margin-bottom:4%;
}

</style>
<title>
Registration
</title>
</head>
<body>
<div class='container'>

<hr/>
<h1>Testing App</h1>
<div class="panel panel-default">
  <div class="panel-heading">Register As New Admin</div>
  
</div>
<form role="form" method="post" action="" enctype="multipart/form-data">
<div class='well'>
<div class="form-group">
      <label for="usr">FULL NAME:</label>
      <input type="text"required='required' name='name' class="form-control" id="usr">
    </div>
<div class="form-group">
      <label for="usr">PASSWORD:</label>
      <input type="password"required='required' name='password' class="form-control" id="usr">
    </div>

<div class="form-group">
      <label for="usr">EMAIL ID:</label>
      <input type="email"required='required' name='email' class="form-control" id="usr">
    </div>
 <input type="submit" name='submit'class="btn btn-info" value="Submit Form">

</form>


</div>

<?php

if(isset($_POST['submit'])){
$name=@$_POST['name'];
$password=@$_POST['password'];
$email=@$_POST['email'];
echo "<h2>Name: $name</h2><br/>";
echo "<h2>Password: $password</h2><br/>";
echo "<h2>Email: $email</h2><br/>";
}
?>
</body>


</html>

