<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christine Kyle</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #3498db;
            overflow: hidden;
        }

        li {
            float: left;
            border-right: 1px solid #2980b9;
        }

        li:last-child {
            border-right: none;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #2980b9;
        }
        
        li span {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
        }
    </style>
</head>
<body>
    @include('navbar')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
