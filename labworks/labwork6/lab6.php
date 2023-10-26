<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?PHP
            $a = array( 'color' => 'red',
            'taste' => 'sweet', 
            'shape' => 'round', 
            'name'=>'apple',
            4) ;
            $a['color'] = 'red';
            $a ['taste'] = 'sweet'; 
            $a ['shape'] = 'round'; 
            $a['name'] = 'apple';
            $a []=4;
        ?>
        <?php
            $b[] = 'a';
            $b[] ='b';
            $b[] = 'c';
        ?>
        <?php
            $A=array(0=>array('red', 'green'),
                        1=>array('blue','yellow') ,
                        2=>array('grey', 'black', 'white') ) ;
            print_r($A) ;
            echo '<br><br>';
            var_dump ($A[0] [1]);
        ?>
        <br>
        <?php
            $colors=array('красный','синий','зеленый','желтый' ) ;
            foreach ($colors as $color){
                echo "Вам нравится $color?<br>";
            }
        ?>
        <?php
            $data[]= array('volume' => 67, 'edition' => 2);
            $data[] = array('volume' => 86, 'edition' => 1);
            $data[] = array('volume' => 85, 'edition' =>6); 
            $data[] = array('volume' => 98, 'edition' => 2);
            $data[] = array('volume' => 86, 'edition' => 6); 
            $data[] = array('volume' => 67, 'edition' => 7);
            $volume = array_column($data, 'volume');
            $edition = array_column($data, 'edition'); 
            array_multisort ($volume, SORT_DESC,$edition,SORT_ASC, $data);
                foreach ($data as $value){
                    echo '<p>';
                    print_r($value);
                    echo '</p>';
                }
        ?>
        <?php
            $text='Hello. What a beautiful day today. Let\'s go now for a walk.';           
            $number_sentences=substr_count ($text, '.'); 
            $sentences=explode('.', $text); 
            for ($i=0; $i < $number_sentences; $i++){
                $number_word[] =str_word_count ($sentences [$i]);
            }
            $max_kol_word=max($number_word) ;
            $key_max_word=array_search($max_kol_word, $number_word) +1;
            print_r($sentences);
            echo "<br>Наибольше количество слов <b>$max_kol_word</b> в <b>".$key_max_word.'</b>-м предложении.'; 
        ?>
        <br><br>
        <?PHP //1
            echo "№1<br>";
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i+=2){
                $arr1[$i]=0;
                $arr1[$i+1]=1;
            }
            print_r($arr1);
        ?>
        <br><br>
        <?PHP //2
            echo "№2<br>";
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i+=2){
                $arr2[$i]=pow($i,2);
                $arr2[$i+1]=pow($i+1,2);;
            }
            print_r($arr2);
        ?>
        <br><br>
        <?PHP //3
            echo "№3<br>";
            $pr1=1;
            $sum1=0;
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i++){
                $b=(int)10*mt_rand()/mt_getrandmax();
                $arr3[$i]=(int)$b;
            }
            $pr=array_product($arr3);
            $sum=array_sum($arr3);
            for ($i=0; $i <=$a ; $i++){
                $pr1=$pr1*$arr3[$i];
                $sum1=$sum1+$arr3[$i];
            }
            print_r($arr3);
            echo "<br>C помощью функций: Произведение($pr) Сумма($sum)<br>";
            echo "Без функций: Произведение($pr1) Сумма($sum1)<br>";
        ?>
        <br><br>
        <?PHP //4
            echo "№4<br>";
            $m=0;
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i++){
                $b=(int)10*mt_rand()/mt_getrandmax();
                $arr4[$i]=(int)$b;
            }
            print_r($arr4);
            foreach (array_count_values($arr4) as $val => $c){
                if ($c>1){
                    $m++;
                }
            }
            echo "$m cовпадений<br>";
        ?>
        <br><br>
        <?PHP //5
            echo "№5<br>";
            $min=9;
            $max=0;
            $imin=0;
            $imax=0;
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i++){
                $b=(int)10*mt_rand()/mt_getrandmax();
                $arr5[$i]=(int)$b;
            }
            print_r($arr5);
            for( $i= 0; $i <=$a ; $i++ ){
                if($arr5[$i]>$max){
                    $max=$arr5[$i];
                    $imax=$i;
                }
                if($arr5[$i]<$min){
                    $min=$arr5[$i];
                    $imin=$i;
                }
            }
            $arr5[$imin]=$max;
            $arr5[$imax]=$min;
            echo "<br>";
            print_r($arr5);
        ?>
        <br><br>
        <?PHP //6
            $b=0;
            
            echo "№6<br>";
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i++){
                $b=(int)10*mt_rand()/mt_getrandmax();
                $arr6[$i]=(int)$b;
            }
            print_r($arr6);
            echo "<br>";
            $arrr6=$arr6;
            asort($arrr6);
            echo "C помощью функций:";
            print_r($arrr6);
            echo "<br>";
            for($i= 0; $i < $a ; $i++){
                for($j= 0; $j < ($a-1)-$i ; $j++){
                    if ($arr6[$j]>$arr6[$j+1]){
                        $b=$arr6[$j];
                        $arr6[$j]=$arr6[$j+1];
                        $arr6[$j+1]=$b;
                    }
                }
            }
            echo "Без помощи функций:";
            print_r($arr6);
        ?>
        <br><br>
        <?PHP //7
            $s=0;
            echo "№7<br>";
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i++){
                $b=(int)10*mt_rand()/mt_getrandmax();
                $arr7[$i]=(int)$b;
            }
            print_r($arr7);
            for($i= 0; $i < $a ; $i++){
                $arrr7=$arr7;
                $arrr77=$arr7;
                unset($arrr7[$i]);
                unset($arrr77[$i]);
                asort($arrr77);
                if($arrr7 === $arrr77){
                    $s++;
                }
            }
            if($s>0){
                echo "<br>Можно $s способами";
            }
            else{echo "<br>Нельзя";}
        ?>
        <br><br>
        <?PHP //8
            echo "№8<br>";
            $a=(int)10*mt_rand()/mt_getrandmax();
            for ($i=0; $i <=$a ; $i++){
                $b=(int)10*mt_rand()/mt_getrandmax();
                $arr8[$i]=(int)$b;
            }
            print_r($arr8);
            echo "<br>";
            $arr88=array_unique($arr8);
            print_r($arr88);
        ?>
        <br><br>
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

        ?>
    </body>
</html>