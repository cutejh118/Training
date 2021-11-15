<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <h1><a href="phpDay1.php">WEB</a></h1>
    <ol>
        <?php
            $list = scandir('./data');
            $y = 0;
            while($y < count($list)){
                if($list[$y] != '.'){
                    if($list[$y] != '..'){
                    echo "<li><a href=\"phpDay1.php?id=$list[$y]\">$list[$y]</a></li>\n";
                    }
                }
            
                $y = $y + 1;
            }
        ?>


      <!-- <li><a href="phpDay1.php?id=HTML">HTML</a></li>
      <li><a href="phpDay1.php?id=CSS">CSS</a></li>
      <li><a href="phpDay1.php?id=JavaScript">JavaScript</a></li> -->
    </ol>
    <h2>
      <?php
      if(isset($_GET['id'])){
        echo $_GET['id'];
      } else {
        echo "Welcome";
      }
      ?>
    </h2>

    <?php
    $i = 0;
    while($i <= 2 ){
        echo '2<br>';
        $i = $i + 1;
    }
    ?>

    <?php
        $arrtest = array('1','2','3','4');
        echo $arrtest[0].'<br>';
        var_dump(count($arrtest));
        // 문제 배열 변경
        array_push($arrtest,'555');
        echo '<br>';
        var_dump(count($arrtest));
        // array_pop($arrtest);
        echo '<br>';
        $x = 0;
        while($x < count($arrtest)){
            echo $arrtest[$x].'<br>';
            $x = $x + 1;
        }
        var_dump(count($arrtest));
    ?>
    <br>
    

    <?php
        $list = scandir('./data');
        var_dump($list);
    ?>

  </body>
</html>