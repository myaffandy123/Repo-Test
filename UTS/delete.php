<?php
require_once 'config.php';

$id = $_GET["id"];

$delete = "delete from dosen where id='$id'";
try {
  $prepared = $db->prepare($delete);
  $prepared->execute();
} catch (Exception $e) {
  echo "Error";
}

header("Location: index.php");
?>