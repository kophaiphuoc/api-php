<?php
include_once '../controllers/usercontroller.php';
$data = json_decode(file_get_contents("php://input"));

try {
    if ($data->username !=null && $data->password != null && $data->adress != null) {
        $res = ((new UserController())->registerusers($data->username, $data->password,$data->adress ));
        if ($res == false) {
            echo json_encode(
                array(
                    header("Status: 200",true,303),
                    "code" => "0",
                    "message" => "registeraccount not successful",
                )
            );
        } else {
            echo json_encode(
                array(
                    "code" => "1",
                    "message" => "registeraccount successful",
                )
            );
        }
    }
} catch (Exception $e) {
    echo "Api Error";
        $e->getMessage();
        //throw $th;
}