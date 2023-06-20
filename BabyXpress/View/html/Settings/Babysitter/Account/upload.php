<?php
  $targetDirectory = "uploads/";
  $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
  $uploadSuccess = move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

  if ($uploadSuccess) {
    echo "File uploaded successfully!";
  } else {
    echo "File upload failed.";
  }
?>
