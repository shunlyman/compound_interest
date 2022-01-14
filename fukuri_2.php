?>
<?php

$shikin = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $shikin = $_POST['shikin'];
  $riritu = $_POST['riritu'];
  $kikan = $_POST['kikan'];
}

?>

    <div>Compound Interest Caluculation</div>
    <div style="margin: 30px 0px 10px 70px; font-size: 24px;">
    <form action="" method="POST">
        <div style="margin: 0px 5px 7px 0px">
            <label for="shikin" style="font-size: 24px;">Compound Interest</label>
            <input type="text" name="shikin" style="width: 100px; height: 24px; font-size: 90%;" value="<?php echo htmlspecialchars($shikin, ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo "<br/>";?>
        </div>

        <div style="margin: 0px 5px 7px 0px">
            <label for="riritu">Annual Interest(%)</label>
            <input type="text" name="riritu" style="width: 100px; height: 24px; font-size: 90%;" value="<?php echo htmlspecialchars($riritu, ENT_QUOTES, 'UTF-8') ?>">
            <?php echo "<br/>";?>
        </div>

        <div style="margin: 0px 5px 17px 0px" >
            <label for="kikan">Elapsed years</label>
            <input type="text" name="kikan" style="width: 100px; height: 24px; font-size: 90%;" value="<?php echo htmlspecialchars($kikan, ENT_QUOTES, 'UTF-8') ?>">
            <?php echo "<br/>";?>
        </div>
        
        &ensp;&ensp;&ensp;<input style="margin: 0px 5px 17px 0px; width: 150px; height: 30px; font-size: 18px; padding-top: 0px;" type="submit" value="result">
        </form>
    <?php
        $s = $shikin;
        $r = 1 + $riritu/100;
        $n = $kikan;
        for($a=0; $a< $n; $a++){
            $s = $s * $r;
        }
        
        echo '&ensp;&ensp;&ensp;'.$s.'B';
       
    ?>
    </div>
