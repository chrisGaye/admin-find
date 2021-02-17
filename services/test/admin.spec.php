<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/admin-find";
    $path .= "/services/admin.service.php";
    include_once($path);
    
    class AdminTest{

        private $admin_service ;

        public function __construct()
        {
            $this->admin_service = new AdminServce();
        }


        function login_test() {
            $this->test_valide_user();
        }

        function test_valide_user() {
            $data = array(
                'email' => "amadou@passer",
                'password' => "passer"
            );
    
            $result = $this->admin_service->login($data);
            if ($result === FALSE  || $result == 'cet utilisateur est introuvable') {
              echo '<div  style="color:red;font-size:1.2rem">test_valide_user failed</div>';
            }
            $data = json_decode($result, true);
            $token = $data['token'];
            $user = $data['user'];
            if ($token) {
                echo '<div style="color:green;font-size:1.2rem">test_valide_user succeded</div>';
            } else {
                echo '<div  style="color:red;font-size:1.2rem">test_valide_user failed</div>';
            }
        }


        function test_unvalide_user() {
            $data = array(
                'email' => "qdfafdqsdf",
                'password' => "passer"
            );
    
            $result = $this->admin_service->login($data);
            if ($result === FALSE  || $result == 'cet utilisateur est introuvable') {
              echo '<div  style="color:green;font-size:1.2rem">test_unvalide_user succeded</div>';
            }
            $data = json_decode($result, true);
            $token = $data['token'];
            $user = $data['user'];
            if ($token) {
                echo '<div style="color:red;font-size:1.2rem">test_unvalide_user failed</div>';
            } else {
                echo '<div  style="color:green;font-size:1.2rem">test_unvalide_user succeded</div>';
            }
        }

    }
    

    // $path = $_SERVER['DOCUMENT_ROOT'];
    // $path .= "/admin-find";
    // $path .= "/services/test/admin.spec.php";
    // include_once($path);
?>