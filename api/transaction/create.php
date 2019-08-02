<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Methods, Access-Control-Allow-Headers, Content-Type, Authorization, X-Requested-With');

include_once '../../config/config.php'; // Database class
include_once '../../models/Transaction/class-transaction.php';

// Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

// Instantiate Transaction Object
$transaction = new Transaction($db);

// Get Raw Posted Data
$data = json_decode(file_get_contents("php://input"));

$transaction->date_of_sale = $data->date_of_sale;
$transaction->venue_pay = $data->venue_pay;
$transaction->total_earn = $data->total_earn;
$transaction->product_type = $data->product_type;
$transaction->product_size = $data->product_size;
$transaction->product_variation = $data->product_variation;
$transaction->product_gender = $data->product_gender;
$transaction->product_quantity = $data->product_quantity;
$transaction->unit_price = $data->unit_price;

// Create Transaction
$sales_id = $transaction->create_sales_id();
echo json_encode(array('message' => 'Transaction Posted! Sales ID: ' . $sales_id));
$product_id_result = $transaction->create_product_id();
$product_id = $product_id_result->fetchColumn();
echo json_encode(array('message' => 'Transaction Posted! Product ID: ' . $product_id));
$transaction->add_transaction($sales_id, $product_id);
echo json_encode(array('message' => 'Transaction Posted!'));
