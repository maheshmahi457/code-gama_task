<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Statastics</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-pie.min.js"></script>
    <link rel="stylesheet" href="">
    <style>
        html, body, #container {
            width: 95%;
            height: 95%;
            margin: 0;
            padding: 0;
    }

a{
    text-align: center;
    font-size: 20px;
}

    </style>
    <script>
        anychart.onDocumentReady(function() {
            // set the data
            var data = <?php echo json_encode($result); ?>;
            // create the chart
            var chart = anychart.pie();

            // set the chart title
            // let str1 = <?php echo $tagName; ?>;
            // let str2 = 'Stack Overflow Statastics on ';
            // var res = str1.concat(str2);
            // chart.title(res);

            // add the data
            chart.data(data);

            // display the chart in the container
            chart.container('container');
            chart.draw();
        });
    </script>
</head>

<body>
<a href="<?php echo url('home')?>" >Back</a>    
    <div id="container"></div>

    
</body>

</html>