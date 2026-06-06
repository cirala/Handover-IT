<?php

session_start();

include '../config.php';

if(isset($_SESSION['admin'])){
    header("Location:index.php");
    exit;
}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM admin
        WHERE username='$username'
        AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){

        $_SESSION['admin'] = true;

        header("Location:index.php");
        exit;

    }else{

        $error = "Username atau Password salah";

    }

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center mt-5">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body">

<h3 class="mb-4">
Login Admin
</h3>

<?php
if(isset($error)){
?>
<div class="alert alert-danger">
    <?php echo $error; ?>
</div>
<?php
}
?>

<form method="POST">

<div class="mb-3">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button
type="submit"
name="login"
class="btn btn-primary w-100">

Login

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>