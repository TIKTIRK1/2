<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2 align="center">Решение системы линейных уравнений</h2>
        <p align="center">
        2<i>x</i>+3<i>y</i>=8<br />
        3<i>x</i>+2<i>y</i>=7
        </p>
        <?PHP
            $a11=2; $a12=3; $b1=8;
            $a21=3; $a22=2; $b2=7; 
            $delta=$a11*$a22-$a12*$a21; 
            $deltaX=$b1*$a22-$a12*$b2; 
            $deltaY=$a11*$b2-$b1*$a21; 
            $x=$deltaX/$delta;
            $y=$deltaY/$delta;
            echo "<p align='center'>Определеители<br/> &Delta; = $delta<br/>";
            echo "&Delta;<sub><i>x</i></sub> = $deltaX&nbsp;&nbsp;";
            echo "&Delta;<sub><i>y</i></sub> = $deltaY<br/>" ;
            echo "Ответы<br /><i>x</i>=$x&nbsp;&nbsp;<i>y</i>=$y</p>";
        ?>
        <?PHP
            echo 'ASCII код символа Z= '.ord("Z"),"<br>";
            echo 'ASCII код символа AA= '.ord("AA"),"<br>";
            echo 'ASCII код символа [= '.ord("["),"<br>"; 
            echo"<br>";

            $i = 'W';
            echo "Начальное значение строки = $i";
            echo"<br>";
            for($n=0; $n<6; $n++)
            {
            echo ++$i;
            echo"<br>";
            }
            echo"<br>";

            $i = 'AAZ';
            echo "Начальное значение строки = $i";
            echo"<br>";
            for($n=0; $n<6; $n++)
            {
            echo ++$i;
            echo"<br>";
            }
            echo"<br>";
            $i = 'ADz';

            echo "Начальное значение строки = $i";
            echo"<br>";
            echo "Результат инкремента ADz = " .++$i;
            echo "<br>";
        ?>

        <?PHP
            $a=3;
            echo "<br>";
            echo "№1";
            echo "<br>";
            echo $a;    
            echo "<br>";       
        ?>

        <?PHP
        echo "<br>";
        echo "№2";
        $a=10;
        $b=2;
        $c=$a+$b;
        $d=$a-$b;
        $e=$a/$b;
        $f=$a*$b;
        echo "<br>";
        echo "Результат сложения: ".$c;
        echo "<br>";
        echo "Результат разности: ".$d;
        echo "<br>";
        echo "Результат деления: ".$e;
        echo "<br>";
        echo "Результат произведения: ".$f;
        echo "<br>";
        ?>

        <?PHP
        echo "<br>";
        echo "№3";
        $c=15;
        $d=2;
        $result=$c+$d;
        
        echo "<br>";
        echo "Переменная result=: ".$result;
        echo "<br>";
        ?>

        <?PHP
        echo "<br>";
        echo "№4";
        $a=10;
        $b=2;
        $c=5;
        $result=$a+$b+$c;
        
        echo "<br>";
        echo "Сумма: ".$result;
        echo "<br>";
        ?> 

        <?PHP
        echo "<br>";
        echo "№5";
        $a=17;
        $b=10;
        $c=0;
        $c=$a-$b;
        $d=7;
        $result=$c+$d;
        
        echo "<br>";
        echo "Переменная result= ".$result;
        echo "<br>";
        ?> 
        
    </body> 
</html>