<?php 
    require_once('../core/siswa.php');
    $siswa = new Siswa();
    if(isset($_POST['submit'])){
        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $id_kelas = $_POST['id_kelas'];
        $alamat = $_POST['alamat'];
        $no_tlp = $_POST['no_tlp'];
        $id_spp = $_POST['id_spp'];
        $siswa->tambahSiswa($nisn,$nis,$nama,$username,$password,$id_kelas,$alamat,$no_tlp,$id_spp);
    }

?>