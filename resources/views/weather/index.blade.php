<!DOCTYPE html>
<html>
<head>
    <title>Sunlight Weather Widget Flat Responsive Widget Template :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Sunlight Weather Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- main -->
<div class="main">
    <h1>Weather</h1>
    <div class="main-grid1">
        <div class="main-grid1-pos">
        </div>
        <h2>{{$temp}}<sup class="degree">°</sup><span>C</span></h2>
        <p style="color: #1b1e21; font-weight: bold">{{$nameCity}}</p>
        <div class="main-grid1-grids">
            <div class="main-grid1-grid-left">
                <p>Humidity: {{$humidity}}%</p>
                <h3>{{$cloudStatus}}</h3>
            </div>
            <div style="text-align:center;padding:1em 0;">
                <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FHo_Chi_Minh"
                        width="100%" height="115">

                </iframe>
            </div>
            <div class="clear"> </div>
        </div>
    </div>

    <div class="footer">
        <p>Design by "Chú Chym Câu "</p>
    </div>
</div>
</body>
</html>
