<?php
  session_start();
  require 'connect.inc.php';
  if(isset($_SESSION['username'])) { echo 'exists <br>'; } else { echo 'new session <br>'; }
  if(isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['password']) && !empty($_POST['password'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $gsent = $db->prepare('SELECT * FROM amazon_users WHERE login = :username AND password = md5(:password)');
    $gsent->bindParam(':username', $username, PDO::PARAM_STR);
    $gsent->bindParam(':password', $password, PDO::PARAM_STR);
    if ($gsent->execute() && $row = $gsent->fetch()) {
	echo 'Status: '.$row['status']. '<br>';
      if ( $row['status'] == '0' ) {
        $output = 'Not activiated wait for Administrator Approval';
      } else {
	      $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $username;
      	$_SESSION['firstname'] = $row['firstname'];
      	$_SESSION['lastname'] = $row['lastname'];
        header('location: dashboard/index.php');
      }
    }
  }
?>
