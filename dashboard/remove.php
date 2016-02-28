<?php
  session_start();
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 'On');  //On or Off
  if(isset($_SESSION['username'])) {
    // get correct file path
    $fileName = $_GET['name'];
    $filePath = 'uploads/'.$fileName;
    // remove file if it exists
    if ( file_exists($filePath) ) {
        unlink($filePath);
        header('Location:form_upload.php');
    }
  }
?>
