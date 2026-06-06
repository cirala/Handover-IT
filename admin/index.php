<?php

session_start();

include '../config.php';

if(!isset($_SESSION['admin'])){

    header("Location:login.php");
    exit;

}

$data = mysqli_query(
    $conn,
    "SELECT * FROM handover
    ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg border-bottom">

<div class="container">

<img
                src="assets/logo.png"
                alt="Logo"
                height="40"
                class="me-2">

</div>

</nav>

<div class="container mt-4">

<div class="d-flex justify-content-between mb-3">

<h2>
Data Handover
</h2>

<a
href="logout.php"
class="btn btn-danger">

Logout

</a>

</div>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>ID</th>
<th>Nama</th>
<th>Company</th>
<th>Lokasi</th>
<th>Email</th>
<th>Tanggal</th>

</tr>

</thead>

<tbody>

<?php
while($row = mysqli_fetch_assoc($data)){
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['nama_karyawan']; ?></td>

<td><?php echo $row['company']; ?></td>

<td><?php echo $row['lokasi']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['created_at']; ?></td>

</tr>

<?php
}
?>

</tbody>

</table>

</div>

</div>

</body>
</html>