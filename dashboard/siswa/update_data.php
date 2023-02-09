<?php

    
    $nisn = $_GET["nisn"];
    $query = mysqli_query($kon->kon, "SELECT * FROM siswa WHERE nisn = '$nisn'");
    $siswa = mysqli_fetch_array($query);

?>
<form action="../proses/proses_editsiswa.php" method="POST">
    <input type="hidden" name="nisn" value="<?= $siswa['nisn'] ?>">
    <label for="nisn">Nisn</label>
    <input class="w3-input" type="text" name="nisn" value="<?= $siswa['nisn'] ?>">        
    <br>
    <label for="nis">Nis</label>
    <input class="w3-input" type="text" name="nis" value="<?= $siswa['nis'] ?>">        
    <br>
    <label for="nama">Nama</label>
    <input class="w3-input" type="text" name="nama" value="<?= $siswa['nama'] ?>">        
    <br>
    <label for="username">Username</label>
    <input class="w3-input" type="text" name="username" value="<?= $siswa['username'] ?>">        
    <br>
    <label for="password">Password</label>
    <input class="w3-input" type="password" name="password" value="<?= $siswa['password'] ?>">        
    <br>
    <label for="id_kelas">ID Kelas</label>
    <input class="w3-input" type="text" name="id_kelas" value="<?= $siswa['id_kelas'] ?>">        
    <br>
    <label for="alamat">Alamat</label>
    <input class="w3-input" type="textarea" name="alamat" value="<?= $siswa['alamat'] ?>">        
    <br>   
    <label for="no_tlp">No Telepon</label>
    <input class="w3-input" type="text" name="no_tlp" value="<?= $siswa['no_tlp'] ?>">        
    <br>
    <label for="id_spp">ID SPP</label>
    <input class="w3-input" type="text" name="id_spp" value="<?= $siswa['id_spp'] ?>">        
    <br>
    <input class="w3-button w3-indigo" type="submit" value="Edit Data" name="submit">
</form>