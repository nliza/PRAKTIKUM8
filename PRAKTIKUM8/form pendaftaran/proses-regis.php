<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $nomor_pendaftaran = $_POST['nomor_pendaftaran'];
        $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
        $tgl_masuk = $_POST['tgl_masuk'];
        $nis = $_POST['nis'];
        $no_ujian= $_POST['no_ujian'];
        $pend_paud = $_POST['pend_paud'];
        $pend_tk = $_POST['pend_tk'];
        $noseri_skhun = $_POST['noseri_skhun'];
        $noseri_ijazah = $_POST['noseri_ijazah'];
        $hobi = $_POST['hobi'];
        $citacita = $_POST['citacita'];

      // Menyimpan ke database
      $sql = mysqli_query($koneksi, "INSERT INTO registrasi (nomor_pendaftaran, jenis_pendaftaran, tgl_masuk, nis, no_ujian, pend_paud, pend_tk, noseri_skhun, noseri_ijazah, hobi, citacita) VALUES ('$nomor_pendaftaran', '$jenis_pendaftaran', '$tgl_masuk', '$nis', '$no_ujian', '$pend_paud', '$pend_tk', '$noseri_skhun', '$noseri_ijazah', '$hobi', '$citacita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Diri!'); window.location.href='form-datadiri.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Gagal Ditambahkan!!');";
        }
      }
?>