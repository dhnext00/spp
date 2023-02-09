<?php

    
    $id_petugas = $_GET["id_petugas"];
    $query = mysqli_query($kon->kon, "SELECT * FROM petugas WHERE id_petugas = '$id_petugas'");
    $petugas = mysqli_fetch_array($query);

?>
<form action="../proses/proses_editpetugas.php" method="POST">
    <input type="hidden" name="id_petugas" value="<?= $petugas['id_petugas'] ?>">
    <label for="username">Username</label>
    <input class="w3-input" type="text" name="username" value="<?= $petugas['username'] ?>" readonly>        
    <br>
    <label for="password">Password</label>
    <input class="w3-input" type="password" name="password" value="<?= $petugas['password'] ?>">        
    <br>
    <label for="nama_petugas">Nama petugas</label>
    <input class="w3-input" type="text" name="nama_petugas" value="<?= $petugas['nama_petugas'] ?>">        
    <br>
    <label for="level">Level</label>
    <select class="w3-input" name="level">
        <option value="<?= $petugas['level']?>"><?= $petugas['level']?></option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
    </select>
    <br>    
    <input class="w3-button w3-indigo" type="submit" value="Edit Data" name="submit">
</form>