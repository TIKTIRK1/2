<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?PHP //9
            $j=0;
            $s=0;
            echo "№9<br>";
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i++){
                $b=(int)10*mt_rand()/mt_getrandmax();
                $arr9[$i]=(int)$b;
            }
            print_r($arr9);
            $arr99=$arr9;
            echo "<br>a)";
            shuffle($arr9);
            print_r($arr9);
            while($j==0){
                $arrr99=$arr99;
                shuffle($arrr99);
                for ($i=0; $i <=$a ; $i++){
                    if ($arrr99[$i]==$arr99[$i]){
                        $s++;
                    }
                }
                if ($s==0){
                    $j++;
                }
            }
            echo "<br>б)";
            print_r($arrr99);

        ?>
</body>
</html>
