<?php
class Transaction
{
    private $conn;
    private $products_table = 'products';
    private $sales_table = 'sales';
    private $product_sales_table = 'products_in_sales';
    private $inventory_table = 'daily_inventory_levels';

    /** Transaction Properties **/
    // Products Table
    public $product_id;
    public $product_type;
    public $product_size;
    public $product_variation;
    public $product_gender;
    public $default_unit_price;

    // Products in Sales Table
    public $product_quantity;
    public $unit_price;

    // Sales Table
    public $sales_id;
    public $date_of_sale;
    public $venue_pay;
    public $total_earn;

    // Constructor w/ DB
    public function __construct($db)
    {
        $this->conn = $db;
    }


    /*** 
     * 
     * FUNCTION read()
     * Returns all transactions ordered by transaction_date DESC 
     * 
     ***/
    public function read()
    {
        // Create Query
        $query = 'SELECT * FROM ' . $this->sales_table;

        // Prepare Statement
        $stmt = $this->conn->prepare($query);

        // Execute Query
        $stmt->execute();

        return $stmt;
    }

    /*** 
     * 
     * FUNCTION create()
     * Create new transaction
     * 
     ***/
    public function create_sales_id()
    {

        /********** Query 1 **********/

        // Calculate total earnings and INSERT INTO sales table, include venue earn, or modify row later with total earnings
        $query_sales = 'INSERT INTO ' . $this->sales_table . ' (date_of_sale, venue_pay, total_earn) 
                   VALUES (:date_of_sale,:venue_pay,:total_earn);';

        // Prepare Statement
        $stmt_sales = $this->conn->prepare($query_sales);

        // Sanitize Data
        $this->date_of_sale = htmlspecialchars(strip_tags($this->date_of_sale));
        $this->venue_pay = htmlspecialchars(strip_tags($this->venue_pay));
        $this->total_earn = htmlspecialchars(strip_tags($this->total_earn));

        // Bind Data
        $stmt_sales->bindParam(':date_of_sale', $this->date_of_sale);
        $stmt_sales->bindParam(':venue_pay', $this->venue_pay);
        $stmt_sales->bindParam(':total_earn', $this->total_earn);

        // Execute Query
        if (!$stmt_sales->execute()) {
            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt_sales->error);

            return false;
        }

        // Pull sales ID so we can detail the individual product transactions
        /******** EXAMPLES **********/
        /** PDO option
         **   $stmt = $db->prepare("...");
         **   $stmt->execute();
         **   $id = $db->lastInsertId();
         ** SQL option
         **   $stmt = $db->query("SELECT LAST_INSERT_ID()");
         **   $lastId = $stmt->fetchColumn();
         */

        $this->sales_id = $this->conn->lastInsertId();

        return $this->sales_id;
    }

    public function create_product_id()
    {
        /********** Query 2 **********/
        // Get product id by looking up matching product variations using form data. 

        $query_product_id = "SELECT product_id FROM "
            . $this->products_table
            . " WHERE product_type = :product_type
            AND (product_size = :product_size OR product_size is NULL)
            AND (product_variation = :product_variation OR product_variation is NULL)
            AND (product_gender = :product_gender OR product_gender is NULL)
            ";

        // Prepare Statement
        $stmt_product_id = $this->conn->prepare($query_product_id);

        // Sanitize Data
        $this->product_type = htmlspecialchars(strip_tags($this->product_type));
        $this->product_size = htmlspecialchars(strip_tags($this->product_size));
        $this->product_variation = htmlspecialchars(strip_tags($this->product_variation));
        $this->product_gender = htmlspecialchars(strip_tags($this->product_gender));

        // Bind Data
        $stmt_product_id->bindParam(':product_type', $this->product_type);
        $stmt_product_id->bindParam(':product_size', $this->product_size);
        $stmt_product_id->bindParam(':product_variation', $this->product_variation);
        $stmt_product_id->bindParam(':product_gender', $this->product_gender);

        // Execute Query
        if (!$stmt_product_id->execute()) {
            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt_product_id->error);
            return false;
        }

        return $stmt_product_id;
    }

    public function add_transaction($sales_id, $product_id)
    {
        // Query 3 +
        // Insert into products_in_sales by each product ID, use the same sales ID for each product in submitted sale. 
        // Altered prices need to be input as a separate row. 
        $query_add_transaction = "INSERT INTO " . $this->product_sales_table . "(sales_id, product_id, quantity, per_product_earn)
                                    VALUES (:sales_id, :product_id, :quantity, :per_product_earn)";

        // Prepare Statement
        $stmt_add_transaction = $this->conn->prepare($query_add_transaction);

        // Sanitize Data
        $sales_id = htmlspecialchars(strip_tags($sales_id));
        $product_id = htmlspecialchars(strip_tags($product_id));
        $this->product_quantity = htmlspecialchars(strip_tags($this->product_quantity));
        $this->unit_price = htmlspecialchars(strip_tags($this->unit_price));

        // Bind Data
        $stmt_add_transaction->bindParam(':sales_id', $sales_id);
        $stmt_add_transaction->bindParam(':product_id', $product_id);
        $stmt_add_transaction->bindParam(':quantity', $this->product_quantity);
        $stmt_add_transaction->bindParam(':per_product_earn', $this->unit_price);

        // Execute Query
        if (!$stmt_add_transaction->execute()) {
            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt_add_transaction->error);

            return false;
        }

        return true;
    }
}
