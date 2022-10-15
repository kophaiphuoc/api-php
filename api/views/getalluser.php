<?php
    include_once '../controllers/usercontroller.php';
    $res = (new UserController())->getalluser();
    echo json_encode($res);