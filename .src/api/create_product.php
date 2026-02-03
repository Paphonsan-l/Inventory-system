<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST"); // อนุญาตเฉพาะการส่งข้อมูลแบบ POST

require_once '../config/db.php';

//รับข้อมูล JSON ที่ส่งมาจากหน้าบ้าน
$data = json_decode(file_get_contents("php://input"));

//ตรวจสอบว่าส่งข้อมูลมาครบไหม
if(
    !empty($data->name) &&
    !empty($data->price) &&
    !empty($data->quantity)
){
    try {
        //เตรียมคำสั่ง SQL ทำ Parameter Binding ป้องกัน SQL Injection
        $sql = "INSERT INTO products (name, description, price, quantity, image_url) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        // Default image URL ถ้าไม่มีการส่งมาด้วย
        $default_image = "https://placehold.co/600x400/png";

        //สั่งรันคำสั่ง SQL
        if($stmt->execute([
            $data->name,
            $data->description ?? '', // ถ้าไม่มี description ให้ใส่ค่าว่าง
            $data->price,
            $data->quantity,
            $data->image_url ?? $default_image
        ])){
            //แจ้งกลับไปว่าสำเร็จ
            http_response_code(201); // 201 Created
            echo json_encode(["message" => "Product was created."]);
        }
    } catch (PDOException $e) {
        http_response_code(503); // 503 Service Unavailable
        echo json_encode(["error" => "Unable to create product: " . $e->getMessage()]);
    }
} else {
    http_response_code(400); // 400 Bad Request
    echo json_encode(["message" => "Incomplete data."]);
}
?>