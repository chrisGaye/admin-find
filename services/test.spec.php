<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/admin-find";
    $path .= "/services/test/admin.spec.php";
    include_once($path);

    $admin_test = new AdminTest();

    $admin_test->login_test();


?>