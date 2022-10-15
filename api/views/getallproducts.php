<?php
    include_once '../controllers/prodcutcontroller.php';
    $res = (new prodcutcontroller())->getallproducts();
    echo json_encode($res);