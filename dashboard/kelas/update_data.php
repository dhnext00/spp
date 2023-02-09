<?php

    
    $id_kelas = $_GET["id_kelas"];
    $query = mysqli_query($kon->kon, "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'");
    $kelas = mysqli_fetch_array($query);

?>
<form class="w3-container" action="../proses/proses_editkelas.php" method="POST">
    <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas'] ?>">
    <label for="nama_kelas">Nama Kelas</label>
    <input class="w3-input" type="text" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">        
    <br>
    <label for="kompetensi_keahlian">Jurusan</label>
    <input class="w3-input" type="text" name="kompetensi_keahlian" value="<?= $kelas['kompetensi_keahlian'] ?>">
    <br>    
    <input class="w3-button w3-indigo" type="submit" value="Edit Data" name="submit">
</form>