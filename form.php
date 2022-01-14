<?php
  $name = '';

  if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST['name'];
    $isDarvish = false;
    if($name === 'ダルビッシュ'){
      $isDarvish = true;
    }
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>test</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="name" placeholder="ダルビッシュと入力してください" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="submit" value="submit">
    <?php
      if ($isDarvish) {
       echo "私はダルビッシュです";
      } else{
       echo "私はダルビッシュではありません"; 
      }
    ?>
  </form>
</body>
</html>
