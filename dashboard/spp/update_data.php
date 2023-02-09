<?php

    
    $id_spp = $_GET["id_spp"];
    $query = mysqli_query($kon->kon, "SELECT * FROM spp WHERE id_spp = '$id_spp'");
    $spp = mysqli_fetch_array($query);

?>
<form class="w3-container" action="../proses/proses_editspp.php" method="POST">
    <input type="hidden" name="id_spp" value="<?= $spp['id_spp'] ?>">
    <label for="tahun">Tahun</label>
    <input class="w3-input" type="number" name="tahun" value="<?= $spp['tahun'] ?>">        
    <br>
    <label for="nominal">Nominal</label>
    <input class="w3-input" type="number" name="nominal" value="<?= $spp['nominal'] ?>">        
    <br>
    <input class="w3-button w3-indigo" type="submit" value="Edit Data" name="submit">
</form>