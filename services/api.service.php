<?php

class ApiService {

    // private $HOST = "https://young-oasis-29112.herokuapp.com";
    private $HOST = "http://localhost:4000";
    
    function post($url, $data_array,$token=false, $debug=false) { 
        try {
            
            $payload = json_encode($data_array);
            $options = null;
            if ($token != false) {
              $options = array(
                'http' => array(
                    'header'  => "Content-Type:application/json\r\n",
                    'method'  => 'POST',
                    'content' => $payload,
                    'header' => 'Authorization: Bearer '.$token
                )
              );
            } else {
              $options = array(
                'http' => array(
                    'header'  => "Content-Type:application/json\r\n",
                    'method'  => 'POST',
                    'content' => $payload
                )
              );
            }
          $context  = stream_context_create($options);
          $result = file_get_contents( "$this->HOST/$url", false, $context);
          return $result;
        } catch (Exception $e) {
          if ($debug) {
            echo $e->getMessage(); 
          }
          return FALSE;
        }
    }
    
    
    function get($url, $token=false, $debug=false) {
        try {
            $options = false;
            if ($token!=false) {
              $options = array(
                'http' => array(
                    // 'header'  => "Content-Type:application/json\r\n",
                    'method'  => 'GET',
                    'header' => 'Authorization: Bearer '.$token
                )
              );
            } else {
              $options = array(
                'http' => array(
                    // 'header'  => "Content-Type:application/json\r\n",
                    'method'  => 'GET',
                )
              );
            }

          $context  = stream_context_create($options);
          $result = file_get_contents( "$this->HOST/$url", false, $context);
          return $result;
        } catch (Exception $e) {
          if ($debug) {
            echo $e->getMessage(); 
          }
          return FALSE;
        }
    }
    
    function patch($url, $data_array,$token=false, $debug=false) { 
        try {
            
            $payload = json_encode($data_array);
            $options = null;
            if ($token != false) {
              $options = array(
                'http' => array(
                    'header'  => "Content-Type:application/json\r\n",
                    'method'  => 'PATCH',
                    'content' => $payload,
                    'header' => 'Authorization: Bearer '.$token
                )
              );
            } else {
              $options = array(
                'http' => array(
                    'header'  => "Content-Type:application/json\r\n",
                    'method'  => 'PATCH',
                    'content' => $payload
                )
              );
            }

          $context  = stream_context_create($options);
          $result = file_get_contents( "$this->HOST/$url", false, $context);
          return $result;
        } catch (Exception $e) {
          if ($debug) {
            echo $e->getMessage(); 
          }
          return FALSE;
        }
    }
    
    function delete($url, $id, $token=false, $debug=false) { 
        try {
            $options = null;
            if ($token != false) {
              $options = array(
                'http' => array(
                    'header'  => "Content-Type:application/json\r\n",
                    'method'  => 'DELETE',
                    'header' => 'Authorization: Bearer '.$token
                )
              );
            } else {
              $options = array(
                'http' => array(
                    'header'  => "Content-Type:application/json\r\n",
                    'method'  => 'DELETE',
                )
              );
            }
          $context  = stream_context_create($options);
          $result = file_get_contents("$this->HOST/$url/$id", false, $context);
          return $result;
        } catch (Exception $e) {
          if ($debug) {
            echo $e->getMessage(); 
          }
          return FALSE;
        }
    }
}
//importation
// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= "/admin-find";
// $path .= "/services/api.service.php";
// include_once($path);

?>