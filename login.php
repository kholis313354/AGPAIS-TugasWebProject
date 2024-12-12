<?php
include_once 'cfgdb.php';

session_start();

if (isset($_SESSION['nip'])) {
  header("Location: beranda");
  exit();
}

$nip = "";
$password = "";
$nama = "";
$jabatan = "";
$penempatan = "";
$sukses = "";
$error = "";
$error_message = '';

$ambil = "SELECT pengguna.id, pengguna.nip, pengguna.nama, jabatan.jabatan_nama, penempatan.penempatan_nama
          FROM pengguna
          INNER JOIN jabatan ON pengguna.jabatan_id = jabatan.jabatan_id
          INNER JOIN penempatan ON pengguna.penempatan_id = penempatan.penempatan_id
          ORDER BY pengguna.id DESC";
$stmt = $conn->prepare($ambil);
$stmt->execute();
$hasil = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($hasil as $r2) {
    $id = $r2['id'];
    $nip = $r2['nip'];
    $nama = $r2['nama'];
    $jabatan = $r2['jabatan_nama'];
    $penempatan = $r2['penempatan_nama'];
}

if (isset($_POST['daftar'])) {
    $nip = $_POST['nip'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan_id'];
    $penempatan = $_POST['penempatan_id'];

    // Cek apakah NIP sudah terdaftar dalam database
    $sql_cek_nip = "SELECT * FROM pengguna WHERE nip=?";
    $stmt_cek_nip = $conn->prepare($sql_cek_nip);
    $stmt_cek_nip->execute([$nip]);
    $jml_cek_nip = $stmt_cek_nip->rowCount();

    if ($jml_cek_nip > 0) {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js'></script>
<link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css' rel='stylesheet'>
<br>
<script>
  Swal.fire({
      title: 'error',
      text: 'Maaf Nip sudah ada',
      icon: 'error',
      confirmButtonText: 'OK',
      confirmButtonColor: '#5F860C'
  }).then((result) => {
      if (result.isConfirmed) {
          window.location = 'login2.php';
      }
  });
</script>";
    } else {
        if ($nip && $password && $nama && $jabatan && $penempatan) {
            $sql1 = "INSERT INTO pengguna (nip, nama, password, jabatan_id, penempatan_id) VALUES (?, ?, ?, ?, ?)";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->execute([$nip, $nama, $password, $jabatan, $penempatan]);
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js'></script>
     <link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css' rel='stylesheet'>
     <br>
 <script>
         Swal.fire({
             title: 'Pendaftaran berhasil! ',
             text: 'Silakan login.',
             icon: 'success',
             confirmButtonText: 'OK',
             confirmButtonColor: '#5F860C'
         }).then((result) => {
             if (result.isConfirmed) {
                 window.location = 'login.php';
             }
         });
     </script>";
        } else {
          echo "
          <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js'></script>
  <link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css' rel='stylesheet'>
  <br>
<script>
      Swal.fire({
          title: 'error',
          text: 'Terjadi kesalahan saat mendaftarkan akun.',
          icon: 'error',
          confirmButtonText: 'OK',
          confirmButtonColor: '#5F860C'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location = 'login.php';
          }
      });
  </script>";
        }
    }
}


// Proses login

$error_message = '';

if (isset($_POST['login'])) {
  $nip = $_POST['nip'];
  $password = $_POST['password'];
  $password_hash = md5($password);

  $sql = "SELECT nip FROM pengguna WHERE nip = ? AND password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$nip, $password_hash]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if (count($result) == 1) {
      $_SESSION['nip'] = $result[0]['nip'];
      header("Location: beranda");
      exit();
  } else {
    echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js'></script>
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css' rel='stylesheet'>
    <br>
<script>
        Swal.fire({
            title: 'error',
            text: 'NIP atau password Salah',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonColor: '#5F860C'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = 'login.php';
            }
        });
    </script>";
  }
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="website icon" height="90px" href="/assets/img/logo_departemen_agama.png">
    <link rel="stylesheet" href="./assets/css/login4.css" />
    <link rel="stylesheet" href="./assets/css/footer2.css">
    <title>Login</title>
    <style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      margin: 0;
    }
    .back-button {
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
  position: absolute;
  width: 40px;
  height: 40px;
  padding: 10px;
  margin-top:-10px;
  border-radius: 50%;
  background-color: #ffffff17;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease-in-out;
  gap:20px;
  border: 2px solid #fff;
}

