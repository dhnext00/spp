<?php 
    require_once('../core/siswa.php');
    $siswa = new Siswa();
    if(isset($_POST['submit'])){
        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
        $username = $_POST['username'];
        $password = $_POST['password'] ;
        $id_kelas = $_POST['id_kelas'];
        $alamat = $_POST['alamat'];
        $no_tlp = $_POST['no_tlp'];
        $id_spp = $_POST['id_spp'];
        $siswa->editSiswa($nisn,$nis,$username,$password,$id_kelas,$alamat,$no_tlp,$id_spp);
    }

?>