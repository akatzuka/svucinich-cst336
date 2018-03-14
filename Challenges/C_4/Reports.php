<?php

    $sql1 = "SELECT COUNT(1)
            FROM `om_purchase` p
            INNER JOIN om_user u
            on p.user_id = u.userId
            WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"
            ";
            
    $sql2 = "SELECT `productName`
            FROM `om_user` u
            INNER JOIN `om_purchase` p
            on u.userId = p.user_id
            INNER JOIN `om_product` pro
            on p.productId = pro.productId
            WHERE email LIKE \"%@aol.com\"
            ";
            
    $sql3 = "SELECT SUM(quantity), sex
            FROM `om_user` u
            INNER JOIN `om_purchase` p
            on u.userId = p.user_id
            GROUP BY sex
            ";

    $sql4 = "SELECT DISTINCT(catName)
            FROM `om_purchase` p
            INNER JOIN om_user u
            on p.user_id = u.userId
            INNER JOIN `om_product` pro
            on p.productId = pro.productId
            INNER JOIN `om_category` cat
            on pro.catId = cat.catId
            WHERE purchaseDate >= \"2018-02-01\" AND purchaseDate <= \"2018-02-29\"
            ";
            
    $host = "localhost";
    $dbname = "ottermart";
    $username = "root";
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $dbConn -> prepare($sql1);
    $stmt -> execute();
    $records = $stmt->fetch();
    
    //print_r($records);
    echo "Total purchases in Feburary: " . $records['totalPurchases'];
    
    $stmt = $dbConn -> prepare($sql2);
    $stmt -> execute();
    $records = $stmt->fetchall();
    
    //print_r($records);
    echo "<br/><br/> Items purchased by users with AOL accounts: <br/><br/>";
    
    foreach ($records as $record)
    {
        echo $record['productName'] . "<br />";
    }
    
    $stmt = $dbConn -> prepare($sql3);
    $stmt -> execute();
    $records = $stmt->fetchall();
    
    echo "<br/><br/> Quantity of items purchased by users seperated by sex: <br/><br/>";

    //print_r($records);
    
    foreach ($records as $record)
    {
        echo $record['sex'] . ":" . $record['SUM(quantity'] . "<br />";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>