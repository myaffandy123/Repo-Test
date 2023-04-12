<?php if($_SERVER['REQUEST_METHOD'] === 'GET'): ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Manajemen Dosen</title>
    <!-- Panggil file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container">
      <h1>Form Dosen Baru</h1>

      <!-- Tampilkan form -->
      <form method="POST">
        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" name="nip" placeholder="Masukkan NIP" required>
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
        </div>
        <div class="form-group">
          <label for="fakultas">Fakultas</label>
          <input type="text" class="form-control" name="fakultas" placeholder="Masukkan Fakultas" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <!-- Panggil file JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

<?php elseif($_SERVER['REQUEST_METHOD'] === 'POST'): 

require_once 'config.php';

$nip = $_POST["nip"];
$nama = $_POST["nama"];
$fakultas = $_POST["fakultas"];

$insert = "insert into dosen (nip, nama, fakultas) values ('$nip', '$nama', '$fakultas')";
try {
  $prepared = $db->prepare($insert);
  $prepared->execute();
} catch (Exception $e) {
  echo "Error";
}
header("Location: index.php");
?>


<?php endif ?>