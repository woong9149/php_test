<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
    <h1>function</h1>
    <?php 
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    
    
    Fuga aperiam quia, pariatur maxime libero repudiandae enim eligendi, quos facere quo esse, sit quas saepe incidunt dolorem optio reprehenderit corporis aliquid!";

    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
        echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php 
        echo nl2br($str);
    ?>
</body>
</html>