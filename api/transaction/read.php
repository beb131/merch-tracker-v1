<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/config.php'; // Database class
include_once '../../models/Transaction/class-transaction.php';

// Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

// Instantiate Transaction Object
$transaction = new Transaction($db);

// Transaction Query
$result = $transaction->read();
// Get Row Count
$num = $result->rowCount();

// Check if transactions exist
if ($num > 0) {
    // Transaction array
    $trans_arr = array();
    $trans_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        //Create variables of each key in result
        extract($row);

        $trans_item = array(
            'sales_id' => $sales_id,
            'date_of_sale' => $date_of_sale,
            'venue_pay' => $venue_pay,
            'total_earn' => $total_earn
        );

        // Push to "data"
        array_push($trans_arr['data'], $trans_item);
    }

    // Convert to JSON & Output
    echo json_encode($trans_arr);
} else {
    echo json_encode(
        array('message' => 'No Transactions Found')
    );
}
