<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
 </head>
 
 <body>
     <p>
        <?php
        $score=array('80','60','55','40','100','25','80','95','30','60');

        $sum=array_sum($score);

        $length=count($score);

        echo $sum/$length;
        ?>
     </p>
 </body>
 
 </html>