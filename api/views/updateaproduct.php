<?php
include_once '../controllers/prodcutcontroller.php';
$data = json_decode(file_get_contents("php://input"));

try {
    //$idproduct,$nameproduct
    if ($data->idproduct != null && $data->nameproduct != null) {
        $res = ((new prodcutcontroller())->updateaproduct($data->idproduct,$data->nameproduct));
        if ($res == false) {
            echo json_encode(
                array(
                    "code" => "0",
                    "message" => "update failed"
                )
            );
        } else {
            echo json_encode(
                array(
                    "code" => "1",
                    "message" => "update successfully"
                )
            );
        }
    }
} catch (Exception $e) {
    echo "Api Error";
        $e->getMessage();
        //throw $th;
}