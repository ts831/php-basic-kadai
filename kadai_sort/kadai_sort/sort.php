<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
       

        function sort_2way(&$array, $order) {
            if ($order === true) {
                
                sort($array);

                echo '昇順にソートします。<br>';

        foreach($array as $value ){
            echo "{$value}<br>";
        }
            } else {
                
                rsort($array);

        echo'降順にソートします。<br>';

        foreach($array as $value){
            echo "{$value}<br>";
        }

            }
        }
        $array = [15, 4, 18, 23, 10 ];

        // TRUEで昇順ソート
        sort_2way($array,true);

         //FALSEで降順ソート
        sort_2way($array,false);

        

       
        
        

            
        

        
        ?>
    </p>
</body>

</html>