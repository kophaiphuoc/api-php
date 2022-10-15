<?php
include_once '../controllers/prodcutcontroller.php';
$data = json_decode(file_get_contents("php://input"));

try {
    if ($data->idproduct != null) {
        $res = ((new prodcutcontroller())->deletearproduct($data->idproduct));
        if ($res == false) {
            echo json_encode(
                array(
                    "code" => "0",
                    "message" => "product not exists"
                )
            );
        } else {
            echo json_encode(
                array(
                    "code" => "1",
                    "message" => "product delete successfully"
                )
            );
        }
    }
} catch (Exception $e) {
    echo "Api Error";
        $e->getMessage();
        //throw $th;
}