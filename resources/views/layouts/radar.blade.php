<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIVE RADAR</title>

    <style>

        body {
            padding: 0;
            margin: 0;
        }
        
        #map {
            margin-top: 30px;
            width: 100%;
            min-height: 100vh
        }

        body.simple a.site-brand {
            display: none
        }
        body.simple a.site-brand {
            display: none !important;
        }
    </style>
</head>
<body>
    <div id="map">
        @yield('radar')
        
    </div>



    <script>
        const elem = document.querySelector(".logo-fr24-flat");

        console.log(elem)
    </script>
</body>
</html>