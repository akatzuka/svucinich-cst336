<?php
    include '../dbConnection.php';
    
    $connection = getDatabaseConnection("fProject");
    
    function getCoinInfo()
    {
        global $connection;
        $sql = "SELECT * FROM Coins WHERE id = " . $_GET['coinId'];
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $record = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    
    if (isset($_GET['updateProduct'])) {
        
        //echo "Trying to update the product!";
        
        $sql = "UPDATE Coins
                SET name = :name,
                    symbol = :symbol,
                    website_slug = :website_slug,
                    rank = :rank,
                    circulating_supply = :circulating_supply,
                    total_supply = :total_supply,
                    max_supply = :max_supply,
                    price = :price,
                    market_cap = :market_cap
                WHERE id = :id";
        $np = array();
        $np[":name"] = $_GET['name'];
        $np[":symbol"] = $_GET['symbol'];
        $np[":website_slug"] = $_GET['website_slug'];
        $np[":rank"] = $_GET['rank'];
        $np[":circulating_supply"] = $_GET['circulating_supply'];
        $np[":total_supply"] = $_GET['total_supply'];
        $np[":max_supply"] = $_GET['max_supply'];
        $np[":price"] = $_GET['price'];
        $np[":market_cap"] = $_GET['market_cap'];
        $np[":id"] = $_GET['id'];
                
        $statement = $connection->prepare($sql);
        $statement->execute($np);        

        
    }
    
    
    if(isset ($_GET['id']))
    {
        $coin = getCoinInfo();
    }
    
    //print_r($coin);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <title>Update Product </title>
        
    </head>
    <body>
        <h1>Update Product</h1>
        
        <form>
            <input type="hidden" name="id" value= "<?=$coin['id']?>"/>
            Name: <input type="text" value = "<?=$coin['name']?>" name="name"><br>
            Symbol: <input type="text" value = "<?=$coin['symbol']?>" name="symbol"><br>
            Website Slug: <input type="text" value = "<?=$coin['website_slug']?>" name="website_slug"><br>
            Rank: <input type="text" value = "<?=$coin['rank']?>" name="rank"><br>
            Circulating Supply: <input type="text" value = "<?=$coin['circulating_supply']?>" name="circulating_supply"><br>
            Total Supply: <input type="text" value = "<?=$coin['total_supply']?>" name="total_supply"><br>
            Max Supply: <input type="text" value = "<?=$coin['max_supply']?>" name="max_supply"><br>            
            Price: <input type="text" name="price" value = "<?=$coin['price']?>"><br>
            ID: <input type="text" name="price" value = "<?=$coin['id']?>"><br>
    
            <input type="submit" name="updateProduct" value="Update Product">
            
        </form>
    </body>
</html>