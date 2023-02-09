<?php

require_once('koneksi.php');
class Siswa
{
    private $nisn;
    private $nis;
    private $nama;
    private $username;
    private $password;
    private $id_kelas;
    private $alamat;
    private $no_tlp;
    private $id_spp;
    public $koneksi; 

    public function __construct()
    {
        $kon = new Koneksi();
        $this->koneksi = $kon->kon;
    }

    public function tambahSiswa($nisn,$nis,$nama,$username,$password,$id_kelas,$alamat,$no_tlp,$id_spp){
        $query = mysqli_query($this->koneksi,"SELECT * FROM siswa WHERE nisn = '$nisn' AND nis = '$nis' AND username = '$username' ");
        $result = mysqli_fetch_array($query);
        if($result['nisn'] == $nisn && $result['nis'] == $nis && $result['username'] == $username){
            session_start();
            $_SESSION['msg'] = "Data siswa sudah ada !!!";
            header("Location: ../dashboard?url=addsiswa");
        }else{
            $this->nisn = $nisn;
            $this->nis = $nis;
            $this->nama = $nama;
            $this->username = $username;
            $this->password = $password;
            $this->id_kelas = $id_kelas;
            $this->alamat = $alamat;
            $this->no_tlp = $no_tlp;
            $this->id_spp = $id_spp;
            mysqli_query($this->koneksi,"INSERT INTO siswa (nisn,nis,nama,username,password,id_kelas,alamat,no_tlp,id_spp) VALUES('$this->nisn','$this->nis','$this->nama','$this->username','$this->password','$this->id_kelas','$this->alamat','$this->no_tlp','$this->id_spp')");
            session_start();
            $_SESSION['msg'] = "Data siswa berhasil di tambahkan";
            header("Location: ../dashboard?url=siswa");
        }            
    }

    public function tampilSiswa(){
        $query = mysqli_query($this->koneksi,"SELECT * FROM siswa");
        $no = 1;
        while ($result = mysqli_fetch_array($query)) {
            $this->nisn = $result['nisn'];
            $this->nis = $result['nis'];
            $this->nama = $result['nama'];
            $this->username = $result['username'];
            $this->password = $result['password'];
            $this->id_kelas = $result['id_kelas'];
            $this->alamat = $result['alamat'];
            $this->no_tlp = $result['no_tlp'];
            $this->id_spp = $result['id_spp'];

            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $this->nisn . "</td>";
            echo "<td>" . $this->nis . "</td>";
            echo "<td>" . $this->nama . "</td>";
            echo "<td>" . $this->username . "</td>";
            echo "<td>" . $this->password . "</td>";
            echo "<td>" . $this->id_kelas . "</td>";
            echo "<td>" . $this->alamat . "</td>";
            echo "<td>" . $this->no_tlp . "</td>";
            echo "<td>" . $this->id_spp . "</td>";
            echo "<td>";
            ?>
                <a href="../dashboard?url=editsiswa&nisn=<?= $this->nisn ?>"><i class="fa-solid fa-pen-to-square w3-large"></i></a> | <a href="../proses/proses_hapussiswa.php?nisn=<?= $this->nisn ?>"><i class="fa fa-trash w3-large"></i></a>
            <?php
            echo "</td>";
            echo "</tr>";
        }
    }

    public function editSiswa($nisn,$nis, $nama, $username, $password, $id_kelas, $alamat, $no_tlp, $id_spp){
        $query = mysqli_query($this->koneksi,"SELECT * FROM siswa WHERE nisn = '$nisn' nis = '$nis', nama = '$nama', username = '$username', password = '$password', id_kelas = '$id_kelas',alamat = '$alamat', no_tlp = '$no_tlp AND id_spp = '$id_spp'");
        $result = mysqli_fetch_array($query);
        if($result['nisn'] == $nisn && $result['nis'] == $nis && $result['username'] == $username){
            session_start();
            $_SESSION['msg'] = "Data siswa sudah ada !!!";
            header("Location: ../dashboard?url=siswa");
        }else{
            $this->nisn = $nisn;
            $this->nis = $nis;
            $this->nama = $nama;
            $this->username = $username;
            $this->password = $password;    
            $this->id_kelas = $id_kelas;
            $this->alamat = $alamat;
            $this->no_tlp = $no_tlp;
            $this->id_spp = $id_spp;
            mysqli_query($this->koneksi,"UPDATE siswa SET nis = '$this->nis', nama = '$this->nama', username = '$this->username', password = '$this->password', id_kelas = '$this->id_kelas', alamat = '$this->alamat', no_tlp = '$this->no_tlp', id_spp = '$this->id_spp'  WHERE nisn = '$this->nisn' ");
            session_start();
            $_SESSION['msg'] = "Data siswa berhasil di ubah";
            header("Location: ../dashboard?url=siswa");
        }
    }

    public function hapusSiswa($nisn){
        $this->nisn = $nisn;
        mysqli_query($this->koneksi, "DELETE FROM siswa WHERE nisn = '$this->nisn'");
        session_start();
        $_SESSION['msg'] = "siswa berhasil di hapus !!!";
        header("Location: ../dashboard/?url=siswa");
    }

}

?>