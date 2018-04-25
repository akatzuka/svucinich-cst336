//variables
var p1 = [];
var p2 = [];
var points1 = 0;
var points2 = 0;

//functions
startGame();

function startGame()
{
    for (var i = 0; i < 3; i++)
    {
        p1.push(Math.floor(Math.random() * 6 + 1));
    }
    for (var i = 0; i < 3; i++)
    {
        p2.push(Math.floor(Math.random() * 6 + 1));
    }
    points1 = p1.reduce(add, 0);
    points2 = p2.reduce(add, 0);
    displayBoard();
    endGame();
}

function displayBoard()
{
    $("#p1-dice-1").attr("src" , "img/" + p1[0] + ".png");
    $("#p1-dice-2").attr("src" , "img/" + p1[1] + ".png");
    $("#p1-dice-3").attr("src" , "img/" + p1[2] + ".png");
    
    document.getElementById("p1-points").innerHTML = "" + points1 + "</h4>";
           
    $("#p2-dice-1").attr("src" , "img/" + p2[0] + ".png");
    $("#p2-dice-2").attr("src" , "img/" + p2[1] + ".png");
    $("#p2-dice-3").attr("src" , "img/" + p2[2] + ".png");
    
    document.getElementById("p2-points").innerHTML = "" + points2 + "</h4>";
}

function endGame()
{
    if (points1 > points2)
    {
        document.getElementById("outcome").innerHTML = "<h2>You won!</h2>";
    }
    else if (points1 < points2)
    {
        document.getElementById("outcome").innerHTML = "<h2>You lose!</h2>";
    }
    else if (points1 == points2)
    {
        document.getElementById("outcome").innerHTML = "<h2>Tie, you both lose!</h2>";
    }
}

function add(a, b) 
{
    return a + b;
}