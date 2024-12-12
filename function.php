<?php
// cara mengkonekan code dengan database
$conn = mysqli_connect("localhost","root","","absensi");

// function menampilkan
function query($query){
  global $conn;
  $result = mysqli_query($conn,$query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result) ){
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data) {
  global $conn;
  // buar variabel dari form data
  $nama = htmlspecialchars($data["nama"]);
  $nama_sekolah = htmlspecialchars($data["tempat"]);
  $kelas = htmlspecialchars($data["kelas"]);
  $lokasi = htmlspecialchars($data["lokasi"]);
  $status = htmlspecialchars($data["status"]);
  $jam = htmlspecialchars($data["jam"]);
  $tanggal = htmlspecialchars($data["tanggal"]);
  // upload file
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];
// Cek apakah ada error saat upload
  if ($error === 4) {
    echo "<script>
          alert('Pilih gambar terlebih dahulu!');
          </script>";
    return false;
  }

  // Ekstensi file yang valid
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  // Cek apakah file yang diupload adalah gambar yang valid
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
          alert('Yang anda upload bukan gambar!');
          </script>";
    return false;
  }

  // Batasi ukuran file (2MB)
  if ($ukuranFile > 2000000) {
    echo "<script>
          alert('Ukuran gambar terlalu besar!');
          </script>";
    return false;
  }

// Generate nama baru yang unik untuk gambar agar tidak menimpa file yang sudah ada
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  // Pindahkan file ke direktori uploads
  move_uploaded_file($tmpName, 'uploads/' . $namaFileBaru);

  // Memaasukkan data termasuk nama file ke dalam database
  $query = "INSERT INTO guru  
              VALUES('', '$namaFileBaru', '$nama', '$nama_sekolah', '$kelas', '$tanggal','$jam','$lokasi','$status')"; 
  mysqli_query($conn, $query);
  
  return mysqli_affected_rows($conn);
}


// fungsi hapus
function hapus($id){
  global $conn;
  mysqli_query($conn," DELETE FROM guru WHERE id=$id");
  return mysqli_affected_rows($conn);
}
// fungsi ubah
function ubah($data) {
  global $conn; // Menggunakan koneksi database global

  // Mengambil dan membersihkan data dari form
  $id = htmlspecialchars($data["id"]); // ID guru
  $nama = htmlspecialchars($data["nama"]); // Nama guru
  $nama_sekolah = htmlspecialchars($data["tempat"]); // Nama sekolah
  $kelas = htmlspecialchars($data["kelas"]); // Kelas
  $lokasi = htmlspecialchars($data["lokasi"]); // Lokasi
  $status = htmlspecialchars($data["status"]); // Status
  $jam = htmlspecialchars($data["jam"]); // Jam
  $tanggal = htmlspecialchars($data["tanggal"]); // Tanggal

  // Cek apakah pengguna meng-upload gambar baru
  if ($_FILES['gambar']['error'] === 4) {
      // Jika tidak ada gambar baru yang di-upload, gunakan gambar lama
      $gambar = htmlspecialchars($data["gambarLama"]);
  } else {
      // Jika ada gambar baru di-upload, proses gambar tersebut
      $gambarBaru = uploadImage(); // Meng-upload gambar baru
      if (!$gambarBaru) {
          return false; // Jika proses upload gagal, kembalikan false
      }

      // Menghapus gambar lama jika ada
      $gambarLama = htmlspecialchars($data["gambarLama"]); // Menyimpan gambar lama untuk dihapus
      if ($gambarLama) {
          $pathGambarLama = 'uploads/' . $gambarLama; // Path gambar lama
          if (file_exists($pathGambarLama)) { // Cek apakah file gambar lama ada
              unlink($pathGambarLama); // Menghapus gambar lama
          }
      }

      $gambar = $gambarBaru; // Set gambar baru
  }

  // Query untuk mengupdate data guru di database
  $query = "UPDATE guru SET 
              nama = '$nama',
              nama_sekolah = '$nama_sekolah',
              kelas = '$kelas',
              lokasi = '$lokasi',
              status = '$status',
              jam = '$jam',
              tanggal = '$tanggal',
              gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query); // Menjalankan query
  return mysqli_affected_rows($conn); // Mengembalikan jumlah baris yang terpengaruh
}

function uploadImage() {
  $namaFile = $_FILES['gambar']['name']; // Mengambil nama file
  $ukuranFile = $_FILES['gambar']['size']; // Mengambil ukuran file
  $error = $_FILES['gambar']['error']; // Mengambil status error file
  $tmpName = $_FILES['gambar']['tmp_name']; // Mengambil nama sementara file

  // Cek apakah tidak ada file yang di-upload
  if ($error === 4) {
      echo "<script>
          alert('Pilih gambar terlebih dahulu!');
          </script>";
      return false; // Mengembalikan false jika tidak ada gambar
  }

  // Validasi ekstensi file
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png']; // Daftar ekstensi gambar yang valid
  $ekstensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION)); // Mengambil ekstensi file

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo "<script>
          alert('Yang anda upload bukan gambar!'); 
          </script>";
      return false; // Mengembalikan false jika ekstensi tidak valid
  }

  // Validasi ukuran file (batas maksimum 2MB)
  if ($ukuranFile > 2000000) {
      echo "<script>
          alert('Ukuran gambar terlalu besar!'); // Peringatan jika ukuran gambar terlalu besar
          </script>";
      return false; // Mengembalikan false jika ukuran terlalu besar
  }

  // Menghasilkan nama file baru yang unik
  $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

  // Memindahkan file ke direktori 'uploads/'
  if (move_uploaded_file($tmpName, 'uploads/' . $namaFileBaru)) {
      return $namaFileBaru; 
  } else {
      echo "<script>
          alert('Gagal meng-upload gambar!'); // Peringatan jika upload gagal
          </script>";
      return false; 
  }
}





?>
