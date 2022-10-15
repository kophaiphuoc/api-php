<?php
include_once '../controllers/prodcutcontroller.php';
$data = json_decode(file_get_contents("php://input"));

try {
    // $categoryid,$price,$name,$infor,$code
    if ($data->categoryid !=null && $data->price != null && $data->name != null && $data->infor != null && $data->code != null) {
        $res = ((new prodcutcontroller())->addproduct($data->categoryid, $data->price,$data->name,$data->infor, $data->code  ));
        if ($res == false) {
            echo json_encode(
                array(
                    "code" => "0",
                    "message" => "addproduct not successful",
                )
            );
        } else {
            echo json_encode(
                array(
                    "code" => "1",
                    "message" => "addproduct successful",
                )
            );
        }
    }
} catch (Exception $e) {
    echo "Api Error";
        $e->getMessage();
        //throw $th;
}