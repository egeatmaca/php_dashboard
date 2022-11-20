<html>
    <head>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
            integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <link rel='stylesheet' href='static/css/style.css'>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js'></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
        <script src='./static/js/jquery.hottie.js'></script>
    </head>

    <body>
        <h1> Your Dashboard </h1>
        <div class='scorecard-container'>
            <span class='scorecard' id='myScoreCard'>Number: <?php echo $metric_number ?> </span>
            <span class='scorecard' id='myScoreCard1'>Percentage: <?php echo $metric_percentage ?>% </span>
        </div>
        <div class='wrapper'>
            <div>
                <h3>Line Chart</h3>
                <canvas id='myChart' width='500' height='300'></canvas>
                <script src='./static/js/dashboard/line_chart.js' canvas_id='myChart' title='Line Chart' data= <?php echo $bar_line_data_string ?> ></script>
            </div>
            <div>
                <h3>Bar Chart</h3>
                <canvas id='myChart1' width='500' height='300'></canvas>
                <script src='./static/js/dashboard/bar_chart.js' canvas_id='myChart1' title='Bar Chart' data= <?php echo $bar_line_data_string  ?> ></script>
            </div>
            <div>
                <h3>Combo Chart</h3>
                <canvas id='myChart2' width='500' height='300'></canvas>
                <script src='./static/js/dashboard/line_chart.js' canvas_id='myChart2' title='Combo Chart' data= <?php echo $combo_data_string ?> ></script>
            </div>
            <div>
                <h3>Doughnut Chart</h3>
                <canvas id='myChart3' width='500' height='300'></canvas>
                <script src='./static/js/dashboard/doughnut_chart.js' canvas_id='myChart3' title='Doughnut Chart' data= <?php echo $doughnut_data_string ?> ></script>
            </div>
        </div>
        <div>
            <h3> Table </h3>
            <script src="./static/js/dashboard/table.js" 
                    table_id = <?php echo $table_data['table_id']?>
                    table_headers = <?php echo $table_data['table_headers']?>
                    data = <?php echo $table_data['data']?>> 
            </script>           
            <script src="./static/js/dashboard/column_heatmap.js" 
                    table_id = <?php echo $table_data['table_id'] ?> 
                    columns="2"
                    colors="#ffffff,#4bc0c0">
            </script>
        </div>
    </body>
</html>
  