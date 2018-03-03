<?php

    $backgroundImage = "img/sea.jpg";
    
    //print_r($GET);  //displaying all content submitted in the form using the GET method, stored in an array, POST method stores in a $POST array
    if (isset($_GET['keyword']))    //if form was submitted
    { 
      include 'api/pixabayAPI.php';
      //echo "<h3>You searched for " . $_GET['keyword'] . "</h3>";
      $keyword = $_GET['keyword'];
      
      if (isset($_GET['layout'])) {  //user checked a layout
        
        $orientation = $_GET['layout'];
        
      }
      
      if (!empty($_GET['category'])) { //user selected a category
        $keyword = $_GET['category'];
      }
      
      $imageURLs = getImageURLs($keyword, $orientation);
      //$imageURLs = getImageURLs($_GET['keyword']);
      $backgroundImage = $imageURLs[array_rand($imageURLs)];
      //print_r($imageURLs);
      
  }     
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 4: Pixabay Carousel </title>
    <style>
        @import url("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
        @import url("css/styles.css");
        
        body 
        {
            background-image: url(<?=$backgroundImage?>);
        }
        
    </style>
    </head>
    
    <body>
        <br>
        <?php
            // if (!isset($_GET['keyword'])) 
            if (!isset($imageURLs))
            {
              echo "<h2> Type a keyword to display a slideshow <br /> with random images from Pixabay.com </h2>";
            }  
            else{
        ?>
        
        <!--Display Carousel-->
        <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <?php
                    for($i=  0; $i<7; $i++)
                    {
                        echo "<li data-target='#carousel-1' data-slide-to='$i'";
                        echo ($i == 0) ? "class='active'" : "";
                        echo"</li>";
                    }
                ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                    for($i = 0; $i<7; $i++)
                    {
                        do {
                            $randomIndex = rand(0,count($imageURLs)); 
                        } while (!isset($imageURLs[$randomIndex]));
                        echo '<div class="item ';
                        echo ($i == 0) ? "active" : "";
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                    }
                ?>
            </div>
            <!--Controls-->
            <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
                <span class= "glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class= "sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
                <span class= "glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class= "sr-only">Next</span>
            </a>
        </div>
            <?php
                } //endElse from line 50
            ?>
            <br>
            
            <form>
                <input type = "text" name = "keyword" placeholder="Keyword to search for" value="<?=$_GET['keyword']?>"/>
                <input type = "radio" id = "lhorizontal" name = "layout" value = "horizontal" >
                <label for = "Horizontal"></label><label for = "lhorizontal"> Horizontal </label>
                <input type = "radio" id = "lvertical" name = "layout" value = "vertical" >
                <label for = "Vertical"></label><label for = "lvertical"> Vertical </label>
                <select name  = "catagory">
                    <option value = "">Select One</option>
                    <option value = "ocean">Sea</option>
                    <option value = "forest">Forest</option>
                    <option value = "alps">Mountain</option>
                    <option value= "snow">Snow</option>
                </select>
                <input type = "submit" value = "Search" />                
            </form>
            <!--<form method = "GET">-->
            <!--<form method="POST">  Used to prevent information from being leaked in a url -->
        
        <script> src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" </script>
        <script> src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" </script>
    </body>
</html>