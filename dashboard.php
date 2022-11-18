<?php
    $bar_line_data = [
        'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        'datasets' => [
            [
                'label' => 'First Dataset',
                'data' => [1, 2, 3, 4, 5, 6, 7],
                'borderColor' => 'rgb(75, 192, 192)',
                'backgroundColor' => 'rgb(75, 192, 192)',
                'fill' => false
            ],
            [
                'label' => 'Second Dataset',
                'data' => [5, 6, 3, 4, 8, 6, 2],
                'borderColor' => 'rgb(192, 75, 75)',
                'backgroundColor' => 'rgb(192, 75, 75)',
                'fill' => false
            ]
        ]
    ];
    $bar_line_data_string = str_replace(' ', '%20%', json_encode($bar_line_data));

    $combo_data = [
        'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        'datasets' => [
            [
                'label' => 'First Dataset',
                'data' => [1, 2, 3, 2, 4, 5, 7],
                'borderColor' => 'rgb(75, 192, 192)',
                'backgroundColor' => 'rgb(75, 192, 192)',
                'fill' => false
            ],
            [
                'label' => 'Second Dataset',
                'data' => [5, 6, 3, 4, 8, 6, 2],
                'borderColor' => 'rgb(192, 75, 75)',
                'backgroundColor' => 'rgb(192, 75, 75)',
                'fill' => false,
                'type' => 'bar'
            ]
        ]
    ];
    $combo_data_string = str_replace(' ', '%20%', json_encode($combo_data));

    $doughnut_data = [
        'labels' => ['A', 'B', 'C'],
        'datasets' => [
            [
                'data' => [1, 2, 3],
                'borderColor' => ['rgb(75, 192, 192)', 'rgb(237, 217, 76)', 'rgb(192, 75, 75)'],
                'backgroundColor' => ['rgb(75, 192, 192)', 'rgb(237, 217, 76)', 'rgb(192, 75, 75)'],
                'fill' => false
            ]
        ]
    ];
    $doughnut_data_string = str_replace(' ', '%20%', json_encode($doughnut_data));

    $metric_number = 267;
    $metric_percentage = 72;

    echo "
        <html>
            <head>
                <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
                    integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
                <link rel='stylesheet' href='static/css/style.css'>
            </head>

            <body>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js'></script>
                <h1> Your Dashboard </h1>
                <div class='scorecard-container'>
                    <span class='scorecard' id='myScoreCard'>Number: $metric_number </span>
                    <span class='scorecard' id='myScoreCard1'>Percentage: {$metric_percentage}% </span>
                </div>
                <div class='wrapper'>
                    <div>
                        <h3>Line Chart</h3>
                        <canvas id='myChart' width='500' height='300'></canvas>
                        <script src='./static/js/line_chart.js' canvas_id='myChart' title='Line Chart' data=$bar_line_data_string></script>
                    </div>
                    <div>
                        <h3>Bar Chart</h3>
                        <canvas id='myChart1' width='500' height='300'></canvas>
                        <script src='./static/js/bar_chart.js' canvas_id='myChart1' title='Bar Chart' data=$bar_line_data_string></script>
                    </div>
                    <div>
                        <h3>Combo Chart</h3>
                        <canvas id='myChart2' width='500' height='300'></canvas>
                        <script src='./static/js/line_chart.js' canvas_id='myChart2' title='Combo Chart' data=$combo_data_string></script>
                    </div>
                    <div>
                        <h3>Doughnut Chart</h3>
                        <canvas id='myChart3' width='500' height='300'></canvas>
                        <script src='./static/js/doughnut_chart.js' canvas_id='myChart3' title='Doughnut Chart' data=$doughnut_data_string></script>
                    </div>
                </div>
            </body>
        </html>
    "
?>