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
      <h1>Form Update Dosen ID=<?php echo $_GET["id"];?></h1>

      <!-- Tampilkan form -->
      <form method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $_GET["id"];?>">
        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" name="nip" placeholder="Masukkan NIP Baru" required>
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Baru" required>
        </div>
        <div class="form-group">
          <label for="fakultas">Fakultas</label>
          <input type="text" class="form-control" name="fakultas" placeholder="Masukkan Fakultas Baru" required>
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

$id = $_POST["id"];
$nip = $_POST["nip"];
$nama = $_POST["nama"];
$fakultas = $_POST["fakultas"];

$update = "update dosen set nip='$nip', nama='$nama', fakultas='$fakultas' where id='$id'";
try {
  $prepared = $db->prepare($update);
  $prepared->execute();
} catch (Exception $e) {
  echo "Error";
}
header("Location: index.php");
?>

<?php endif ?>
