<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Challenge - Poll</title>

        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        

    </head>

    <body>
    
       <h1> How do you feel about the current President of the United States? </h1>
 
        <label class="radio-inline"><input type=radio name='q1' value = "option1"> Eh </label>
        <label class="radio-inline"> <input type=radio name='q1' value = "option2"> Neutral </label>
        <label class="radio-inline"><input type=radio name='q1' value = "option3"> Meh </label>
        <button type='button' name='submit' id='q1'> Submit </button>
    
    </body>
    
    <footer>
       <hr>
       CST 336 Internet Programming 2018&copy; Sean <br />
           <strong> Disclaimer: </strong> This information on this webpage is used only for academic purposes. <br />
   </footer>
    
    <script>
        
        
        //Event Handlers
        $("button").click(function(){
            
            var poll = "q1";
            var qId = $(this).attr("id");
            var choice = $("input[name='" + qId + "']:checked").val();
            console.log(choice);
            console.log(qId);
            updatePoll(choice, qId);
           }
        );

        //Functions
        function updatePoll(choice, qId) {
           $("#container-"+qId).html("<img src='img/loading.gif' alt='loading'>");
           
            //Include here the AJAX call 
            $.ajax(
            {
                type: "get",
                url: "inc/functions.php",
                dataType: "json",
                data: { "userChoice": choice,
                        "pollId": qId
                },
                success: function(data,status) {
                     //use console first then "Network"
                    displayPollChart(data.pollId, parseInt(data.option1), parseInt(data.option2), parseInt(data.option3));
                    //Need to display here total number of respondents
                },
                complete: function(data,status) {
                    //alert(status);  debugging purposes
                }
            });
         
        }
        
        //******
        // Displays poll chart. For more info about charts visit https://www.highcharts.com/demo
        // Parameters:
        // option1 to option5 must be integers, represent the total users who selected each option
        //*******
        function displayPollChart(pollId,option1,option2,option3) {
            var total = option1 + option2 + option3;
            Highcharts.chart('container-'+pollId, {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Total submissions: ' + total
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: pollId+'s',
                        colorByPoint: true,
                        data: [{
                            name: 'Eh',
                            y: option1,
                            sliced: true,
                            selected: true
                        }, {
                            name: 'Neutral',
                            y: option2,
                        }, {
                            name: 'Meh',
                            y: option3
                        },
                        ]
                    }]
                });
        }//endFunction
        
        </script>

    
</html>