.back-button:hover {
  opacity:.7;
}
  </style>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="post" class="sign-in-form">

            <h2 class="title">Sign in</h2>
            <div class="input-field" for="nip">
              <label for="nrg"><i class="fas fa-user" ></i></label>
              <input type="number" placeholder="Nrg" id="nip" name="nip" required/>
            </div>
            <div class="input-field" >
              <label for="password"><i class="fas fa-lock"></i></label>
              <input type="password" placeholder="Password" id="password" name="password" required />
              <i class="fas fa-eye togglePassword"  style="cursor: pointer; margin-left: 50px;"></i>
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" />
            <p class="social-text"> </p>
            <div class="social-media">
              <!-- <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a> -->
            </div>
          </form>
          <form action="" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div for="nip" class="input-field" >
              <i for="nip" class="fas fa-user" ></i>
              <input type="number" placeholder="Nrg" id="nip" name="nip" required />
            </div>
            <div for="nama" class="input-field" >
              <i for="nama" class="fas fa-user" ></i>
              <input type="text" placeholder="Nama Lengkap" id="nip" name="nama" required />
            </div>
            <div class="input-field"  for="Password">
              <i for="password" class="fas fa-lock"></i>
              <input type="password" placeholder="Password" class="input-field" id="password" name="password" required />
              <i class="fas fa-eye togglePassword"  style="cursor: pointer; margin-left: 10px;"></i>
            </div>
            <div class="input-field">
            <?php
    // Mendapatkan data dari tabel jabatan
    $sqljabatan = "SELECT * FROM jabatan";
    $stmt = $conn->prepare($sqljabatan);
    $stmt->execute();
    $result = $stmt->fetchAll();

    $option_jabatan = '';
    foreach ($result as $row) {
      $option_jabatan .= '<option value="' . $row['jabatan_id'] . '">' . $row['jabatan_nama'] . '</option>';
    }

    // Mendapatkan data dari tabel penempatan
    $sqlpenempatan = "SELECT * FROM penempatan";
    $stmt = $conn->prepare($sqlpenempatan);
    $stmt->execute();
    $result = $stmt->fetchAll();

    $option_penempatan = '';
    foreach ($result as $row) {
      $option_penempatan .= '<option value="' . $row['penempatan_id'] . '">' . $row['penempatan_nama'] . '</option>';
    }
    ?>
            <i></i>
              <select name="jabatan_id" placeholder="jabatan" class="sl" id="jabatan" required>
              <option value="">- Pilih Sekolah -</option>
              <?php echo $option_jabatan ?>
        </select>
            </div>
            <div class="input-field">
            <i></i>
              <select name="penempatan_id" placeholder="Username" class="sl" id="penempatan" required>
              <option value="">- Pilih kelas -</option>
              <?php echo $option_penempatan ?>
        </select>
            </div>
            <input type="submit" class="btn" name="daftar" value="Daftar" />
            <p class="social-text"></p>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
          <a href="./" class="back-button">
            <svg class='line' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'>
              <g
                transform='translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) translate(5.000000, 8.500000)'>
                <path d='M14,0 C14,0 9.856,7 7,7 C4.145,7 0,0 0,0'></path>
              </g>
            </svg>
          </a>
            <h3>Daftar Dulu Ya</h3>
            <p>
            Jangan lewatkan kesempatan ini! Daftar sekarang untuk nikmati semua manfaatnya!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Daftar
            </button>
          </div>
          <img src="./assets/img/kid2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
          <a href="./" class="back-button">
      <svg class='line' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'>
        <g
          transform='translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) translate(5.000000, 8.500000)'>
          <path d='M14,0 C14,0 9.856,7 7,7 C4.145,7 0,0 0,0'></path>
        </g>
      </svg>
    </a>
            <h3>Sudah daftar?</h3>
            <p>
            Login sekarang dan nikmati pengalaman terbaik.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="./assets/img/kid.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <div class="copyrightText">
    <p>Made and designed from YouTube <a href="https://www.youtube.com/watch?v=piG91X4sV2U" target="_blank" style="text-decoration: none; color:#5F860C; ">
    True Coder</a>, modified by Kholis312 </p>
  </div>
    <script src="./login.js"></script>
    <script>
    // Ambil semua elemen togglePassword
    const togglePasswordElements = document.querySelectorAll('.togglePassword');

    togglePasswordElements.forEach(togglePassword => {
        togglePassword.addEventListener('click', function () {
            // Ambil input password terdekat
            const passwordField = this.previousElementSibling;

            // Ubah tipe input
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Toggle ikon mata
            this.classList.toggle('fa-eye-slash');
        });
    });
</script>
  </body>
</html>