<?php
// cara mengkonekan code dengan database
require("function.php");
// ambil data dari databse ini sintaks nya
$guru = query("SELECT * FROM guru");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"/>
      <link rel="website icon" height="90px" href="./assets/img/logo_departemen_agama.png">
    <link rel="icon" href="images/logo.png" />
    <link rel="stylesheet" href="./assets/css/dasboard.css" />
    <title>Dasboard | Pengawas</title>
  </head>

  <body class="dark-mode-variables">
    <div class="container">
      <aside>
        <div class="toggle">
          <div class="logo">
            <img src="./assets/img/logo_departemen_agama.png" />
            <h2>Kemenag <span class="danger">karawang</span></h2>
          </div>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp"> close </span>
          </div>
        </div>

        <div class="sidebar">
          <a href="#"  class="active">
            <span class="material-icons-sharp"> dashboard </span>
            <h3>Dashboard</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp"> person_outline </span>
            <h3>Absen</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp"> receipt_long </span>
            <h3>History</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp"> insights </span>
            <h3>Analytics</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp"> mail_outline </span>
            <h3>Email</h3>
            <span class="message-count">127</span>
          </a>
          <a href="#">
            <span class="material-icons-sharp"> inventory </span>
            <h3>Sale List</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp"> report_gmailerrorred </span>
            <h3>Reports</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp"> settings </span>
            <h3>Settings</h3>
          </a>

          <a href="index.php">
            <span class="material-icons-sharp"> logout </span>
            <h3>Logout</h3>
          </a>
        </div>
      </aside>
      <nav>
      <div class="right-section">
        <div class="nav">
          <button id="menu-btn">
            <span class="material-icons-sharp"> menu </span>
          </button>
          <div class="dark-mode">
            <span class="material-icons-sharp"> light_mode </span>
            <span class="material-icons-sharp"> dark_mode </span>
            <div class="dark-mode-layer night"></div>
          </div>

          <div class="profile">
            <div class="info">
              <p>Hey, <b>salsa</b></p>
              <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
              <img src="./assets/img/caca.png" />
            </div>
          </div>
        </div>
      </div>
      <main class="table" id="customers_table">
    <section class="table__header">
        <h1>Absensi Guru</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <img src="./assets/img/search.png" alt="">
        </div>

    </section>
    <section class="table__body">
        <table border="5" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Aksi</th>
                    <th> Gambar</th>
                    <th> Nama</th>
                    <th> Nama sekolah</th>
                    <th>kelas</th>
                    <th>Tanggal</th>
                    <th>jam</th>
                    <th> Titik Kordinat </th>
                    <th>status</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach($guru as $absen):?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $i ?></td>
                    <td>
                    <a href="hapus.php?id=<?=$absen['id']; ?>" style="color: red;" onclick="return confirm('Konfirmasi hapus')">hapus</a> |
                    <a href="ubah.php?id=<?=$absen['id']; ?>" style="color: blue;">UBAH</a>
                </td>
                    <td><img src="uploads/<?php echo $absen['gambar']; ?>" width="50" alt=""></td>
                    <td><?php echo $absen["nama"]; ?></td>
                    <td><?php echo $absen["nama_sekolah"]; ?></td>
                    <td><?php echo $absen["kelas"]; ?></td>
                    <td><?php echo $absen["tanggal"]; ?></td>
                    <td><?php echo $absen["jam"]; ?></td>
                    <td><?php echo $absen["lokasi"]; ?></td>
                    <td><?php echo $absen["status"]; ?></td>
                </tr>
                <?php $i++ ?>
                <?php endforeach;?>
            </tbody>
        </table>
    </section>
</main>

    </div>
    <div class="copyrightText" >
      <p>Made and designed from YouTube <a href="https://youtu.be/YJTKlAvbDo4?si=UjZR7o94Pm33lwVf" target="_blank" style="text-decoration: none; color:#5F860C; ">AsmrProg</a>, modified by Kholis312 </p>
    </div>
    <script src="dasboard.js"></script>
  </body>
</html>
