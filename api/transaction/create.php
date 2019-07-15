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

echo "Transaction\n";
var_dump($transaction);

// Get Raw Posted Data
$data = json_decode(file_get_contents("php://input"));

echo "Data\n";
var_dump($data);

$transaction->date_of_sale = $data->date_of_sale;
$transaction->venue_pay = $data->venue_pay;
$transaction->venue_pay = $data->total_earn;

// Create Transaction
if ($transaction->create()) {
    echo json_encode(
        array('message' => 'Transaction Posted')
    );
} else {
    echo json_encode(
        array('message' => 'Error Posting Transaction')
    );
}
