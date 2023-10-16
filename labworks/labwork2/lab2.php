<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" Content="text/html; charset=utf-8">
    <title>Стили</title>

    <style type="text/css">
        H1{
            font-size: 120%;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            color: #FF0000;
            text-align: left;
        }
    </style>

    <style type="text/css">
        H2{
            font-size: 160%;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            color: #00FF00;
            text-align: center;
        }
    </style>

    <style type="text/css">
        H3{
            font-size: 200%;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            color: #0000FF;
            text-align: right;
        }
    </style>
</head>
<body>
    <?php 
        echo "<H1>";
        echo "Hello world!";
        echo "</H1>"; 
        
        echo "<H2>";
        echo "Hello world!";
        echo "</H2>";

        echo "<H3>";
        echo "Hello world!";
        echo "</H3>";
    ?>
</body>
</html>
