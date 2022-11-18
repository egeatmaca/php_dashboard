<?php
    $data = [
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

    $data_string = str_replace(' ', '%20%', json_encode($data));

    echo "
        <html>
            <head>
                <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
                    integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
                <link rel='stylesheet' href='static/css/style.css'>
            </head>

            <body>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js'></script>
                <div class='wrapper'>
                    <div>
                        <h3>Line Chart</h3>
                        <canvas id='myChart' width='500' height='300'></canvas>
                        <script src='./static/js/line_chart.js' canvas_id='myChart' title='Line Chart' data=$data_string></script>
                    </div>
                    <div>
                        <h3>Bar Chart</h3>
                        <canvas id='myChart1' width='500' height='300'></canvas>
                        <script src='./static/js/bar_chart.js' canvas_id='myChart1' title='Bar Chart' data=$data_string></script>
                    </div>
                    <div>
                        <h3>Doughnut Chart</h3>
                        <canvas id='myChart2' width='500' height='300'></canvas>
                        <script src='./static/js/doughnut_chart.js' canvas_id='myChart2' title='Doughnut Chart' data=$data_string></script>
                    </div>
                </div>
            </body>
        </html>
    "
?>