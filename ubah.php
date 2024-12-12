<?php
// cara mengkonekan code dengan database
require("function.php");
// AMBIL data di URL ubah
$id = $_GET["id"];
/// queri data mahasiswa berdasarkan id nya
$ubah = query(" SELECT * FROM guru WHERE id= $id ")[0];

// ambil data dari databse ini sintaks nya
$guru = query("SELECT * FROM guru");

if ( isset($_POST["submit"]) ){
  // cek apakah tombol ubah submit sudah ditekan apa belum
  if ( ubah($_POST) > 0 ) {
    echo "<script> 
    alert('Data berhasil di ubah!!');
    document.location.href = 'pengawas.php';
    </script>";
  } else {
  echo "<script> 
        alert('Data gagal di ubah!!');
    document.location.href = 'absensi.php';
        </script>";
}
}

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
    <link rel="stylesheet" href="./assets/css/absensi.css" />
    <title>Admin Dasboard</title>
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
          <a href="dasboard.php" >
            <span class="material-icons-sharp"> dashboard </span>
            <h3>Dashboard</h3>
          </a>
          <a href="#" class="active">
            <span class="material-icons-sharp"> person_outline </span>
            <h3>absen</h3>
          </a>
          <a href="#">
            <span class="material-icons-sharp"> receipt_long </span>
            <h3>History</h3>
          </a>
          <a href="index.html">
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
              <p>Hey, <b>kholis</b></p>
              <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
              <img src="./assets/img/profile.png" />
            </div>
          </div>
        </div>
      </div>
      <main class="table" id="customers_table">
    <section class="table__header">
        <h1>Absensi Guru</h1>
    </section>
    <div class="container2">
    <div class="">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form_container">
            <input type="hidden" name="id" id="id" value="<?= $ubah['id'] ?>">

                    <div class="form_control">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" required placeholder="Nama lengkap" value="<?= $ubah["nama"]?>" required>
                    </div>
            
                    <div class="form_control">
                    <label for="tempat">Tempat Mengajar</label>
                    <input type="text" name="tempat" id="tempat" placeholder="Sekolah...."   required value="<?= $ubah["nama_sekolah"]?>">
                    </div>
            
                    <div class="form_control">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" id="kelas" placeholder="Kelas..." value="<?= $ubah["kelas"]?>" required>
                    </div>
            
                    <div class="form_control">
                    <label for="status">Status</label>
                    <select name="status" id="status" value="<?= $ubah["status"]?>">
                    <optionn ame="status" id="status"  value="<?= $ubah["status"]?>" >HADIR</optionn>
                    <option name="status" id="status" value="<?= $ubah["status"]?>" >TIDAK HADIR</option>
                     <option name="status" id="status" value="<?= $ubah["status"]?>" >IDZIN</option>
                    </select>
                    </div>
            
                    <div class="textarea_control">
                    <label for="lokasi">Lokasi </label>
                    <textarea name="lokasi" id="lokasi" cols="50" rows="4" placeholder="titik Kordinat" value="<?= $ubah["lokasi"]?>"  required></textarea>
                    </div>
            
                    <!-- <div class="form_control">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" placeholder="Hadir/tidak">    
                    </div> -->
            
                    <div class="form_control">
                    <label for="jam">Jam:</label>
                    <input type="time" id="jam" name="jam" value="<?= $ubah["jam"]?>" required>
                    </div>
            
                    <div class="form_control">
                    <label for="tanggal">Start Date</label>
                    <input type="date" name="tanggal" id="tanggal" value="<?= $ubah["tanggal"]?>" required> 
                    </div>
            
                    <div class="form_control">
                    <label for="gambar">Upload foto</label>
                    <input type="file" name="gambar" id="gambar" value="<?= $ubah["gambar"]?>" required> 
                    </div>
            </div>
                    <div class="button_container">
                        <button type="submit" name="submit">Apply Now</button>
                    </div>

        </form>

    </div>

</div>
</main>

    </div>
    <div class="copyrightText" >
      <p>Made and designed from YouTube <a href="https://youtu.be/YJTKlAvbDo4?si=UjZR7o94Pm33lwVf" target="_blank" style="text-decoration: none; color:#5F860C; ">AsmrProg</a>, modified by Kholis312 </p>
    </div>
    <script src="dasboard.js"></script>
  </body>
</html>
