<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $str = '123456789';
            $slen = strlen($str);
            echo "Исходная строка $str"; 
            if( $slen < 6 )
            {
                echo "<br>Количество цифр меньше шести";
            }
            else
            {
                $str1 = substr($str, 0,3);  
                $str2 = substr($str,-3);
                $sum1 = $str1[0] + $str1[1] + $str1[2];
                $sum2 = $str2[0] + $str2[1] + $str2[2];  
                echo "<br>Первые три символа строки \$str-$str1. Их сумма равна $sum1"; 
                echo "<br>Последние три символа строки \$str-$str2. Их сумма равна $sum2";
                if( $sum1==$sum2)
                {
                    echo "<br>Да";
                }
                else 
                {
                    echo "<br>Нет"; 
                }
            }
        ?>
        <br><br>
        <?php
            $str = "Мы строили, строили и наконец построили."; 
            $str_md5 = md5 ($str);
            echo "<br>Исходная строка: $str";
            echo "<br>MD5-хеш этой строки: $str_md5";
            $a_dig = array(1,2,3,4,5,6,7,8,9,0);
            $str_b = str_replace($a_dig,"",$str_md5);
            $slen_b = strlen($str_b);
            $slen_d = 32-$slen_b;
            echo "<br />Буквы, содержащиеся в MD5-хеш функции $str_b.";
            echo "<br />Количество букв в MD5-хеш функции - $slen_b";
            echo "<br />Количество цифр в MD5-хеш функции- $slen_d";
        ?>
        <br><br>
        <?php //1
            echo "№1";
            $str1 = 'abcde';
            $str2 = 'edcba';
            echo "<br>Исходная строка 1: $str1";
            echo "<br>Исходная строка 2: $str2"; 
            $str11 = substr($str1, 0,3);
            $str22 = substr($str2, 0,3);
            if( $str11 == 'abc' )
            {
                $str1=str_replace("abc","www",$str1);
                echo "<br>Измененная строка 1: $str1";
            }
            else
            {  
                $str1=$str1.'zzz';
                echo "<br>Измененная строка 1: $str1";
            }
            if( $str22 == 'abc' )
            {
                $str2=str_replace("abc","www",$str2);
                echo "<br>Измененная строка 2: $str2";
            }
            else
            {  
                $str2=$str2.'zzz';
                echo "<br>Измененная строка 2: $str2";
            }
        ?>
        <br><br>
        <?php //2
            echo "№2";
            $str1 = 'abcdefgklmn';
            $str2 = 'abc';
            echo "<br>Исходная строка 1: $str1";
            echo "<br>Исходная строка 2: $str2"; 
            if( strlen($str1) > 10  )
            {
                $str1=substr($str1, 0,5);
                echo "<br>Измененная строка 1: $str1";
            }
            else
            {  
                $str1=str_pad($str1, 12, 'O', STR_PAD_RIGHT);
                echo "<br>Измененная строка 1: $str1";
            }
            if( strlen($str2) > 10  )
            {
                $str2=substr($str2, 0,5);
                echo "<br>Измененная строка 2: $str2";
            }
            else
            {  
                $str2=str_pad($str2, 12, 'O', STR_PAD_RIGHT);
                echo "<br>Измененная строка 2: $str2";
            }
        ?>
        <br><br>
        <?php //3
            echo "№3";
            $str1 = 'a1b2c3d4e5f6g7k8l9m10n';
            echo "<br>Исходная строка 1: $str1";
            $m = array(1,2,3,4,5,6,7,8,9,0);
            $str2 = str_replace($m,"",$str1);
            $k = strlen($str1)-strlen($str2);
            echo "<br>Количество цифр: $k";
        ?>
        <br><br>
        <?php //4
            echo "№4";
            $str1 = '1word2word3word';
            echo "<br>Исходная строка 1: $str1";
            $str1=str_replace("word","letter",$str1);
            echo "<br>Измененная строка 1: $str1";
        ?>
        <br><br>
        <?php //5
            echo "№5";
            $str1 = 'abcxabcyadcx';
            echo "<br>Исходная строка 1: $str1";
            $str1=str_replace("abcx","abc",$str1);
            echo "<br>Измененная строка 1: $str1";
        ?>
        <br><br>
        <?php //6
            echo "№6";
            $str1 = 'abacdabaefgklm';
            echo "<br>Исходная строка 1: $str1";
            $str2 = str_replace("aba","",$str1);
            $k = (strlen($str1)-strlen($str2))/3;
            echo "<br>Количество вхождений: $k";
        ?>
        <br><br>
        <?php //7
            echo "№7";
            $str1 = 'milk>home*game&root$joy)';
            $str2 = '>*&$)';
            echo "<br>Исходная строка 1: $str1";
            echo "<br>Исходная строка 2: $str2";
            for ($i=0; $i<strlen($str2);$i++)
            {
                $str1 = str_replace($str2[$i]," ",$str1);
            }
            echo "<br>Измененная строка 1: $str1";
        ?>
        <br><br>
        <?php //8
            echo "№8";
            $str1 = 'ABCDEFGKL';
            echo "<br>Исходная строка 1: $str1";
            $str1=$str1[0].strtolower(substr($str1,1));
            echo "<br>Измененная строка 1: $str1";
        ?>
    </body>
</html>
