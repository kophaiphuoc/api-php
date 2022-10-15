<?php
include_once '../controllers/prodcutcontroller.php';
$data = json_decode(file_get_contents("php://input"));

try {
    if ($data->name != null) {
        $res = ((new prodcutcontroller())->getaproduct($data->name));
        if ($res == false) {
            echo json_encode(
                array(
                    "code" => "0",
                    "message" => "product not exists"
                )
            );
        } else {
            echo json_encode(
                $res
            );
        }
    }
} catch (Exception $e) {
    echo "Api Error";
        $e->getMessage();
        //throw $th;
}