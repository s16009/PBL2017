<?php
session_start();
$db['host'] = "localhost";  // DBサーバのURL
$db['user'] = "root";  // ユーザー名
$db['pass'] = "yc20140219";  // ユーザー名のパスワード
$db['dbname'] = "PBL2017";  // データベース名
$dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
try {
    $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $stmt = $pdo->prepare('SELECT product.product_name, o.product_num, tray.tray_name, rootstock.rootstock_name
                                    FROM `order` o
                                    JOIN product ON o.product_id = product.product_id
                                    JOIN tray ON o.tray_id = tray.tray_id
                                    JOIN rootstock on o.rootstock_id = rootstock.rootstock_id
                                    WHERE o.user_id = 1;');
    $stmt->execute();
    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $orderData[] = array(
            'product_name'      => $data['product_name']
        ,'tray_name'        => $data['tray_name']
        ,'rootstock_name'   => $data['rootstock_name']
        ,'product_num'      => $data['product_num']
        );
    }



} catch (PDOException $e) {
    $errorMessage = 'データベースエラー';
    //$errorMessage = $sql;
    // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
     echo $e->getMessage();
}






?>


<!DOCTYPE html>

<html lang="ja">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css">
</head>
<meta charset="UTF-8">
<title>PBL</title>
<body>

<?php require_once 'header.php'; ?>

<main class="clearfix">
    <div class="header">
        <img src="images/tyumonnae.png">
    </div>
    <?php foreach ($orderData as $key => $list) { ?>
    <div class="colum">
        <img src="images/tomato.png">
        <div class="details">

            <h1><?php echo ($list["product_name"])?></h1><span id="hikitoribi">引き取り日まであと6日</span>


            <div class="dcol">
                <p>
                    トレイ規格：<span><?php echo ($list["tray_name"])?></span>
                    育苗方法：<span><?php echo ($list["rootstock_name"])?></span>
                    台木：<span>なし</span>
                </p>
            </div>

            <div class="dcol">
                <p>
                    注文数：<span><?php echo ($list["product_num"])?></span>
                    合計：<span>30000円</span>
                </p>
            </div>

        </div>
    </div>
<?php } ?>

</main>
</body>
</html>

