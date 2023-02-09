<form class="w3-container" action="../proses/proses_addpetugas.php" method="POST">
    <label for="username">Username</label>
    <input class="w3-input" type="text" name="username">        
    <br>
    <label for="password">Password</label>
    <input class="w3-input" type="password" name="password">        
    <br>
    <label for="nama_petugas">Nama Petugas</label>
    <input class="w3-input" type="text" name="nama_petugas">        
    <br>
    <label for="level">Level</label>
    <select class="w3-input" name="level">
        <option disabled selected>--Pilih Level--</option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
    </select>
    <br>    
    <input class="w3-button w3-indigo" type="submit" value="Tambah Data" name="submit">
</form>