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
    $var =NULL;
?>
<?PHP
    class ob
    {
        function do_ob ()
        {
            echo "I use object.";
        }
    }
    $n_ob = new ob;
    $n_ob->do_ob();
?>    
<br> 
<?PHP
    $A["Ivanov"] ["name"] ="Иванов И.И."; 
    $A["Ivanov"] ["age"] ="25"; 
    $A["Ivanov"] ["email"] =" ivanov@mail.ru ";

    $A["Petrov"] ["name"]="Петров П.П.";
    $A["Petrov"] ["age"]="34";
    $A["Petrov"] ["email"] =" petrov@mail.ru ";

    $A["Sidorov"] ["name"] ="Сидоров С.C.";
    $A["Sidorov"] ["age"] ="47";
    $A["Sidorov"]["email"]=" sidorov@mail.ru ";
    echo $A["Petrov"] ["name"]; 
    echo "<br>"; 
    echo $A["Petrov"] ["age"];
    echo "<br>";
    echo $A["Petrov"] ["email"];
?>
<br> 
<?PHP
    $A["Ivanov"] = array("name"=>"Иванов И.И.",
"age"=>"25", "email"=>" ivanov@mail.ru ");
    $A["Petrov"] = array("name"=>"Петров П.П.",
"age"=>"34", "email"=>" petrov@mail.ru ");
    $A["Sidorov"] = array("name"=>"Сидоров С.C.",
"age"=>"47","email"=>" sidorov@mail.ru ");
    echo $A["Petrov"] ["name"];
    echo "<br>";
    echo $A["Petrov"] ["age"]; 
    echo "<br>"; 
    echo $A["Petrov"] ["email"];
?>
<br> 
<?PHP
    $names ["Иванов"] ="Иван";
    $names ["Сидоров"] ="Николай";
    $names ["Петров"] ="Петр";
    echo $names["Сидоров"];
?>
<br> 
<?PHP
    $arr [0] [1] ="Фрукты";
    $arr[1] [0] ="Абрикос";
    $arr [1] [1] ="Апельсин";
    $arr [1] [2] ="Банан";
    $arr [2] [0] ="Огурец";
    $arr [2] [1] = "Помидор";
    $arr [2] [2] ="Тыква";
    echo "<p>".$arr[1] [0] ."</p>"; 
    echo "<p>".$arr[2] [1] ."</p>";
?>
<br> 
<?PHP
    $names [] ="Апельсин";
    $names [] = "Банан";
    $names [] = "Груша";
    $names [] = "Помидор";
    echo $names [0] ;
    echo "<br>"; 
    echo $names [3] ;
?>
<br>    
<?PHP
    $names [1] = "Апельсин";
    $names [2] = "Банан";
    $names [3] ="Груша";
    $names [4] ="Помидор";
    echo $names [1];
?>
<br> 
<?PHP
    $names [0] = "Апельсин";
    $names [1] = "Банан";
    $names [2] ="Груша";
    $names [3] ="Помидор";
    echo $names [1];
?>
<br>  
<?PHP
    echo <<<'EOD'
    Пример текста,
    занимающего несколько строк,
    с помощью синтаксиса nowdoc.
    EOD;
?>
<br>    
<?PHP
    $a=10;
    echo <<<TEXT
    Значение переменной a=$a
    TEXT;
?>    
<br>    
<?PHP
    echo <<<TEXT
    Hello world!
    TEXT;
?>    
<br>
<?PHP
    $a = 2;
    $b=10;
    echo "Переменная a= $a , a переменная b= $b .";
?>
<br>
<?PHP
    echo '<p>';
    echo 'Сегодня отличная погода!!';
    echo '</p>';
    echo '<p>';
    echo 'Сёння выдатнае надвор\'е!';
    echo '</p>';
?>
<br>
<?PHP
    $a = "Это просто текст, записанный в строковую переменную" ;
    echo $a;
?>
<br>
<?PHP
    $a=floor((0.1+0.7) *10); 
    echo $a;
?>
<br>
<?PHP
    $a = 1.234;
    $b = 1.2e3;
    $c = 7E-10;

?>

<?PHP
    $a=false;
    $b=intval($a);
    echo $b;
?>
<br>
<?PHP
    echo(int)((0.1+0.7)*10);
?>
<br>
<?PHP
    $a=1.55;
    $b=intval ($a);
    Var_dump ($b);
?>
<br>
<?PHP
    $a=25/7;
    var_dump($a);
?>
<br>
<?PHP
    $b=(int) $a;
    var_dump ($b); 
?>
<br>
<?PHP
    $c=round ($a);
    var_dump($c);
?>
<br>
<?PHP
    $a=25/5;
    var_dump ($a) ; 
?>

<?PHP
    $large_number = 2147483647;
    var_dump ($large_number); 
    $large_number = 2147483648;
    var_dump($large_number); 
    var_dump( 0x80000000 ); 
    $million = 1000000; 
    $large_number =50000*$million;
    var_dump($large_number);
    "<br>" 
?>
<br>
<?PHP
    $a = -1234; 
    $a = 123; 
    $a = 0123; 
    echo "переменная а, введенная в восьмеричной системе счисления =$a","<br>";
    $a = 0x1A; 
    echo "переменная а, введенная в шестнадцатеричной системе счисления =$a", "<br>"
?>

<?PHP
    $a=5;
    var_dump ($a);
?>
<br>
<?PHP
    var_dump ( (bool) "");
    var_dump((bool) 1);
    var_dump((bool) -2);
    var_dump ( (bool) "foo");
    var_dump((bool)2.3e5) ;
    var_dump((bool) array(12));
    var_dump((bool) array()); 
    var_dump((bool) "false");
?>

<?PHP
    $x=True;
?>

<?PHP
    //$foo = (int) $bar;
    //$foo = ( int ) $bar;
?>

<?PHP
    $a=1000;
    echo "a=$a","<br>";
    unset ($a) ;
    //echo "a=$a"; 
?>
<?PHP
    //$4site = 'not yet';
    $_4site = 'not yet'; 
    $tдyte = 'mansikka'; 
?>

<?PHP
    $var = "Bob";
    $Var = "Joe";
    echo "переменная var=$var, а переменная Var=$Var";
?>
<br>
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

    echo 'Однажды он сказал: "I\'ll be back"';
    echo "<br>","<br>";

    echo 'Вы удалили C:\*.*?';
    echo "<br>","<br>";

    echo 'Вы удалили С:\*.*?';
    echo "<br>","<br>";

    echo 'это не вставит:\n в новую строку';
    echo "<br>","<br>";

    echo 'Переменные $expand также $either не подставляются';
?>
</body>
</html>
