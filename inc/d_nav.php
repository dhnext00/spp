<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><link rel="shortcut icon" href="../assets/image/logo.ico">logo</span>
</div>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../assets/image/avatar.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
    
      <span>Welcome, <strong><?= $_SESSION['username'] ?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
    
  </div>
  <div class="w3-sidebar w3-bar-block w3-black" style="width:15%">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="../dashboard/index.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-home fa-fw w3-large"></i>  Dashboard</a>
    
    <div class="w3-dropdown-hover">
      <button class="w3-button"><i class="fa-solid fa-chalkboard-user w3-large"></i>  Kelas</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="?url=kelas" class="w3-bar-item w3-button"><i class="fa-regular fa-eye"></i> Lihat Kelas</a>
        <a href="?url=addkelas" class="w3-bar-item w3-button"><i class="fa-solid fa-plus"></i> Tambah kelas</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <button class="w3-button"><i class="fa-solid fa-sack-dollar w3-large"></i>  SPP</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="?url=spp" class="w3-bar-item w3-button"><i class="fa-regular fa-eye"></i> Lihat SPP</a>
        <a href="?url=addspp" class="w3-bar-item w3-button"><i class="fa-solid fa-plus"></i> Tambah SPP</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <button class="w3-button"><i class="fa-solid fa-person w3-large"></i>  Petugas</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="?url=petugas" class="w3-bar-item w3-button"><i class="fa-regular fa-eye"></i> Lihat Petugas</a>
        <a href="?url=addpetugas" class="w3-bar-item w3-button"><i class="fa-solid fa-plus"></i> Tambah Petugas</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <button class="w3-button"><i class="fa-solid fa-graduation-cap w3-large"></i>  Siswa</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="?url=siswa" class="w3-bar-item w3-button"><i class="fa-regular fa-eye"></i> Lihat Siswa</a>
        <a href="?url=addsiswa" class="w3-bar-item w3-button"><i class="fa-solid fa-plus"></i> Tambah Siswa</a>
      </div>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw w3-large"></i>  History</a>
    <a href="../proses/proses_logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa-solid fa-right-from-bracket"></i>  Logout</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
