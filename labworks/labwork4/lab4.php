<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h3 align="center">Расстояние между rородами</h3>
        <p>Берлин (широта &phi;<sub>1</sub> = 52,48&deg;, долгота &lambda;<sub>1</sub> = 13,05&deg;)<br /> 
        Варшава (широта&phi;<sub>2</sub> = 52,22&deg;, долгота &lambda;<sub>2</sub> = 21,01&deg;)
        </p>
        <?PHP
            $фA = 52.48; $λA = 13.05;
            $фB = 52.22; $λB = 21.01;
            $фArad = deg2rad ($фA);
            $λArad=deg2rad($λA);
            $фBrad = deg2rad($фB); 
            $λBrad = deg2rad($λB); 
            $cA =  cos ($фArad);
            $cB = cos ($фBrad); 
            $sA = sin($фArad); 
            $sB = sin($фBrad);
            $delta = $λArad - $λBrad;
            $cdelta =cos($delta);
            $sdelta =sin($delta);
            $a = pow($cB*$sdelta, 2);
            $a = $a + pow($cA*$sB-$sA*$cB*$cdelta, 2);
            $a = sqrt ($a) ;
            $b = $sA*$sB+$cA*$cB*$cdelta;
            $ad = atan2($a, $b);
            $s = $ad * 6372.795;
            $s = sprintf ("%01.2f", $s);
            echo "Расстояние между Берлином и Варшавой $s км";
        ?>
        <br><br>
        <?php
            $a=5; $b=3; $c=7;
            echo "Уравнение: $a<i>x</i><sup>2</sup>+$b<i>x</i>+$c=0<br />";
            $D = $b**2-4*$a*$c;
            echo "Дискриминант: $D<br />";
            $x2 = ($D < 0) || ($D == 0) ? "нет корня" : (-$b- sqrt ($D))/2/$a;
            $x2 = ($D > 0) ? (-$b-sqrt ($D))/2/$a : $x2;
            $x1 = ($D > 0) ? (-$b+sqrt($D))/2/$a:"нет корня"; 
            $x1 = ($D == 0) ? (-$b+sqrt($D))/2/$a : $x1;
            echo "Корни: x<sub>1</sub>=$x1 x<sub>2</sub>=$x2";
        ?>
        <br><br>
         <?php //1
            $a=50*mt_rand()/mt_getrandmax();
            $b=50*mt_rand()/mt_getrandmax();
            $c=$a+$b;
            $d=$a*$b;
            echo "№1";
            echo "<br>";
            echo "сумма: ", (int)$c;
            echo "<br>";
            echo "произведение: ", (int)$d;
            echo "<br>";
        ?>
        <?php //2
            $a=50*mt_rand()/mt_getrandmax();
            $b=50*mt_rand()/mt_getrandmax();
            $a=pow((int)$a,2);
            $b=pow((int)$b,2);
            $c=$a+$b;
            echo "№2";
            echo "<br>";
            echo "сумма: ", (int)$c;
            echo "<br>";
        ?>
        <?php //3
            $a=50*mt_rand()/mt_getrandmax();
            $b=50*mt_rand()/mt_getrandmax();
            $c=50*mt_rand()/mt_getrandmax();
            $d=((int)$a+(int)$b+(int)$c)/3;
            echo "№3";
            echo "<br>";
            echo "среднее арифметическое: ", (int)$d;
            echo "<br>";
        ?>
         <?php //4
            $x=10*mt_rand()/mt_getrandmax();
            $y=10*mt_rand()/mt_getrandmax();
            $z=10*mt_rand()/mt_getrandmax();
            $x=(int)$x;
            $y=(int)$y;
            $z=(int)$z;
            $a=(pow(($x+1),4))-2*($z-pow((2*$x),2)+pow($y,2))+abs(sin($y));
            echo "№4";
            echo "<br>";
            echo "среднее арифметическое: ", $a;
            echo "<br>";
        ?>
         <?php
            $x=10*mt_rand()/mt_getrandmax();
            $y=10*mt_rand()/mt_getrandmax();
            $z=10*mt_rand()/mt_getrandmax();
            $x=(int)$x;
            $y=(int)$y;
            $z=(int)$z;
            $a=(pow(($x+1),4))-2*($z-pow((2*$x),2)+pow($y,2))+abs(sin($y));
            echo "№4";
            echo "<br>";
            echo "среднее арифметическое: ", $a;
            echo "<br>";
        ?>
    </body>
</html>
