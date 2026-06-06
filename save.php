<?php

include 'config.php';

$nama_karyawan = $_POST['nama_karyawan'] ?? '';
$divisi = $_POST['divisi'] ?? '';
$company = $_POST['company'] ?? '';
$lokasi = $_POST['lokasi'] ?? '';

$laptop = isset($_POST['laptop']) ? 1 : 0;
$notebook = isset($_POST['notebook']) ? 1 : 0;
$hp = isset($_POST['hp']) ? 1 : 0;

$laptop_detail = $_POST['laptop_detail'] ?? '';
$notebook_detail = $_POST['notebook_detail'] ?? '';
$hp_detail = $_POST['hp_detail'] ?? '';

$punya_email = $_POST['punya_email'] ?? 0;
$email = $_POST['email'] ?? '';

$linuxerp_enable = $_POST['linuxerp_enable'] ?? 0;
$linuxerp_user = $_POST['linuxerp_user'] ?? '';
$linuxerp_pass = $_POST['linuxerp_pass'] ?? '';

$winestop_enable = $_POST['winestop_enable'] ?? 0;
$winestop_user = $_POST['winestop_user'] ?? '';
$winestop_pass = $_POST['winestop_pass'] ?? '';

$iseller_enable = $_POST['iseller_enable'] ?? 0;
$iseller_user = $_POST['iseller_user'] ?? '';
$iseller_pass = $_POST['iseller_pass'] ?? '';

$dropbox_enable = $_POST['dropbox_enable'] ?? 0;
$dropbox_user = $_POST['dropbox_user'] ?? '';
$dropbox_pass = $_POST['dropbox_pass'] ?? '';

$esb_enable = $_POST['esb_enable'] ?? 0;
$esb_user = $_POST['esb_user'] ?? '';
$esb_pass = $_POST['esb_pass'] ?? '';

$coretax_enable = $_POST['coretax_enable'] ?? 0;
$coretax_user = $_POST['coretax_user'] ?? '';
$coretax_pass = $_POST['coretax_pass'] ?? '';

$backup_data = isset($_POST['backup_data']) ? 1 : 0;

$sql = "INSERT INTO handover (

nama_karyawan,
divisi,
company,
lokasi,

laptop,
notebook,
hp,

laptop_detail,
notebook_detail,
hp_detail,

punya_email,
email,

linuxerp_enable,
linuxerp_user,
linuxerp_pass,

winestop_enable,
winestop_user,
winestop_pass,

iseller_enable,
iseller_user,
iseller_pass,

dropbox_enable,
dropbox_user,
dropbox_pass,

esb_enable,
esb_user,
esb_pass,

coretax_enable,
coretax_user,
coretax_pass,

backup_data

) VALUES (

?,
?,
?,
?,

?,
?,
?,

?,
?,
?,

?,
?,

?,
?,
?,

?,
?,
?,

?,
?,
?,

?,
?,
?,

?,
?,
?,

?,
?,
?,

?

)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(

"ssssiiisssisisisisisisisisisisi",

$nama_karyawan,
$divisi,
$company,
$lokasi,

$laptop,
$notebook,
$hp,

$laptop_detail,
$notebook_detail,
$hp_detail,

$punya_email,
$email,

$linuxerp_enable,
$linuxerp_user,
$linuxerp_pass,

$winestop_enable,
$winestop_user,
$winestop_pass,

$iseller_enable,
$iseller_user,
$iseller_pass,

$dropbox_enable,
$dropbox_user,
$dropbox_pass,

$esb_enable,
$esb_user,
$esb_pass,

$coretax_enable,
$coretax_user,
$coretax_pass,

$backup_data

);

if($stmt->execute()){

?>
<!DOCTYPE html>
<html>
<head>
<title>Berhasil</title>
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

<a href="admin/login.php"
class="btn btn-outline-danger">
Admin Login </a>

</div>

</nav>

<div class="container py-3">

<div class="alert alert-secondary">

<h4>Data berhasil diterima</h4>

<p>
Untuk perangkat Laptop/Hp kantor yang tersedia mohon untuk segera dikembalikan kepada tim IT.
</p>

<a href="index.php" class="btn btn-secondary">
Kembali ke Home
</a>

</div>

</div>

<script>
localStorage.clear();
</script>

</body>
</html>

<?php

}else{

echo "Error : " . $stmt->error;

}

$stmt->close();
$conn->close();

?>