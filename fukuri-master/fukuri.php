<?php

$shikin = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $shikin = $_POST['shikin'];
  $riritu = $_POST['riritu'];
  $kikan = $_POST['kikan'];
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>複利計算</title>
</head>
<body>
    <div>Compound Interest Caluculation</div>
    <div style="margin: 30px 0px 10px 70px; font-size: 24px;">
    <form action="" method="POST">
        <div style="margin: 0px 5px 7px 0px">
            <label for="shikin" style="font-size: 24px;">元本</label>
            <input type="text" name="shikin" style="width: 100px; height: 24px; font-size: 90%;"　placeholder="を入力してください" value="<?php echo htmlspecialchars($shikin, ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo "<br/>";?>
        </div>

        <div style="margin: 0px 5px 7px 0px">
            <label for="riritu">利率(%)</label>
            <input type="text" name="riritu" style="width: 100px; height: 24px; font-size: 90%;" placeholder="利率" value="<?php echo htmlspecialchars($riritu, ENT_QUOTES, 'UTF-8') ?>">
            <?php echo "<br/>";?>
        </div>

        <div style="margin: 0px 5px 17px 0px" >
            <label for="kikan">期間(年)</label>
            <input type="text" name="kikan" style="width: 100px; height: 24px; font-size: 90%;" placeholder="期間" value="<?php echo htmlspecialchars($kikan, ENT_QUOTES, 'UTF-8') ?>">
            <?php echo "<br/>";?>
        </div>
        
        &ensp;&ensp;&ensp;<input style="margin: 0px 5px 17px 0px; width: 150px; height: 30px; font-size: 18px; padding-top: 0px;" type="submit" value="下に結果を表示">
        </form>
    <?php
        $s = $shikin;
        $r = 1 + $riritu/100;
        $n = $kikan;
        for($a=0; $a< $n; $a++){
            $s = $s * $r;
        }
        
        echo '&ensp;&ensp;&ensp;'.$s.'円に増えました！！'."\n";
        echo "利率".$r;
    ?>
    </div>
</body>
</html>