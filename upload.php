<?php
if(isset($_POST['upload'])){
  echo "<h1><font face='Arial'><b>Wait . . .</font></h1>";
  $filname    = $_POST['nam'] . strrchr($_FILES['file']['name'], '.');
  $uploaddir  = '../../cloud' . $_POST['cdn'] . '/' . $_POST['f'] . '/' . $filname;

  if(move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir)){
    echo "<script> location.href='" . $_POST['r'] . "" . $filname . "&cdn=" . $_POST['cdn'] . "&f=" . $_POST['f'] . "'; </script>";
  } elseif (isset($_POST['er'])) {
    echo "<script> location.href='" . $_POST['r'] . "error=" . $_FILES['file']['error'] . "'; </script>";
  } else {
    echo $_FILES['file']['error'];
  }
}
 ?>
