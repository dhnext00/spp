
<form class="w3-container" action="../proses/proses_addsiswa.php" method="POST">
    <label for="nisn">NISN</label>
    <input class="w3-input" type="text" name="nisn">        
    <br>
    <label for="nis">NIS</label>
    <input class="w3-input" type="text" name="nis">        
    <br>
    <label for="nama">Nama</label>
    <input class="w3-input" type="text" name="nama">        
    <br>
    <label for="username">Username</label>
    <input class="w3-input" type="text" name="username">        
    <br>
    <label for="password">Password</label>
    <input class="w3-input" type="password" name="password">        
    <br>

    <label for="id_kelas">Kelas</label>
    <select name="id_kelas" class="w3-input">
    <option disabled selected>--Pilih Kelas--</option>
    <?php 
        while ($row = mysqli_fetch_array($kq)){
            ?>
                <option value="<?= $row['id_kelas'] ?>"> <?= $row['nama_kelas'] ?> | <?= $row['kompetensi_keahlian'] ?></option>
            <?php
        }
    ?>    
    </select>      
    <br>

    <label for="alamat">Alamat</label>
    <input class="w3-input" type="textarea" name="alamat">        
    <br>

    <label for="no_tlp">No Telepon</label>
    <span>+62 </span><input class="w3-input" type="text" name="no_tlp" placeholder="8123-4567-891" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3}">        
    <br>

    <label for="id_spp">Pembayaran</label>
    <select name="id_spp" class="w3-input">
    <option disabled selected>--Pilih Tahun & Tahun--</option>
    <?php 
        while ( $row = mysqli_fetch_array($ks)){
            ?> 
                <option value="<?= $row['id_spp'] ?>"><?= $row['tahun'] ?> | <?= $row['nominal'] ?></option>
            <?php
        }
    ?>
    </select>        
    <br>

    <input class="w3-button w3-indigo" type="submit" value="Tambah Data" name="submit">
</form>