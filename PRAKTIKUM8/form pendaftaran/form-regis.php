<?php
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>
    <center>
        <h1>
            FORMULIR PESERTA DIDIK
        </h1>
        <form action="#" method="post">
                <label for="tanggal">Tanggal : </label>
                <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
                <br><br>
        </form>
    </center>
<?php
    $error_nomor_pendaftaran = "";
    $error_jenis_pendaftaran = "";
    $error_tgl_masuk = "";
    $error_nis = "";
    $error_no_ujian = "";
    $error_pend_paud = "";
    $error_pend_tk = "";
    $error_noseri_skhun = "";
    $error_noseri_ijazah = "";
    $error_hobi = "";
    $error_citacita = "";

    $nomor_pendaftaran = "";
    $jenis_pendaftaran = "";
    $tgl_masuk = "";
    $nis = "";
    $no_ujian = "";
    $pend_paud = "";
    $pend_tk = "";
    $noseri_skhun = "";
    $noseri_ijazah = "";
    $hobi = "";
    $citacita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS hanya boleh Angka";
            }
        }

        if (empty($_POST["no_ujian"])) {
            $error_no_ujian = "Nomor Peserta Ujian tidak boleh kosong";
        } else {
            $no_ujian = cek_input($_POST["no_ujian"]);
            if (!is_numeric($no_ujian)) {
                $error_no_ujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noseri_skhun"])) {
            $error_noseri_skhun = "Nomor Seri SKHUN tidak boleh kosong";
        } else {
            $noseri_skhun = cek_input($_POST["noseri_skhun"]);
            if (!is_numeric($noseri_skhun)) {
                $noseri_skhun = "Nomor Seri SKHUN hanya boleh angka";
            }
        }

        if (empty($_POST["noseri_ijazah"])) {
            $error_noseri_ijazah = "No Seri Ijazah tidak boleh kosong";
        } else {
            $noseri_ijazah = cek_input($_POST["noseri_ijazah"]);
            if (!is_numeric($noseri_ijazah)) {
                $error_noseri_ijazah = "Nomor Seri Ijazah hanya boleh angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
    
<div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    1. FORM REGISTRASI
                </div>
                <div class="card-body">
                    <form method="post" action="proses-regis.php">

                    <div class="form-group row">
                        <label for="nomor_pendaftaran" class="col-sm-2 col-form-label">No. Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="nomor_pendaftaran" id="nomor_pendaftaran" class="form-control <?php echo ($error_nomor_pendaftaran !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nomor_pendaftaran; ?>"> <span class="warning"><?php echo $error_nomor_pendaftaran ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jenis_pendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jenis_pendaftaran" value="Siswa Baru">Siswa Baru</label>
                            <input type="radio" name="jenis_pendaftaran" value="Pindahan">Pindahan</label> 
                            <span class="warning" ><?php echo $error_jenis_pendaftaran; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" name="tgl_masuk" id="tgl_masuk" class="form-control <?php echo ($error_tgl_masuk !="" ? "is-invalid" : ""); ?>" placeholder="XX - Bulan - XXXX" value="<?php echo $tgl_masuk; ?>"> <span class="warning"><?php echo $error_tgl_masuk ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="no_ujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_ujian" id="no_ujian" class="form-control <?php echo ($error_no_ujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" value="<?php echo $no_ujian; ?>"> <span class="warning"><?php echo $error_no_ujian ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="pend_paud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <input type="radio" name="pend_paud" value="Ya">Ya</label>
                            <input type="radio" name="pend_paud" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_pend_paud; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pend_tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-10">
                            <input type="radio" name="pend_tk" value="Ya">Ya</label>
                            <input type="radio" name="pend_tk" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_pend_tk; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noseri_skhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noseri_skhun" id="noseri_skhun" class="form-control <?php echo ($error_noseri_skhun !="" ? "is-invalid" : ""); ?>" placeholder="SKHUN Sebelumnya" value="<?php echo $noseri_skhun; ?>"> <span class="warning"><?php echo $error_noseri_skhun ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noseri_ijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noseri_ijazah" id="noseri_ijazah" class="form-control <?php echo ($error_noseri_ijazah !="" ? "is-invalid" : ""); ?>" placeholder="Seri Ijazah Sebelumnya" value="<?php echo $noseri_ijazah; ?>"> <span class="warning"><?php echo $error_noseri_ijazah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="citacita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_citacita; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>