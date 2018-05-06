<?php
    
    include 'inc/header.php';
    
?>
        <!--Display Carousel-->
        <div id="carousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="carousel" data-slide-to="0" class="active"></li>
                <li data-target="carousel" data-slide-to="1"></li>
                <li data-target="carousel" data-slide-to="2"></li>
                <li data-target="carousel" data-slide-to="3"></li>
                <li data-target="carousel" data-slide-to="4"></li>
                <li data-target="carousel" data-slide-to="5"></li>              
                <li data-target="carousel" data-slide-to="6"></li>
                <li data-target="carousel" data-slide-to="7"></li>
                <li data-target="carousel" data-slide-to="8"></li>
                <li data-target="carousel" data-slide-to="9"></li>
            </ol>
              <!-- Carousel Items -->            
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/alex.jpg" alt="Alex">
                </div>
                <div class="item">
                    <img src="img/bear.jpg" alt="Bear">
                </div>
                <div class="item">
                    <img src="img/carl.jpg" alt="Carl">
                </div>
                <div class="item">
                    <img src="img/charlie.jpg" alt="Charlie">
                </div>
                <div class="item">
                    <img src="img/lion.jpg" alt="Lion">
                </div>
                <div class="item">
                    <img src="img/otter.jpg" alt="Otter">
                </div>
                <div class="item">
                    <img src="img/sally.jpg" alt="Sally">
                </div>
                <div class="item">
                    <img src="img/samantha.jpg" alt="Samantha">
                </div>
                <div class="item">
                    <img src="img/ted.jpg" alt="Ted">
                </div>
                <div class="item">
                    <img src="img/tiger.jpg" alt="Tiger">
                </div>
            </div>
            
            <!--Controls-->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class= "glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class= "sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class= "glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class= "sr-only">Next</span>
            </a>
        </div>

        <br>
        
        <a href="pets.php"  class="btn btn-outline-primary" role="button" aria-pressed="true"> Adopt Now! </a>
        
        
        <br>
    
<?php
    
    include 'inc/footer.php';
    
?>