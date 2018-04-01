<?php
    
    session_start();
    
    include '../../dbConnection.php';
    
    function displayAllProducts()
    {
        $conn = getDatabaseConnection("ottermart");
        $sql = "SELECT productName, productDescription, price FROM om_product ORDER BY 'productName'";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($record as $records)
        {
            echo $record["productName"] . " " . $record["productDescription"] . " " . $record["price"] . "<br/>";
        }
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page</title>
    </head>
    <body>

        <h1> Admin Main Page</h1>
        
        <h3> Welcome <?=$SESSION['adminName']?> </h3>
        
        <br />
        
        <strong> Products: </strong> <br />
        
        <?=displayAllProducts()?>


    </body>
</html>