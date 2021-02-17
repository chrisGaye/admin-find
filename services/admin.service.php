<?php

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/admin-find";
    $path .= "/services/api.service.php";
    include_once($path);

    $http = new ApiService();
    class AdminServce {
        private $endPoint = 'services/admin/';
        private $tokenEndPoint = 'services/token/';
        private $http;

        public function __construct()
        {
            $this->http = new ApiService();
        }


        function login($data_array) {
           return $this->http->post($this->tokenEndPoint, $data_array);
        }

        function create_account($data_array, $token) {
            return $this->http->post($this->endPoint, $data_array, $token);
        }
    }

    //imporattion
    // $path = $_SERVER['DOCUMENT_ROOT'];
    // $path .= "/admin-find";
    // $path .= "/services/admin.service.php";
    // include_once($path);
?>