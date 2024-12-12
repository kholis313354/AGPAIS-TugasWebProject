<?php
include_once 'cfgdb.php';

session_start();

if (isset($_SESSION['nip'])) {
  header("Location: beranda");
  exit();
}

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
                
            }
        });
        window.location = 'index.php';
    </script>";
  }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="website icon" height="90px" href="/assets/img/logo_departemen_agama.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="./assets/css/coba.css"> -->
    <link rel="stylesheet" href="./assets/css/footer2.css">
        <link rel="stylesheet" href="./assets/css/kontak.css">
                    <!-- google fonts -->
                    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Marck+Script&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,600&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Dancing+Script:wght@600;700&family=Marck+Script&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,600&family=Patrick+Hand+SC&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Dancing+Script:wght@600;700&family=Homemade+Apple&family=Marck+Script&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,600&family=Patrick+Hand+SC&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Arizonia&family=Dancing+Script:wght@600;700&family=Gentium+Book+Plus:ital,wght@0,400;0,700;1,700&family=Homemade+Apple&family=Marck+Script&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,600&family=Patrick+Hand+SC&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">

                <!-- fontawesome -->
                <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* loading css */
.loading-container {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  background-color: #000;
  z-index: 9999999;
}
.container2 {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.loader {
  width: 500px;
  height: 500px;
  border: 0px solid white;
  position: absolute;
}
</style>
<!-- script loading menggunakan ajak awal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script>$(window).on("load", function () {
        $(".loading-container").fadeOut(3000);
      });
      
      </script>
      <!-- script loading akhir -->
</head>
<body>
      <!-- loading awal-->
      <div class="loading-container">
    <div class="container2">
        <img src="./assets/img/loader.gif" class="loader" alt="">
    </div>
    </div>
  <!-- loading akhir -->
  <nav>
        <div class="container nav-wrapper">
            <div class="brand">
               <img src="/assets/img/logo_departemen_agama.png" alt="">
                <span><strong>KANTOR WILAYAH<br>KEMENTRIAN AGAMA <br> KARAWANG</strong></span>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-list">
                <li class="active">
                    <a href="index.php">Home</a>
                </li>
                <li><a href="berita.php">Berita</a></li>
                <li>
                    <a href="layanan.php">layanan</a>
                    <!-- <ul class="dropdown-list">
                        <li><a href="kontak.php">SEO optimisation</a></li>
                        <li><a href="#">Digital marketing</a></li>
                        <li><a href="#">Web development</a></li>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Software development</a></li>
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Content writing</a></li>
                    </ul> -->
                </li>
                <li><a href="struktur.php">Struktur</a></li>
                <li>
                    
                </li>
                <li>
                <a href="login.php" ><button class="btn"> Login</button></a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="bagian1">
    <main>
      <section class="welcome1">
        <div class="welcome2">
          <div>
          <h1> Kemenag Karawang</h1>
          <h2>(Moderasi agama & Absensi Kinerja Guru)</h2>
          </div>
        </div>
      </section>
    </main>
    <main>
    <form class="formLogin" method="POST" action="" id="form-login">
      <img src="./assets/img/kemenag.jpeg" style="margin-top: 50px;" alt="">
      <h2 style="margin-top: 20px">Login</h2>
      <div class="input-group">
        <input type="text" name="nip" id="loginUser" required>
        <label for="loginUser">Nrg</label>
      </div>
      <div class="input-group">
      <i class="fas fa-eye togglePassword" id="togglePassword"  style="cursor: pointer; margin-left: 280px; margin-top: 20px; position: absolute;"></i>
        <input type="password" name="password" class="loginpassword" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" name="login" class="submit-btn">
      <a href="login.php" class="forgot-pw">Buat Akun</a>
      <a href="#" class="forgot-pw">Lupa Password</a>
    </form>
    </div>
    </div>
    </section>
    </header>
            <!-- kontak awal -->
            <div class="kontainer10">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="./assets/img/phone.png" class="icon" alt="" />
              <p>kholis kamaluddin wahib</p>
            </div>
            <div class="information">
              <img src="./assets/img/phone.png" class="icon" alt="" />
              <p>kholiskamal354@gmail.com</p>
            </div>
            <div class="information">
              <img src="./assets/img/phone.png" class="icon" alt="" />
              <p>082289659204</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn8" />
          </form>
        </div>
      </div>
    </div>
        <!-- kontak akhir -->

<!-- footer -->
<div class="cover">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7082997593943!2d107.30034607355556!3d-6.302005861673708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977e86cfea273%3A0xc7878bb42a30e610!2sKantor%20Kementerian%20Agama%20Kab.%20Karawang!5e0!3m2!1sid!2sid!4v1713667411546!5m2!1sid!2sid" width="80%" height="450" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
    </div>
    <footer>
    <div class="container">
      <div class="sec aboutus">
        <h2>KEMENAG KARAWANG</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi aliquam dolores, corporis officiis enim recusandae quasi officia earum, quia minus dignissimos blanditiis, iste veniam debitis vero sit eligendi sunt. Optio.
        Aut pariatur quae ducimus necessitatibus, impedit optio officiis ipsam. Ea eos optio enim, dolorum, laudantium expedita amet sequi odio sit veritatis ipsam officiis animi. Animi alias distinctio molestias corporis odio!</p>
        <ul class="sci">
          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
        </ul>
      </div>
      <div class="sec quicklinks">
        <h2>UHUYY</h2>
        <ul>
          <li><a href="#">KK2</a></li>
          <li><a href="#">KHOLIS</a></li>
          <li><a href="#">KAMALUDDIN</a></li>
          <li><a href="#">WAHIB</a></li>
        </ul>
      </div>
      <div class="sec quicklinks">
        <h2>APA YA</h2>
        <ul>
          <li><a href="#">APA AJA</a></li>
          <li><a href="#">NANTI DI ISI</a></li>
          <li><a href="#">OK</a></li>
          <li><a href="#">LOREM</a></li>
        </ul>
      </div>
      <div class="sec contact">
        <h2>kontak</h2>
        <ul class="info">
          <li>
            <span><i class="fa-solid fa-phone"></i></span><p><a href="tel:984885536">082289659204</a></p>
          </li>
          <li>
            <span><i class="fa-solid fa-envelope"></i></span><p><a href="kholiskamal354@gmail.com">Kholiskamal354@gmail.com</a></p>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="copyrightText">
    <p>Copyright <a href="https://www.instagram.com/khol_lis312/?hl=en" style="text-decoration: none; color:#5F860C !important; ">©khol_lis312</a> All Rights Reserved</p>
  </div>
  <!-- footer akhir -->
  <script>
  // Fungsi untuk mengubah visibilitas password
  function togglePasswordVisibility() {
      const passwordInput = document.getElementById("loginPassword"); // ID benar tanpa titik
      const passwordIcon = document.querySelector(".togglePassword");

      if (passwordInput.type === "password") {
          // Ubah tipe input menjadi text untuk menampilkan password
          passwordInput.type = "text";
          passwordIcon.classList.remove("fa-eye");
          passwordIcon.classList.add("fa-eye-slash");
      } else {
          // Kembalikan tipe input ke password untuk menyembunyikan password
          passwordInput.type = "password";
          passwordIcon.classList.remove("fa-eye-slash");
          passwordIcon.classList.add("fa-eye");
      }
  }

  // Menambahkan event listener untuk ikon toggle
  document.querySelector(".togglePassword").addEventListener("click", togglePasswordVisibility);
</script>

    <script src="./script.js"></script>
</body>
</html>
