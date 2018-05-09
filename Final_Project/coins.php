<?php

    include 'inc/header.php';
        
    include '../dbConnection.php';
    
    function getAllCoins()
    {
        $conn = getDatabaseConnection('fProject');
          
        $sql = "SELECT * FROM Coins ORDER BY id";
          
        $stmt = $conn->prepare($sql);  
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $records;  
    }

?>

<script>
    
    $(document).ready(function(){
    
            $("#coinsLink").addClass("active");
            
            $(".coinLink").click(function(){
                
                //alert(  );
                
                $('#coinModal').modal("show");
                $("#coinInfo").html("<img src='img/loading.gif'>");
                
                console.log($(".coinLink"));
                
                $.ajax({

                    type: "GET",
                    url: "https://api.coinmarketcap.com/v2/ticker/" + $(this).attr('id') + "/",
                    dataType: "json",
                    data: { 'name': $(this).attr('name')},
                    success: function(data,status) {
                       //alert(data.breed);
                       //console.log(data.data.id);
                      $("#coinModalLabel").html("<h2>" + data.data.name +"</h2>");
                      $("#coinInfo").html("");
                      $("#coinInfo").append("symbol: " + data.data.symbol + "</br>");
                      $("#coinInfo").append("rank: " + data.data.rank + "</br>");
                      $("#coinInfo").append("Circulating Supply: " + data.data.circulating_supply + "</br>");
                      $("#coinInfo").append("Total Supply: " + data.data.total_supply + "</br>");
                      $("#coinInfo").append("Max Supply: " + data.data.max_supply + "</br>");
                      $("#coinInfo").append("Price: $" + data.data.quotes.USD.price + "</br>");
                      $("#coinInfo").append("Market Cap: $" + data.data.quotes.USD.market_cap + "</br>");
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                    //console.log(data);
                    }
                    
                });//ajax
                
                
            });
        
        
    }); //document ready
    
    
</script>

<?php
    $coinList = getAllCoins();
    
    //print_r($coinList);
    
    foreach ($coinList as $coin) {
        
        echo "<a href='#' id='" .$coin['id']."' class='coinLink' symbol='".$coin['symbol']."'  > " . $coin['name'] . " </a> <br>";
        
    }

?>
  
  <!-- Modal -->
<div class="modal fade" id="coinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="coinModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <div id="coinInfo"></div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  

<?php

    include 'inc/footer.php';

?>