<?php require_once 'config.php';?>

<!DOCTYPE html>
<html>
  <head>
    <title>Manajemen Dosen</title>
    <!-- Panggil file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Tabel Dosen</h1>
      <div class="text-right">
        <a href="create.php" class="btn btn-primary">+ Data Dosen</a>
      </div>

      <br/>

      <!-- Tampilkan tabel -->
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $sql = "select * from dosen";

          $query = $db->query($sql);
          foreach ($query as $row) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nip"]."</td>";
            echo "<td>".$row["nama"]."</td>";
            echo "<td>".$row["fakultas"]."</td>";
            echo "<td><a href=\"update.php?id=".$row["id"]."\" class=\"btn btn-success\">Edit</a> <a href=\"delete.php?id=".$row["id"]."\" class=\"btn btn-danger\">Hapus</a></td>";
            echo "</tr>";
          }
          ?>
          <!-- <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>Jalan Sudirman No. 123</td>
            <td><a href="update.php?id=1" class="btn btn-success">Edit</a> <a href="delete.php?id=1" class="btn btn-danger">Hapus</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jane Doe</td>
            <td>Jalan Thamrin No. 456</td>
            <td><a href="update.php?id=2" class="btn btn-success">Edit</a> <a href="delete.php?id=2" class="btn btn-danger">Hapus</a></td>
          </tr> -->
        </tbody>
      </table>

    </div>

    <!-- Panggil file JavaScript Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
