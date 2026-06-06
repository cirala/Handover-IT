<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<title>DWIMITRA IT Handover</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#ffffff;
    font-family:'Segoe UI',sans-serif;
}

.navbar{
    background:white;
}

.main-content{
    width:100%;
    max-width:900px;
    margin:0 auto;
    padding:40px 20px 80px 20px;
}

.step{
    display:none;
}

.step.active{
    display:block;
}

.section-title{
    font-size:32px;
    font-weight:700;
    margin-bottom:10px;
}

.section-desc{
    color:#6b7280;
    margin-bottom:40px;
}

.hidden{
    display:none;
}

.form-control,
.form-select{

    border-radius:10px;
    padding:12px;

}

.form-check{
    margin-bottom:12px;
}


.account-item{

    border-bottom:1px solid #e5e7eb;
    padding:20px 0;

}

.review-box{

    background:#f8fafc;
    padding:20px;
    border-radius:10px;

}
.wizard-nav{
    margin-top:50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.wizard-nav .btn{
    min-width:140px;
}

@media (max-width:768px){

    .main-content{
        padding:25px 15px 60px 15px;
    }

    .section-title{
        font-size:28px;
    }

    .wizard-nav{
        display:flex;
        justify-content:space-between;
        align-items:center;
        width:100%;
        gap:10px;
    }

    .wizard-nav .btn{
        min-width:120px;
        width:auto;
    }

}

</style>

</head>

<body>

<div class="main-content">

<form
action="save.php"
method="POST"
id="handoverForm">

<!-- ==================== -->
<!-- STEP 1 -->
<!-- ==================== -->

<div
class="step active"
id="step1">

<h3 class="section-title">
Data Karyawan
</h3>

<div class="border-top my-4"></div>

<p class="section-desc">
Lengkapi data dasar karyawan yang akan melakukan handover.
</p>

<div class="mb-3">

<label class="form-label">
Nama Karyawan
</label>

<input
type="text"
class="form-control"
name="nama_karyawan"
id="nama_karyawan"
required>

</div>

<div class="mb-3">

<label class="form-label">
Divisi
</label>

<input
type="text"
class="form-control"
name="divisi"
id="divisi">

</div>

<div class="mb-3">

<label class="form-label">
Company
</label>

<select
class="form-select"
name="company"
id="company"
required>

<option value="">
Pilih Company
</option>

<option value="NAI">
NAI
</option>

<option value="DSP">
DSP
</option>

<option value="SARINDO">
SARINDO
</option>

</select>

</div>

<div
class="mb-3 hidden"
id="lokasiContainer">

<label class="form-label">
Lokasi DSP
</label>

<select
class="form-select"
name="lokasi"
id="lokasi">

<option value="">
Pilih Lokasi
</option>

<option value="Jakarta">
Jakarta
</option>

<option value="Bali">
Bali
</option>

<option value="Semarang">
Semarang
</option>

<option value="Balikpapan">
Balikpapan
</option>

</select>

</div>

</div>
<!-- ==================== -->
<!-- STEP 2 -->
<!-- ==================== -->

<div
class="step"
id="step2">

<h2 class="section-title">
Perangkat
</h2>

<div class="border-top my-4"></div>

<p class="section-desc">
Pilih perangkat yang digunakan oleh anda.
</p>

<div class="form-check">

<input
class="form-check-input"
type="checkbox"
id="laptop"
name="laptop"
value="1">

<label
class="form-check-label"
for="laptop">

Laptop

</label>

</div>

<div
id="laptopDetailBox"
class="hidden mb-4">

<label class="form-label">
Merk / Tipe Laptop
</label>

<input
type="text"
class="form-control"
name="laptop_detail"
placeholder="Contoh: Lenovo, Dell, Asus, HP">

</div>

<div class="form-check">

<input
class="form-check-input"
type="checkbox"
id="notebook"
name="notebook"
value="1">

<label
class="form-check-label"
for="notebook">

Notebook

</label>

</div>

<div
id="notebookDetailBox"
class="hidden mb-4">

<label class="form-label">
Merk / Tipe Notebook
</label>

<input
type="text"
class="form-control"
name="notebook_detail"
placeholder="Contoh: Notebook">

</div>

<div class="form-check">

<input
class="form-check-input"
type="checkbox"
id="hp"
name="hp"
value="1">

<label
class="form-check-label"
for="hp">

HP

</label>

</div>

<div
id="hpDetailBox"
class="hidden mb-4">

<label class="form-label">
Merk / Tipe HP
</label>

<input
type="text"
class="form-control"
name="hp_detail"
placeholder="Contoh: Samsung A54, Iphone 14 Pro">

</div>

<div class="alert alert-info d-flex align-items-start" role="alert">

    <i class="bi bi-info-circle-fill me-2 mt-1"></i>

    <div>
        Jika tidak ada harap untuk tidak di ceklis.
    </div>

</div>

</div>

<!-- ==================== -->
<!-- STEP 3 -->
<!-- ==================== -->

<div
class="step"
id="step3">

<h2 class="section-title">
Email
</h2>

<div class="border-top my-4"></div>

<p class="section-desc">
Apakah anda menggunakan Email yang diberikan oleh perusahaan.
</p>

<div class="mb-3">

<label class="form-label">
Menggunakan Email?
</label>

<select
class="form-select"
name="punya_email"
id="punya_email">

<option value="">
Pilih
</option>

<option value="1">
Ya
</option>

<option value="0">
Tidak
</option>

</select>

</div>

<div
id="emailBox"
class="hidden mb-4">

<label class="form-label">
Alamat Email
</label>

<input
type="email"
class="form-control"
name="email"
placeholder="nama@pt-nai.id/@pt-dsp.com/@ptsarindo.com">

</div>

<div class="alert alert-info d-flex align-items-start" role="alert">

    <i class="bi bi-info-circle-fill me-2 mt-1"></i>

    <div>
        Note: bukan email google milik pribadi!
    </div>

</div>

</div>
<!-- ==================== -->
<!-- STEP 4 -->
<!-- ==================== -->

<div
class="step"
id="step4">

<h2 class="section-title">
Akun Sistem
</h2>

<div class="border-top my-4"></div>

<p class="section-desc">
Centang akun sistem yang digunakan lalu isi username dan passwordnya.
</p>

<!-- LinuxERP -->

<div class="account-item">

<div class="form-check">

<input
class="form-check-input accountCheck"
type="checkbox"
id="linuxerp_check">

<label
class="form-check-label fw-semibold"
for="linuxerp_check">

LinuxERP

</label>

</div>

<div
id="linuxerpBox"
class="hidden mt-3">

<input
type="hidden"
name="linuxerp_enable"
value="0"
class="linuxerpEnable">

<input
type="text"
class="form-control mb-2"
name="linuxerp_user"
placeholder="Username LinuxERP">

<input
type="text"
class="form-control"
name="linuxerp_pass"
placeholder="Password LinuxERP">

</div>

</div>

<!-- Winestop -->

<div class="account-item">

<div class="form-check">

<input
class="form-check-input accountCheck"
type="checkbox"
id="winestop_check">

<label
class="form-check-label fw-semibold"
for="winestop_check">

Winestop

</label>

</div>

<div
id="winestopBox"
class="hidden mt-3">

<input
type="hidden"
name="winestop_enable"
value="0"
class="winestopEnable">

<input
type="text"
class="form-control mb-2"
name="winestop_user"
placeholder="Username Winestop">

<input
type="text"
class="form-control"
name="winestop_pass"
placeholder="Password Winestop">

</div>

</div>

<!-- iSeller -->

<div class="account-item">

<div class="form-check">

<input
class="form-check-input accountCheck"
type="checkbox"
id="iseller_check">

<label
class="form-check-label fw-semibold"
for="iseller_check">

iSeller

</label>

</div>

<div
id="isellerBox"
class="hidden mt-3">

<input
type="hidden"
name="iseller_enable"
value="0"
class="isellerEnable">

<input
type="text"
class="form-control mb-2"
name="iseller_user"
placeholder="Username iSeller">

<input
type="text"
class="form-control"
name="iseller_pass"
placeholder="Password iSeller">

</div>

</div>

<!-- Dropbox -->

<div class="account-item">

<div class="form-check">

<input
class="form-check-input accountCheck"
type="checkbox"
id="dropbox_check">

<label
class="form-check-label fw-semibold"
for="dropbox_check">

Dropbox

</label>

</div>

<div
id="dropboxBox"
class="hidden mt-3">

<input
type="hidden"
name="dropbox_enable"
value="0"
class="dropboxEnable">

<input
type="text"
class="form-control mb-2"
name="dropbox_user"
placeholder="Username Dropbox">

<input
type="text"
class="form-control"
name="dropbox_pass"
placeholder="Password Dropbox">

</div>

</div>

<!-- ESB -->

<div class="account-item">

<div class="form-check">

<input
class="form-check-input accountCheck"
type="checkbox"
id="esb_check">

<label
class="form-check-label fw-semibold"
for="esb_check">

ESB

</label>

</div>

<div
id="esbBox"
class="hidden mt-3">

<input
type="hidden"
name="esb_enable"
value="0"
class="esbEnable">

<input
type="text"
class="form-control mb-2"
name="esb_user"
placeholder="Username ESB">

<input
type="text"
class="form-control"
name="esb_pass"
placeholder="Password ESB">

</div>

</div>

<!-- Coretax -->

<div class="account-item">

<div class="form-check">

<input
class="form-check-input accountCheck"
type="checkbox"
id="coretax_check">

<label
class="form-check-label fw-semibold"
for="coretax_check">

Coretax

</label>

</div>

<div
id="coretaxBox"
class="hidden mt-3">

<input
type="hidden"
name="coretax_enable"
value="0"
class="coretaxEnable">

<input
type="text"
class="form-control mb-2"
name="coretax_user"
placeholder="Username Coretax">

<input
type="text"
class="form-control"
name="coretax_pass"
placeholder="Password Coretax">

</div>

</div>

<div class="alert alert-info d-flex align-items-start" role="alert">

    <i class="bi bi-info-circle-fill me-2 mt-1"></i>

    <div>
        Note: isi username saja jika lupa dengan password.
    </div>

</div>

</div>
<!-- ==================== -->
<!-- STEP 5 -->
<!-- ==================== -->

<div
class="step"
id="step5">

<h2 class="section-title">
Backup Data
</h2>

<div class="border-top my-4"></div>

<p class="section-desc">
Pastikan data penting sudah dibackup sebelum handover dilakukan.
</p>

<div id="backupContainer">

<div class="form-check">

<input
class="form-check-input"
type="checkbox"
name="backup_data"
value="1"
id="backup_data">

<label
class="form-check-label"
for="backup_data">

Saya akan menyerahkan backup data ke tim IT

</label>

</div>

</div>

</div>

<!-- ==================== -->
<!-- STEP 6 -->
<!-- ==================== -->

<div
class="step"
id="step6">

<h2 class="section-title">
Review Data
</h2>

<p class="section-desc">
Periksa kembali seluruh data sebelum dikirim.
</p>

<div class="review-box">

<div id="reviewContent">

Data review akan muncul di sini.

</div>

</div>

</div>

<!-- ==================== -->
<!-- NAVIGATION -->
<!-- ==================== -->

<div class="wizard-nav">

<button
type="button"
id="prevBtn"
class="btn btn-outline-secondary">

Kembali

</button>

<button
type="button"
id="nextBtn"
class="btn btn-primary">

Berikutnya

</button>

<button
type="submit"
id="submitBtn"
class="btn btn-success hidden">

Submit

</button>

</div>

</form>

</div>

<script>

let currentStep = 1;
const totalStep = 6;

const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const submitBtn = document.getElementById("submitBtn");

prevBtn.style.display = "none";

function showStep(step){

    document
    .querySelectorAll(".step")
    .forEach(el => el.classList.remove("active"));

    document
    .getElementById("step" + step)
    .classList.add("active");

    if(step === 1){

        prevBtn.style.display = "none";

    }else{

        prevBtn.style.display = "inline-block";

    }

    if(step === totalStep){

        nextBtn.style.display = "none";
        submitBtn.classList.remove("hidden");

        generateReview();

    }else{

        nextBtn.style.display = "inline-block";
        submitBtn.classList.add("hidden");

    }

}

nextBtn.addEventListener("click",()=>{

    if(currentStep < totalStep){

        currentStep++;
        showStep(currentStep);

    }

});

prevBtn.addEventListener("click",()=>{

    if(currentStep > 1){

        currentStep--;
        showStep(currentStep);

    }

});

showStep(1);

</script>

<script>

/* COMPANY DSP */

const company =
document.getElementById("company");

const lokasiContainer =
document.getElementById("lokasiContainer");

company.addEventListener("change",()=>{

    if(company.value === "DSP"){

        lokasiContainer.classList.remove("hidden");

    }else{

        lokasiContainer.classList.add("hidden");

    }

    updateBackup();

});

</script>

<script>

/* EMAIL */

const punyaEmail =
document.getElementById("punya_email");

const emailBox =
document.getElementById("emailBox");

punyaEmail.addEventListener("change",()=>{

    if(punyaEmail.value === "1"){

        emailBox.classList.remove("hidden");

    }else{

        emailBox.classList.add("hidden");

    }

});

</script>

<script>

/* DEVICE */

document
.getElementById("laptop")
.addEventListener("change",function(){

document
.getElementById("laptopDetailBox")
.classList.toggle("hidden");

});

document
.getElementById("notebook")
.addEventListener("change",function(){

document
.getElementById("notebookDetailBox")
.classList.toggle("hidden");

});

document
.getElementById("hp")
.addEventListener("change",function(){

document
.getElementById("hpDetailBox")
.classList.toggle("hidden");

});

</script>

<script>

/* ACCOUNT SYSTEM */

const accountMap = {

linuxerp_check : "linuxerpBox",
winestop_check : "winestopBox",
iseller_check : "isellerBox",
dropbox_check : "dropboxBox",
esb_check : "esbBox",
coretax_check : "coretaxBox"

};

for(const key in accountMap){

    document
    .getElementById(key)
    .addEventListener("change",function(){

        const target =
        document.getElementById(
        accountMap[key]
        );

        if(this.checked){

            target.classList.remove("hidden");

            target
            .querySelector("input[type='hidden']")
            .value = "1";

        }else{

            target.classList.add("hidden");

            target
            .querySelector("input[type='hidden']")
            .value = "0";

        }

    });

}

</script>

<script>

/* BACKUP */

function updateBackup(){

    const companyVal =
    document.getElementById("company").value;

    const lokasiVal =
    document.getElementById("lokasi").value;

    let html = "";

    if(
        companyVal === "DSP"
        &&
        (
        lokasiVal === "Bali"
        ||
        lokasiVal === "Semarang"
        ||
        lokasiVal === "Balikpapan"
        )
    ){

        html = `

        <a
        href="https://drive.google.com/"
        target="_blank"
        class="btn btn-outline-primary mb-3">

        Buka Google Drive Backup

        </a>

        <div class="form-check">

        <input
        class="form-check-input"
        type="checkbox"
        name="backup_data"
        value="1">

        <label class="form-check-label">

        Saya sudah melakukan backup data

        </label>

        </div>

        `;

    }else{

        html = `

        <div class="form-check">

        <input
        class="form-check-input"
        type="checkbox"
        name="backup_data"
        value="1">

        <label class="form-check-label">

        Saya akan menyerahkan backup data ke tim IT

        </label>

        </div>

        `;

    }

    document
    .getElementById("backupContainer")
    .innerHTML = html;

}

document
.getElementById("lokasi")
.addEventListener(
"change",
updateBackup
);

</script>

<script>

/* REVIEW */

function generateReview(){

let review = "";

review += "<b>Nama:</b> "
+ document.getElementById("nama_karyawan").value
+ "<br>";

review += "<b>Divisi:</b> "
+ document.getElementById("divisi").value
+ "<br>";

review += "<b>Company:</b> "
+ document.getElementById("company").value
+ "<br>";

review += "<b>Lokasi:</b> "
+ document.getElementById("lokasi").value
+ "<br><hr>";

review += "<b>Laptop:</b> "
+ (document.getElementById("laptop").checked ? "Ya" : "Tidak")
+ "<br>";

review += "<b>Notebook:</b> "
+ (document.getElementById("notebook").checked ? "Ya" : "Tidak")
+ "<br>";

review += "<b>HP:</b> "
+ (document.getElementById("hp").checked ? "Ya" : "Tidak")
+ "<br>";

const email =
document.querySelector(
"[name='email']"
);

if(email){

review += "<hr>";
review += "<b>Email:</b> "
+ email.value;

}

document
.getElementById("reviewContent")
.innerHTML = review;

}

</script>

</body>
</html>