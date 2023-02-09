<?php 
    require_once('../core/spp.php');
    $spp = new Spp();
    if(isset($_POST['submit'])){
        $id_spp = $_POST['id_spp'];
        $tahun = $_POST['tahun'];
        $nominal = $_POST['nominal'];
        $spp->editSpp($id_spp,$tahun, $nominal);
    }

?>