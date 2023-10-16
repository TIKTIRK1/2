<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №2</title>
</head>
<body>
<h1>
    Лабораторная работа №2
</h1>
    <hr> 
<?PHP
    $Zima = "-1";
    $zima = -1; 
    $_Zima = -1.0;

    $type_Zima = gettype($Zima);
    $type_zima = gettype($zima); 
    $type__Zima = gettype($_Zima);
    echo "Значение переменнной \$Zima = $Zima. Это тип данных \"$type_Zima\"<br />"; 
    echo "Значение переменнной \$zima = $zima. Это тип данных \"$type_zima\"<br />"; 
    echo "Значение переменнной \$_Zima = $_Zima. Это тип данных \"$type__Zima\"<br />";
    echo "План \"Тень-2\" начнется через два-три месяца<br />";
?>
<?PHP
    $int_max=PHP_INT_MAX; 
    echo "<br />Max Integer: $int_max";
    $int_min=PHP_INT_MIN;
    echo "<br />Min integer: $int_min";
    $int_max32 = (2**32)/2-1;
    echo "<br />Max integer: $int_max32";
?>
<?PHP
    echo 'это простая строка';
    echo "<br>","<br>";
    echo 'Также вы можете вставлять в строки символ новой строки<br> 
    таким образом,поскольку это нормально'; 
    echo "<br>","<br>";
    // Выведет. Однажды Арнольд сказал: "I'll be back"
    echo 'Однажды он сказал: "I\'ll be back"';
    echo "<br>","<br>";
    // Выведет: Вы удалили С:\*.*? 
    echo 'Вы удалили C:\*.*?';
    echo "<br>","<br>";
    // Выведет: вы удалили C:\*.*2 
    echo 'Вы удалили С:\*.*?';
    echo "<br>","<br>";
    // Выведет. Это не вставит: \n новую строку
    echo 'это не вставит:\n в новую строку';
    echo "<br>","<br>";
    // Выведет: Переменные Sexpand также Seither не подставляются
    echo 'Переменные $expand также $either не подставляются';
?>
</body>
</html>
