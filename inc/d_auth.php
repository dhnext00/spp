<?php
session_start();
require_once('../core/kelas.php');
require_once('../core/koneksi.php');
require_once('../core/spp.php');
require_once('../core/petugas.php');
require_once('../core/siswa.php');

$kon = new Koneksi();
$kelas = new Kelas();
$spp = new Spp();
$petugas = new Petugas();
$siswa = new Siswa();
$kq = $kelas->kq;
$ks = $spp->ks;

if(empty($_SESSION['username'])){
    header("Location: ../inc/no_access.php");
}

if(isset($_GET['url'])){
    $url = ucfirst($_GET['url']);
}else{
    $url = "Dashboard";
}
if(isset($_SESSION['level'])){
    $level = $_SESSION['level'];
} else {
    $level = "siswa";
}

?>