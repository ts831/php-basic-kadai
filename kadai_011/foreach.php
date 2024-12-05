<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
 </head>
 
 <body>
    <?php
    $data=['name'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];

    foreach($data as $key=>$value){
        echo "{$key}:{$value}<br>";
    }

    ?>
 </body>
 
 </html>
