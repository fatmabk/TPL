<?php
include_once 'configDB.php';
if (isset($_POST['submit'])) {
  $nom = $_POST['name'];
  $email = $_POST['email'];
  $classe = $_POST['classe'];
  $tel = $_POST['tel'];
  $poste = $_POST['poste'];

  $sql = "INSERT INTO membre (nom,email,classe,tel,poste)
     VALUES ('$nom','$email','$classe','$tel','$poste')";
  if (mysqli_query($conn, $sql)) {
      echo "okkkkkkkkkkkkk";
  } else {
  //  echo "Error: " . $sql . ":-" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
