<?php
include_once '../cfgdb.php';

session_start(); // Mulai session

// Jika user sudah login, alihkan ke halaman dashboard
if (isset($_SESSION['username'])) {
  header("Location: beranda");
  exit();
}

$error_message = '';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_hash = md5($password);

  $sql = "SELECT username FROM admin WHERE username = :username AND password = :password";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(':username', $username);
  $stmt->bindValue(':password', $password_hash);
  $stmt->execute();

  if ($stmt->rowCount() == 1) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['username'] = $row['username'];
    header("Location: beranda");
    exit();
  } else {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js'></script>
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css' rel='stylesheet'>
    <br>
<script>
        Swal.fire({
            title: 'Password Salah!',
            text: 'silahkan masukan password dengan benar',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonColor: '#5F860C',
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
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="website icon" height="90px" href="/assets/img/logo_departemen_agama.png">
    <link rel="stylesheet" href="../assets/css/login4.css" />
    <link rel="stylesheet" href="../assets/css/footer2.css">
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

            <h2 class="title">Login</h2>
            <div class="input-field" for="username">
              <label for="username"><i class="fas fa-user" ></i></label>
              <input type="text" placeholder="username" id="username" name="username" required/>
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
            <h2 class="title">Daftar</h2>
            <div for="nrg" class="input-field" >
              <i for="nrg" class="fas fa-user" ></i>
              <input type="number" placeholder="Nrg" id="nrg" name="nrg" required />
            </div>
            <div class="input-field" for="email">
              <i for="email" class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" id="email" name="email" required />
            </div>
            <div class="input-field"  for="Password">
              <i for="Password" class="fas fa-lock"></i>
              <input type="password" placeholder="Password" class="input-field" id="Password" name="Password" required />
              <i class="fas fa-eye togglePassword"  style="cursor: pointer; margin-left: 10px;"></i>
            </div>
            <div class="input-field" for="nama_sekolah">
              <i for="nama_sekolah" class="fas fa-user"></i>
              <input type="text" placeholder="Nama sekolah" id="nama_sekolah" name="nama_sekolah" required />
            </div>
            <div class="input-field">
            <i></i>
              <select name="jabatan" placeholder="jabatan" class="sl" required>
            <option required>- Pilih Jabatan -</option>
            <option value="guru">Guru</option>
            <option value="pengawas">Pengawas</option>
        </select>
            </div>
            <div class="input-field">
            <i></i>
              <select name="penempatan" placeholder="Username" class="sl" required>
            <option required>- Pilih Penempatan -</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMP SMA">SMP SMA</option>
        </select>
            </div>
            <input type="submit" class="btn" name="submit" value="Daftar" />
            <p class="social-text"></p>
            <!-- <div class="social-media">
              <a href="#" class="social-icon">
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
              </a>
            </div> -->
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
            <h3>SELAMAT DATANG</h3>
            <p>
            Silahkan Masukan Username dan Password
            </p>
          </div>
          <img src="../assets/img/kid2.svg" class="image" alt="" />
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
            <h3>Silahkan Login</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="../assets/img/kid.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <div class="copyrightText">
    <p>Made and designed from YouTube <a href="https://www.youtube.com/watch?v=aAyxSExhwW4" target="_blank" style="text-decoration: none; color:#5F860C; ">
    ime creative</a>, modified by Kholis312 </p>
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