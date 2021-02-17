<?php
  session_start();
  
include('./../../constants.php');

if (
    isset($_REQUEST['username']) &&
    isset($_REQUEST['password']) &&
    !empty($_REQUEST['username']) &&
    !empty($_REQUEST['password'])
) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $url = $HOST.'/services/token/';

  $data = array(
      'email' => $username,
      'password' => $password
  );
  $payload = json_encode($data);
  
  try {
    // use key 'http' even if you send the request to https://...
      $options = array(
        'http' => array(
            'header'  => "Content-Type:application/json\r\n",
            'method'  => 'POST',
            'content' => $payload
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE  || $result == 'cet utilisateur est introuvable') {
      header('location:/admin-find/auth/?error=true');
    }
    $data = json_decode($result, true);
    $token = $data['token'];
    $user = $data['user'];
    if ($token) {
      $_SESSION['token'] = $token;
      $_SESSION['user'] = $user;
      header('location:/admin-find');
    } else {
      header('location:/admin-find/auth/?error=true');
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }

}


?>