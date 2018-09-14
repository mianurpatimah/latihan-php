<?php
if (isset($_POST['Input'])) {
    $Nama = $_POST['nama'];
    $Nis = $_POST['nis'];
    $Alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jurusan'];
    $Agama = $_POST['agama'];
    $AsalSekolah = $_POST['asal sekolah'];
    $Nama_Orang_Tua = $_POST['Nama Orang Tua'];
    $Email = $_POST ['email'];
    $NilaiIjasah = $_POST['total nilai ijasah sd'];
    $Mata_Pelajaran_yang_disukai = $_POST['Mata Pelajaran yang disukai'];
    echo "Nama : <b>$Nama</b><br>";
    echo "Nomor Insuk Siswa : <b>$Nis</b><br>";
    echo "Alamat : <b>$Alamat</b><br>";
    echo "Jenis Kelamin : <b>$jeniskelamin</b><br>";
    echo "Agama : <b>$Agama</b><br>";
    echo "Nama Orang Tua : <b>$Nama_Orang_Tua</b><br>";
    echo "Email : <b>$Email</b><br>";
    echo "Nilai_Ijasah : <b>$Nilaiijasah</b><br>";
    echo "Mata Pelajaran yang disukai : <b>$Mata_Pelajaran_yang_disukai</b><br>";
      if (isset($_POST['mapel1'])) {
          echo "#" . $_POST['mapel1'] . "<br>";
      }
      if (isset($_POST['mapel2'])) {
          echo "#" . $_POST['mapel2'] . "<br>";
      }
      if (isset($_POST['mapel3'])) {
        echo "#" . $_POST['mapel3'] . "<br>";
      }
      if (isset($_POST['mapel4'])) {
        echo "#" . $_POST['mapel4'] . "<br>";
      }
      if (isset($_POST['mapel5'])) {
        echo "#" . $_POST['mapel5'] . "<br>";
      }
      if ($nilai>=25) {
        echo "Nilai Anda : <b>$nilai</b> (Excellent!)<br>";
      }
      if ($nilai<25) {
        echo "Nilai Anda : <b>$nilai</b> (Worst!)<br>";
      }
    }
?>